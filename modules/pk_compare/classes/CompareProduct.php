<?php
/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
use PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;
class CompareProduct extends ObjectModel
{
    public $id_compare;

    public $id_customer;

    public $date_add;

    public $date_upd;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'compare',
        'primary' => 'id_compare',
        'fields' => array(
            'id_compare' =>    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_customer' =>    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
        ),
    );

    /**
     * Get all compare products of the customer
     * @param int $id_customer
     * @return array
     */
    public static function getCompareProducts($id_compare)
    {
        $results = Db::getInstance()->executeS('
        SELECT DISTINCT `id_product`
        FROM `'._DB_PREFIX_.'compare_product`
        WHERE `id_compare` = '.(int)($id_compare));

        $compareProducts = null;

        if ($results) {
            foreach ($results as $result) {
                $compareProducts[] = (int)$result['id_product'];
            }
        }

        return $compareProducts;
    }


    /**
     * Add a compare product for the customer
     * @param int $id_customer, int $id_product
     * @return bool
     */
    public static function addCompareProduct($id_compare, $id_product)
    {
        // Check if compare row exists
        $id_compare = Db::getInstance()->getValue('
            SELECT `id_compare`
            FROM `'._DB_PREFIX_.'compare`
            WHERE `id_compare` = '.(int)$id_compare);

        if (!$id_compare) {
            $id_customer = false;
            if (Context::getContext()->customer) {
                $id_customer = Context::getContext()->customer->id;
            }
            $sql = Db::getInstance()->execute('
            INSERT INTO `'._DB_PREFIX_.'compare` (`id_compare`, `id_customer`) VALUES (NULL, "'.($id_customer ? $id_customer: '0').'")');
            if ($sql) {
                $id_compare = Db::getInstance()->getValue('SELECT MAX(`id_compare`) FROM `'._DB_PREFIX_.'compare`');
                Context::getContext()->cookie->id_compare = $id_compare;
            }
        }

        return Db::getInstance()->execute('
            INSERT IGNORE INTO `'._DB_PREFIX_.'compare_product` (`id_compare`, `id_product`, `date_add`, `date_upd`)
            VALUES ('.(int)($id_compare).', '.(int)($id_product).', NOW(), NOW())');
    }

    /**
     * Remove a compare product for the customer
     * @param int $id_compare
     * @param int $id_product
     * @return bool
     */
    public static function removeCompareProduct($id_compare, $id_product)
    {
        return Db::getInstance()->execute('
        DELETE cp FROM `'._DB_PREFIX_.'compare_product` cp, `'._DB_PREFIX_.'compare` c
        WHERE cp.`id_compare`=c.`id_compare`
        AND cp.`id_product` = '.(int)$id_product.'
        AND c.`id_compare` = '.(int)$id_compare);
    }

    /**
     * Get the number of compare products of the customer
     * @param int $id_compare
     * @return int
     */
    public static function getNumberProducts($id_compare)
    {
        return (int)(Db::getInstance()->getValue('
            SELECT count(`id_compare`)
            FROM `'._DB_PREFIX_.'compare_product`
            WHERE `id_compare` = '.(int)($id_compare)));
    }


    /**
     * Clean entries which are older than the period
     * @param string $period
     * @return void
     */
    public static function cleanCompareProducts()
    {
        Db::getInstance()->execute('
        DELETE cp, c FROM `'._DB_PREFIX_.'compare_product` cp, `'._DB_PREFIX_.'compare` c
        WHERE cp.date_upd < DATE_SUB(NOW(), INTERVAL 1 WEEK) AND c.`id_compare`=cp.`id_compare`');
    }

    /**
     * Get the id_compare by id_customer
     * @param int $id_customer
     * @return int $id_compare
     */
    public static function getIdCompareByIdCustomer($id_customer)
    {
        return (int)Db::getInstance()->getValue('
        SELECT `id_compare`
        FROM `'._DB_PREFIX_.'compare`
        WHERE `id_customer`= '.(int)$id_customer);
    }

    public function getIds($compare_ids) {

        $data = array(
            'num' => 0,
            'ids' => '[]',
        );
        $ids = $this->getCompareProducts($compare_ids);
        if (is_array($ids) && !empty($ids)) {
            $data['num'] = count($ids);
            $data['ids'] = json_encode($ids);
        }
        return $data;
        
    }

    public static function getSimilarProducts($currentID, $startPrice, $id_lang, $start, $limit, $order_by, $order_way, $id_category = false,
        $only_active = false, Context $context = null)
    {
        if (!$context) {
            $context = Context::getContext();
        }

        $front = true;
        if (!in_array($context->controller->controller_type, array('front', 'modulefront'))) {
            $front = false;
        }

        if (!Validate::isOrderBy($order_by) || !Validate::isOrderWay($order_way)) {
            die(Tools::displayError());
        }
        if ($order_by == 'id_product' || $order_by == 'price' || $order_by == 'date_add' || $order_by == 'date_upd') {
            $order_by_prefix = 'p';
        } elseif ($order_by == 'name') {
            $order_by_prefix = 'pl';
        } elseif ($order_by == 'position') {
            $order_by_prefix = 'c';
        }

        if (strpos($order_by, '.') > 0) {
            $order_by = explode('.', $order_by);
            $order_by_prefix = $order_by[0];
            $order_by = $order_by[1];
        }
        $range = !empty(Configuration::get('PK_CMP_RANGE')) ? Configuration::get('PK_CMP_RANGE') : 10;
        $sql = 'SELECT p.*, product_shop.*, pl.* , m.`name` AS manufacturer_name, s.`name` AS supplier_name
                FROM `'._DB_PREFIX_.'product` p
                '.Shop::addSqlAssociation('product', 'p').'
                LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` '.Shop::addSqlRestrictionOnLang('pl').')
                LEFT JOIN `'._DB_PREFIX_.'manufacturer` m ON (m.`id_manufacturer` = p.`id_manufacturer`)
                LEFT JOIN `'._DB_PREFIX_.'supplier` s ON (s.`id_supplier` = p.`id_supplier`)'.
                ($id_category ? 'LEFT JOIN `'._DB_PREFIX_.'category_product` c ON (c.`id_product` = p.`id_product`)' : '').'
                WHERE pl.`id_lang` = '.(int)$id_lang.
                    ($id_category ? ' AND c.`id_category` = '.(int)$id_category : '').
                    ($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '').
                    ($only_active ? ' AND product_shop.`active` = 1' : '').'
                    AND product_shop.`id_product` != '.$currentID.'
                    AND product_shop.`price` > '.($startPrice - $range).'
                    AND product_shop.`price` < '.($startPrice + $range).'
                ORDER BY '.(isset($order_by_prefix) ? pSQL($order_by_prefix).'.' : '').'`'.pSQL($order_by).'` '.pSQL($order_way).
                ($limit > 0 ? ' LIMIT '.(int)$start.','.(int)$limit : '');
        $rq = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        if ($order_by == 'price') {
            Tools::orderbyPrice($rq, $order_way);
        }

        foreach ($rq as &$row) {
            $row = Product::getTaxesInformations($row);
        }

        return ($rq);
    }

    public function getProduct($product_id, $context) {

        $product = array();
        $assembler = new ProductAssembler($context);
        $presenterFactory = new ProductPresenterFactory($context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(new ImageRetriever($context->link), $context->link, new PriceFormatter(), new ProductColorsRetriever(), $context->getTranslator());
        
        $product_obj = new Product($product_id, false, $context->language->id);
        $product = (array)$product_obj;
        $product['id_product'] = $product_id;
        $product['quantity_wanted'] = 1;
        $product = $presenter->present($presentationSettings, $assembler->assembleProduct($product), $context->language);

        return $product;
    }

    public function getFeaturesForComparison($list_ids_product, $id_lang) {

        $ids = '';
        foreach ($list_ids_product as $id) {
            $ids .= (int)$id.',';
        }

        $ids = rtrim($ids, ',');

        if (empty($ids)) {
            return false;
        }

        return Db::getInstance()->executeS('
            SELECT f.*, fl.*
            FROM `'._DB_PREFIX_.'feature` f
            LEFT JOIN `'._DB_PREFIX_.'feature_product` fp
                ON f.`id_feature` = fp.`id_feature`
            LEFT JOIN `'._DB_PREFIX_.'feature_lang` fl
                ON f.`id_feature` = fl.`id_feature`
            WHERE fp.`id_product` IN ('.$ids.')
            AND `id_lang` = '.(int)$id_lang.'
            GROUP BY f.`id_feature`
            ORDER BY f.`position` ASC
        ');
    }

    public function getProductsToCompare($data, $context) {

        $hasProduct = false;
        $details = array();
        $ids = $data['ids'];
        
        if (isset($ids)) {

            if (count($ids) > 0) {
                if (count($ids) > $data['max_to_compare']) {
                    $ids = array_slice($ids, 0, $data['max_to_compare']);
                }

                $listProducts = array();
                $listFeatures = array();

                foreach ($ids as $k => &$id) {
                    $listProducts[] = $this->getProduct($id, $context);
                }

                foreach ($ids as $k => &$id) {

                    $curProduct = new Product((int)$id, true, $context->language->id);
                    if (!Validate::isLoadedObject($curProduct) || !$curProduct->active || !$curProduct->isAssociatedToShop()) {
                        if (isset($context->cookie->id_compare)) {
                            CompareProduct::removeCompareProduct($context->cookie->id_compare, $id);
                        }
                        unset($ids[$k]);
                        continue;
                    }

                    foreach ($curProduct->getFrontFeatures($context->language->id) as $feature) {
                        $listFeatures[$curProduct->id][$feature['id_feature']] = $feature['value'];
                    }

                }
                $num = count($listProducts);
                if ($num > 1) {

                    $ordered_features = $this->getFeaturesForComparison($ids, $context->language->id);
                    $details = array(
                        'hasProduct' => true,
                        'ordered_features' => $ordered_features,
                        'product_features' => $listFeatures,
                        'products' => $listProducts,
                        'ids' => $ids
                    );

                } elseif (isset($context->cookie->id_compare)) {

                    $object = new CompareProduct((int)$context->cookie->id_compare);
                    if (Validate::isLoadedObject($object)) {
                        $object->delete();
                    }
                }
            }
        }
        return $details;
    }
}