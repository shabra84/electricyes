<?php
/**
* Promokit Products Compare Module
*
* @package   Products Compare
* @version   1.1
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_.'pk_compare/classes/CompareProduct.php');

class Pk_Compare extends Module {

    public function __construct() {

        $this->name = 'pk_compare';
        $this->author = 'Promokit Co.';
        $this->version = '1.1';
        $this->need_instance = 0;
        $this->controllers = array('compare');
        $this->max_to_compare = 4;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Compare Products', array(), 'Modules.TextBlock');
        $this->description = $this->trans('Add possibility to compare products', array(), 'Modules.TextBlock');

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);


    }

    public function install() {

        return parent::install() &&
            $this->installDB() &&
            Configuration::updateValue('PK_CMP_MAX', '4') &&
            Configuration::updateValue('PK_CMP_RANGE', '10') &&
            Configuration::updateValue('PK_CMP_POSITION', '0') &&
            Configuration::updateValue('PK_CMP_PROD_PAGE', true) &&
            $this->registerHook('displayHeader') &&
            $this->registerHook('compareProducts') &&
            $this->registerHook('compareButton') &&
            $this->registerHook('displayAutoCompare') &&
            $this->registerHook('displayProductExtraContent') &&
            $this->registerHook('displayAfterBodyOpeningTag');

    }

    public function uninstall() {

        return parent::uninstall() &&
                $this->uninstallDB() &&
                Configuration::deleteByName('PK_CMP_PROD_PAGE') &&
                Configuration::deleteByName('PK_CMP_RANGE') &&
                Configuration::deleteByName('PK_CMP_POSITION') &&
                Configuration::deleteByName('PK_CMP_MAX');

    }

    public function installDB() {

        $response = true;
        $sql = array();

        $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'compare` (
          `id_compare` int(10) unsigned NOT NULL auto_increment,
          `id_customer` int(10) unsigned NOT NULL,
          PRIMARY KEY (`id_compare`)
        ) ENGINE='._MYSQL_ENGINE_.'  DEFAULT CHARSET=utf8;';

        $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'compare_product` (
          `id_compare` int(10) unsigned NOT NULL,
          `id_product` int(10) unsigned NOT NULL,
          `date_add` datetime NOT NULL,
          `date_upd` datetime NOT NULL,
          PRIMARY KEY (`id_compare`,`id_product`)
        ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

        foreach ($sql as $query) {
            $response = Db::getInstance()->execute($query);
        }

        return $response;
    }

    public function uninstallDB()
    {
        return Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'compare`') && Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'compare_product`');
    }

    // Back office
    public function getContent()
    {
        $output = '';
        if (Tools::isSubmit('submit_cmp')) {
            $this->_clearCache('*');
            Configuration::updateValue('PK_CMP_MAX', Tools::getValue('PK_CMP_MAX'));
            Configuration::updateValue('PK_CMP_RANGE', Tools::getValue('PK_CMP_RANGE'));
            Configuration::updateValue('PK_CMP_POSITION', Tools::getValue('PK_CMP_POSITION'));
            Configuration::updateValue('PK_CMP_PROD_PAGE', Tools::getValue('PK_CMP_PROD_PAGE'));
            $output .= $this->displayConfirmation($this->trans('The settings have been updated.', array(), 'Admin.Notifications.Success'));
        }

        return $output.$this->renderForm();
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Settings', array(), 'Admin.Global'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Max products number to compare', array(), 'Modules.instafeed.Admin'),
                        'name' => 'PK_CMP_MAX',
                        'class' => 'fixed-width-xxl',
                        'required' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Price Range', array(), 'Modules.instafeed.Admin'),
                        'name' => 'PK_CMP_RANGE',
                        'desc' => $this->trans('Default Range is 10. If current product price is 23 will be selected products in the range 13-33 for comparison. Sorted by price'),
                        'class' => 'fixed-width-xxl',
                        'required' => true,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->trans('Auto Compared Products', array(), 'Modules.instafeed.Admin'),
                        'name' => 'PK_CMP_PROD_PAGE',
                        'desc' => $this->trans('With this option enabled your customers will see compared products automatically selected by similar price from one category'),
                        'is_bool' => true,
                        'values' => array(
                                    array(
                                        'id' => 'active_on',
                                        'value' => 1,
                                        'label' => $this->trans('Yes', array(), 'Admin.Global')
                                    ),
                                    array(
                                        'id' => 'active_off',
                                        'value' => 0,
                                        'label' => $this->trans('No', array(), 'Admin.Global')
                                    )
                                ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Position'),
                        'name' => 'PK_CMP_POSITION',
                        'id' => 'PK_CMP_POSITION',
                        'options' => array(
                            'id' => 'id',
                            'name' => 'name',
                            'query' => array(
                                array(
                                    'id' => 0,
                                    'name' => 'Product Tabs'
                                ),
                                array(
                                    'id' => 1,
                                    'name' => 'Product Footer'
                                )
                            ),
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->trans('Save', array(), 'Admin.Actions')
                )
            )
        );

        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submit_cmp';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'PK_CMP_MAX' => Tools::getValue('PK_CMP_MAX', Configuration::get('PK_CMP_MAX')),
            'PK_CMP_RANGE' => Tools::getValue('PK_CMP_RANGE', Configuration::get('PK_CMP_RANGE')),
            'PK_CMP_POSITION' => Tools::getValue('PK_CMP_POSITION', Configuration::get('PK_CMP_POSITION')),
            'PK_CMP_PROD_PAGE' => Tools::getValue('PK_CMP_PROD_PAGE', Configuration::get('PK_CMP_PROD_PAGE')),
        );
    }

    // Front Office
    public function hookDisplayHeader() {

        $this->context->controller->registerStylesheet($this->name, 'modules/'.$this->name.'/assets/css/styles.css', ['media' => 'all', 'priority' => 150]);
        $this->context->controller->registerJavascript($this->name, 'modules/'.$this->name.'/assets/js/scripts.js', ['position' => 'bottom', 'priority' => 150]);

    }

    public function hookCompareButton($params) {  

        $compare = new CompareProduct();
        $compared_products = $compare->getCompareProducts($this->context->cookie->id_compare);

        $this->smarty->assign(array(
            'product_id' => $params['product_id'],
            'in_compare' => is_array($compared_products) ? $compared_products : array(),
            'page_link' => Context::getContext()->link->getModuleLink('pk_compare', 'compare')
        ));
        return $this->fetch('module:'.$this->name.'/views/templates/hook/product_button.tpl');

    }

    public function hookCompareProducts($params) {  
    
        $cp = new CompareProduct();
        $data = $cp->getIds($this->context->cookie->id_compare);
        if (!empty(Configuration::get('PK_CMP_MAX'))) {
            $this->max_to_compare = Configuration::get('PK_CMP_MAX');
        }
        $this->smarty->assign(array(
            'total_in_compare' => $data['num'],
            'comparator_max_item' => $this->max_to_compare,
            'page_link' => Context::getContext()->link->getModuleLink('pk_compare', 'compare')
        ));

        return $this->fetch('module:'.$this->name.'/views/templates/hook/compare_products.tpl');

    }

    public function hookDisplayAfterBodyOpeningTag($params) {

        $cp = new CompareProduct();
        $data = $cp->getIds($this->context->cookie->id_compare);
        if (!empty(Configuration::get('PK_CMP_MAX'))) {
            $this->max_to_compare = Configuration::get('PK_CMP_MAX');
        }
        $this->smarty->assign(array(
            'ids' => $data['ids'],
            'total_in_compare' => $data['num'],
            'comparator_max_item' => $this->max_to_compare
        )); 

        return $this->fetch('module:'.$this->name.'/views/templates/hook/after_body.tpl');

    }

    public function hookDisplayAutoCompare($params)
    {
        if (Configuration::get('PK_CMP_POSITION') == 0) 
            return false;

        $cp = new CompareProduct();
        $data = $this->prepareData($params);
        $details = $cp->getProductsToCompare($data, $this->context);
        $this->context->smarty->assign($details);

        return $this->fetch('module:'.$this->name.'/views/templates/hook/compare_producttab.tpl');
    }

    public function hookDisplayProductExtraContent($params)
    {
        if (Configuration::get('PK_CMP_POSITION') == 1) 
            return array();

        $pid = (int)Tools::getvalue('id_product');
        $cp = new CompareProduct();
        $product = new Product($pid);

        $params['currentProduct']['id_product'] = $pid;
        $params['currentProduct']['id_category_default'] = $product->id_category_default;
        $params['currentProduct']['price_tax_exc'] = $product->price;
        $data = $this->prepareData($params);
        $details = $cp->getProductsToCompare($data, $this->context);

        if (!$details) return array();

        $this->context->smarty->assign($details);
        $title = $this->l('Quick Compare');
        $content = $this->context->smarty->fetch('module:'.$this->name.'/views/templates/hook/compare_producttab.tpl');

        $tabs[] = (new PrestaShop\PrestaShop\Core\Product\ProductExtraContent())->setTitle($title)->setContent($content);

        return $tabs;

    }

    public function prepareData($params)
    {
        if (!Configuration::get('PK_CMP_PROD_PAGE'))
            return false;
        
        if (!isset($params['currentProduct']['id_product']))
            return false;

        $cp = new CompareProduct();
        $ids = array(0 => $params['currentProduct']['id_product']);
        $limit = !empty(Configuration::get('PK_CMP_MAX')) ? Configuration::get('PK_CMP_MAX') : $this->max_to_compare;
        $orderWay = Tools::getProductsOrder('way', Tools::getValue('orderway'));
        $category = $params['currentProduct']['id_category_default'];

        $similarProds = $cp->getSimilarProducts($ids[0], $params['currentProduct']['price_tax_exc'], $this->context->language->id, 0, $limit, 'price', $orderWay, $category, true);

        foreach ($similarProds as $key => $product) {
            $ids[] = $product['id_product'];
        }

        $data = array(
            'ids' => $ids,
            'max_to_compare' => $limit,
        );

        return $data;
    }
    
}