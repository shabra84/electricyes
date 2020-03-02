<?php
/**
* 2002-2017 TemplateMonster
*
* TM Product Custom Tab
*
* NOTICE OF LICENSE
*
* This source file is subject to the General Public License (GPL 2.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/GPL-2.0
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade the module to newer
* versions in the future.
*
*  @author    TemplateMonster
*  @copyright 2002-2017 TemplateMonster
*  @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*/

class AdminTMProductCustomTabController extends ModuleAdminController
{
    /**
     * Update position tab
     * @return array
     */
    public function ajaxProcessUpdatePositionTab()
    {
        $items = Tools::getValue('item');
        $total = count($items);
        $success = true;

        for ($i = 1; $i <= $total; $i++) {
            $success &= Db::getInstance()->update(
                'product_custom_tab',
                array('sort_order' => (int)$i),
                '`id_tab` = '.(int)preg_replace('/(tab_)([0-9]+)/', '${2}', $items[$i - 1]).''
            );
        }

        if (!$success) {
            die(json_encode(array('error' => 'Position Update Fail')));
        }

        die(json_encode(array('success' => 'Position Updated Success !', 'error' => false)));
    }

    /**
     * Add item tab
     * @return array
     */
    public function ajaxProcessAddItemTab()
    {
        $tab = new ProductCustomTabs();

        $tab->id_shop = $this->context->shop->id;
        $tab->status = 1;
        $tab->custom_assing = 0;
        $tab->sort_order = $tab->getMaxSortOrder((int)$this->context->shop->id);
        $tab->selected_products = '["'.(int)Tools::getValue('id_product').'"]';
        $tab->selected_category = '["2"]';

        $tab_name = Tools::getValue('tab_name');
        $tab_description = Tools::getValue('tab_description');
        $id_lang = Tools::getValue('id_lang');

        $combine_name = array_combine($id_lang, $tab_name);
        foreach ($combine_name as $key => $res) {
            $tab->name[$key] = $res;
        }

        $combine_description = array_combine($id_lang, $tab_description);
        foreach ($combine_description as $key => $res) {
            $tab->description[$key] = $res;
        }

        if (!$tab->add()) {
            die(json_encode(array('error_status' => 'Information Add Fail')));
        }

        die(json_encode(array('success_status' => 'Information Add Success!', 'error' => false)));
    }

    /**
     * Update item tab
     * @return array
     */
    public function ajaxProcessUpdateItemTab()
    {
        $tab = new ProductCustomTabs(Tools::getValue('id_tab'));
        $tab->id_shop = $this->context->shop->id;
        $tab->name[Tools::getValue('id_lang')] = pSql(Tools::getValue('tab_name'));
        $tab->description[Tools::getValue('id_lang')] = Tools::getValue('tab_description');

        if (!$tab->update()) {
            die(json_encode(array('error_status' => 'Information Update Fail')));
        }

        die(json_encode(array('success_status' => 'Information Update Success!', 'error' => false)));
    }

    /**
     * Remove item tab
     * @return array
     */
    public function ajaxProcessRemoveItemTab()
    {
        $tab = new ProductCustomTabs(Tools::getValue('id_tab'));
        $res = $tab->delete();

        if (!$res) {
            die(json_encode(array('error_status' => 'Removing Fail')));
        }

        die(json_encode(array('success_status' => 'Tab removed success!', 'error' => false)));
    }

    /**
     * Get products form
     * @return array $content
     */
    public function ajaxProcessGetProductsForm()
    {
        $tmproductcustomtab = new Tmproductcustomtab();
        $products = $tmproductcustomtab->getProducts(json_decode(Tools::getValue('id_category')));

        if (!$selected_products = json_decode(Tools::getValue('selected_products'))) {
            $content = $tmproductcustomtab->renderProductList($products);
            die(json_encode(array('status' => 'true', 'content' => $content)));
        }

        foreach ($products as $key => $product) {
            if (is_numeric(array_search($product['id_product'], $selected_products))) {
                unset($products[$key]);
            }
        }

        if (count($products)) {
            $content = $tmproductcustomtab->renderProductList($products);
        } else {
            $content = $tmproductcustomtab->displayWarning($this->l('No products to select'));
        }

        die(json_encode(array('status' => 'true', 'content' => $content)));
    }

    /**
     * Update position form
     * @return array
     */
    public function ajaxProcessUpdatePositionForm()
    {
        $items = Tools::getValue('item');
        $total = count($items);
        $id_shop = (int)$this->context->shop->id;
        $success = true;

        for ($i = 1; $i <= $total; $i++) {
            $success &= Db::getInstance()->update(
                'product_custom_tab',
                array('sort_order' => $i),
                '`id_tab` = '.preg_replace('/(item_)([0-9]+)/', '${2}', $items[$i - 1]).'
                AND `id_shop` ='.$id_shop
            );
        }
        if (!$success) {
            die(json_encode(array('error' => 'Update Fail')));
        }
        die(json_encode(array('success' => 'Update Success !', 'error' => false)));
    }
}
