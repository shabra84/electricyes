<?php
/**
* Promokit Favorites Module
*
* @package   alysum
* @version   1.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*/

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Adapter\PricesDrop\PricesDropProductSearchProvider;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;

class FavoriteProduct extends ObjectModel
{
	public $id;

	public $id_product;

	public $id_customer;

	public $id_shop;

	public $date_add;

	public $date_upd;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'favorite_product',
		'primary' => 'id_favorite_product',
		'fields' => array(
			'id_product' =>		array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'id_customer' =>	array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'id_shop' =>		array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'date_add' =>		array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
			'date_upd' =>		array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
		),
	);

	public static function getFavoriteProducts($id_customer, $id_lang)
	{
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT DISTINCT p.`id_product`, fp.`id_shop`, pl.`description_short`, pl.`link_rewrite`,
				pl.`name`, i.`id_image`, CONCAT(p.`id_product`, \'-\', i.`id_image`) as image
			FROM `'._DB_PREFIX_.'favorite_product` fp
			LEFT JOIN `'._DB_PREFIX_.'product` p ON (p.`id_product` = fp.`id_product`)
			'.Shop::addSqlAssociation('product', 'p').'
			LEFT JOIN `'._DB_PREFIX_.'product_lang` pl
				ON p.`id_product` = pl.`id_product`
				AND pl.`id_lang` = '.(int)$id_lang
				.Shop::addSqlRestrictionOnLang('pl').'
			LEFT OUTER JOIN `'._DB_PREFIX_.'product_attribute` pa ON (p.`id_product` = pa.`id_product`)
			'.Shop::addSqlAssociation('product_attribute', 'pa', false).'
			LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
			LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = '.(int)$id_lang.')
			WHERE product_shop.`active` = 1
			'.($id_customer ? ' AND fp.id_customer = '.(int)$id_customer : '').'
			'.Shop::addSqlRestriction(false, 'fp')
		);
	}

	public function getFavoriteProductsIDs($id_customer)
	{
		$listArr = array();
		$shop = Context::getContext()->shop;
		$list =  Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT id_product FROM '._DB_PREFIX_.'favorite_product WHERE `id_customer` ='.$id_customer.' AND `id_shop` = '.$shop->id);
		foreach ($list as $prd) {
    	$listArr[] = $prd['id_product'];
    }
    return $listArr;
	}

	public function getFavoriteProduct($id_customer, $id_product, Shop $shop = null)
	{
		if (!$shop)
			$shop = Context::getContext()->shop;

		$id_favorite_product = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('
			SELECT `id_favorite_product`
			FROM `'._DB_PREFIX_.'favorite_product`
			WHERE `id_customer` = '.(int)$id_customer.'
			AND `id_product` = '.(int)$id_product.'
			AND `id_shop` = '.(int)$shop->id
		);

		if ($id_favorite_product)
			return new FavoriteProduct($id_favorite_product);
		return null;
	}

	public static function isCustomerFavoriteProduct($id_customer, $id_product, Shop $shop = null)
	{
		if (!$id_customer)
			return false;

		if (!$shop)
			$shop = Context::getContext()->shop;

		return (bool)Db::getInstance()->getValue('
			SELECT COUNT(*)
			FROM `'._DB_PREFIX_.'favorite_product`
			WHERE `id_customer` = '.(int)$id_customer.'
			AND `id_product` = '.(int)$id_product.'
			AND `id_shop` = '.(int)$shop->id);
	}

	public function getFavProducts($id_customer)
  {
      $list = FavoriteProduct::getFavoriteProductsIDs($id_customer);
      $p = array();
      $cntxt = Context::getContext();
      
      
      foreach ($list as $id) {

          $product = new Product((int)$id, true, $cntxt->language->id, $cntxt->shop->id);

          if (Validate::isLoadedObject($product) && isset($product->name[$cntxt->language->id])) {                   

              $product = array((array)$product);
              $product[0]['id_product'] = $product[0]['id'];
              $p[$id] = FavoriteProduct::prepareBlocksProducts( $product );

          }
      }

      return $p;
  }

  public function prepareBlocksProducts($block) {
      
      $blocks_for_template = [];
      $products_for_template = [];
      $cntxt = Context::getContext();

      $assembler = new ProductAssembler($cntxt);
      $presenterFactory = new ProductPresenterFactory($cntxt);
      $presentationSettings = $presenterFactory->getPresentationSettings();
      $presenter = new ProductListingPresenter(new ImageRetriever($cntxt->link), $cntxt->link, new PriceFormatter(), new ProductColorsRetriever(), $cntxt->getTranslator());
      $products_for_template = [];
      if ($block){
          foreach ($block as $key => $rawProduct) {
              
              $products_for_template[$key] = $presenter->present($presentationSettings, $assembler->assembleProduct($rawProduct), $cntxt->language);
              $products_for_template[$key]['quantity_wanted'] = 1;
              if ($products_for_template[$key]['manufacturer_name'] == '') {
                  $products_for_template[$key]['manufacturer_name'] = Manufacturer::getNameById($rawProduct['id_manufacturer']);
              }
          }
      }

      return $products_for_template[0];
  }
}
