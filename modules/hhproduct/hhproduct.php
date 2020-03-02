<?php

/**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
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
 *  @author    Hennes Hervé <contact@h-hennes.fr>
 *  @copyright 2013-2016 Hennes Hervé
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  http://www.h-hennes.fr/blog/
 */

class HhProduct extends Module {
    
     public function __construct() {

        $this->name = 'hhproduct';
        $this->tab = 'others';
        $this->author = 'hhennes';
        $this->version = '0.1.0';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('hhproduct');
        $this->description = $this->l('add new fields to product');
        $this->ps_versions_compliancy = array('min' => '1.7.1', 'max' => _PS_VERSION_);
    }
    
   public function install() {
        if (!parent::install() || !$this->_installSql()
                //Pour les hooks suivants regarder le fichier src\PrestaShopBundle\Resources\views\Admin\Product\form.html.twig
                || ! $this->registerHook('displayAdminProductsExtra')
                || ! $this->registerHook('displayAdminProductsMainStepLeftColumnMiddle')
        ) {
            return false;
        }

        return true;
    }
    
     public function uninstall() {
        return parent::uninstall() && $this->_unInstallSql();
    }

    /**
     * Modifications sql du module
     * @return boolean
     */
    /*
    protected function _installSql() {
        $sqlInstall = "ALTER TABLE " . _DB_PREFIX_ . "product "
                . "ADD custom_field VARCHAR(255) NULL";
        $sqlInstallLang = "ALTER TABLE " . _DB_PREFIX_ . "product_lang "
                . "ADD custom_field_lang VARCHAR(255) NULL,"
                . "ADD custom_field_lang_wysiwyg TEXT NULL";

        $returnSql = Db::getInstance()->execute($sqlInstall);
        $returnSqlLang = Db::getInstance()->execute($sqlInstallLang);
        
        return $returnSql && $returnSqlLang;
    }
    */

    protected function _installSql() {
        $sqlInstall = "ALTER TABLE " . _DB_PREFIX_ . "product "
                . "ADD custom_field VARCHAR(255) NULL, "
                . "ADD custom_field2 VARCHAR(255) NULL, "
                . "ADD coordenada_1 INT NULL, "
                . "ADD coordenada_2 INT NULL, "
                . "ADD coordenada_3 INT NULL, "
                . "ADD coordenada_4 INT NULL, "
                . "ADD atributo_1 INT NULL, "
                . "ADD atributo_2 INT NULL, "
                . "ADD atributo_3 INT NULL, "
                . "ADD atributo_4 INT NULL, "
                . "ADD atributo_5 INT NULL, "
                . "ADD atributo_6 INT NULL, "
                . "ADD atributo_7 INT NULL, "
                . "ADD atributo_8 INT NULL, "
                . "ADD atributo_9 INT NULL, "
                . "ADD atributo_10 INT NULL ";
        $sqlInstallLang = "ALTER TABLE " . _DB_PREFIX_ . "product_lang "
                . "ADD custom_field_lang VARCHAR(255) NULL,"
                . "ADD custom_field_lang_wysiwyg TEXT NULL";

        $returnSql = Db::getInstance()->execute($sqlInstall);
        $returnSqlLang = Db::getInstance()->execute($sqlInstallLang);
        
        return $returnSql && $returnSqlLang;
    }


    /**
     * Suppression des modification sql du module
     * @return boolean
     */
    protected function _unInstallSql() {
       $sqlInstall = "ALTER TABLE " . _DB_PREFIX_ . "product "
                . "DROP custom_field";
        $sqlInstallLang = "ALTER TABLE " . _DB_PREFIX_ . "product_lang "
                . "DROP custom_field_lang,DROP custom_field_lang_wysiwyg";

        $returnSql = Db::getInstance()->execute($sqlInstall);
        $returnSqlLang = Db::getInstance()->execute($sqlInstallLang);
        
        return $returnSql && $returnSqlLang;
    }
    
    
    public function hookDisplayAdminProductsExtra($params)
    {
       return $this->_displayHookContentBlock(__FUNCTION__);
    }
    
    /**
     * Affichage des informations supplémentaires sur la fiche produit
     * @param type $params
     * @return type
     */
    public function hookDisplayAdminProductsMainStepLeftColumnMiddle($params) {
        $product = new Product($params['id_product']);
        //print_r($product);
        $languages = Language::getLanguages($active);
        $this->context->smarty->assign(array(
            'custom_field' => $product->custom_field,
            'atributo_1' => $this->getAllAttribute($product->atributo_1, 1),
            'atributo_2' => $this->getAllAttribute($product->atributo_2, 2),
            'atributo_3' => $this->getAllAttribute($product->atributo_3, 3),
            'atributo_4' => $this->getAllAttribute($product->atributo_4, 4),
            'atributo_5' => $this->getAllAttribute($product->atributo_5, 5),
            'atributo_6' => $this->getAllAttribute($product->atributo_6, 6),
            'atributo_7' => $this->getAllAttribute($product->atributo_7, 7),
            'atributo_8' => $this->getAllAttribute($product->atributo_8, 8),
            'atributo_9' => $this->getAllAttribute($product->atributo_9, 9),
            'atributo_10' => $this->getAllAttribute($product->atributo_10, 10),
            'coordenada_1' => $this->getAllAttribute2($product->coordenada_1, 1),
            'coordenada_2' => $this->getAllAttribute2($product->coordenada_2, 2),
            'coordenada_3' => $this->getAllAttribute2($product->coordenada_3, 3),
            'coordenada_4' => $this->getAllAttribute2($product->coordenada_4, 4),
            'languages' => $languages,
            'custom_field_lang' => $product->custom_field_lang,
            'custom_field_lang_wysiwyg' => $product->custom_field_lang_wysiwyg,
            'default_language' => $this->context->employee->id_lang,
            )
           );
        //genero los dropdowns
        //SELECT * FROM `ps_attribute_group_lang` WHERE id_lang=1
        return $this->display(__FILE__, 'views/templates/hook/extrafields.tpl');
    }

    
    /**
     * Fonction pour afficher les différents blocks disponibles
     * @param type $hookName
     * @return type
     */
    protected function  _displayHookContentBlock($hookName) {
        $this->context->smarty->assign('hookName',$hookName);
        return $this->display(__FILE__, 'views/templates/hook/hookBlock.tpl');
    }


    function getAllAttribute($id, $num)
    {
            $ret="<select name='atributo_".$num."' id='atributo_".$num."' class='form-control'> ";
            $u= Db::getInstance()->executeS("
            SELECT * FROM `ps_attribute_group_lang` WHERE id_lang=1");

            if($id=="")
                $selected1="selected";
            $ret.='<option '.$selected1.' value=\'0\'>Seleccione</option>';
            foreach ($u as $key => $value) {
            
                $selected = "";
                if($id==$value['id_attribute_group'])
                    $selected="selected";
                $ret.='<option '.$selected.' value=\''.$value['id_attribute_group'].'\'>'.$value['public_name'].'</option>';
            }
            $ret.='</select>';
            return $ret;
            
    }

    function getAllAttribute2($val, $num)
    {
            $ret="<input name='coordenada_".$num."' id='coordenada_".$num."' class='form-control' value='".$val."'> ";
            return $ret;
            
    }


}
