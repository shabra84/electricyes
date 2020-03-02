<?php
/**
* Promokit Compare Module
*
* @package   alysum
* @version   1.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*/

class Pk_CompareCompareModuleFrontController extends ModuleFrontController
{
    /**
     * Display ajax content (this function is called instead of classic display, in ajax mode)
     */
    public function displayAjax()
    {
        // Add or remove product with Ajax
        if (Tools::getValue('ajax') && Tools::getValue('id_product') && Tools::getValue('action')) {
            if (Tools::getValue('action') == 'add') {
                $id_compare = isset($this->context->cookie->id_compare) ? $this->context->cookie->id_compare: false;
                if (CompareProduct::getNumberProducts($id_compare) < Configuration::get('PK_CMP_MAX')) {
                    CompareProduct::addCompareProduct($id_compare, (int)Tools::getValue('id_product'));
                } else {
                    $this->ajaxDie('0');
                }
            } elseif (Tools::getValue('action') == 'remove') {
                if (isset($this->context->cookie->id_compare)) {
                    CompareProduct::removeCompareProduct((int)$this->context->cookie->id_compare, (int)Tools::getValue('id_product'));
                } else {
                    $this->ajaxDie('0');
                }
            } else {
                $this->ajaxDie('0');
            }
            $this->ajaxDie('1');
        }
        $this->ajaxDie('0');
    }

    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        if (Tools::getValue('ajax')) {
            return;
        }

        parent::initContent();

        CompareProduct::cleanCompareProducts();
        $cp = new CompareProduct();

        $hasProduct = false;

        if (!Configuration::get('PK_CMP_MAX')) {
            return Tools::redirect('index.php?controller=404');
        }

        $ids = null;
        if (($product_list = urldecode(Tools::getValue('compare_product_list'))) && ($postProducts = (isset($product_list) ? rtrim($product_list, '|') : ''))) {
            $ids = array_unique(explode('|', $postProducts));
        } elseif (isset($this->context->cookie->id_compare)) {
            $ids = CompareProduct::getCompareProducts($this->context->cookie->id_compare);
            if (count($ids)) {
                $link = $this->context->link->getModuleLink('pk_compare', 'compare', array('compare_product_list' => $ids));
                //Tools::redirect($link);
            }
        }
        
        //Clean compare product table

        $data = array(
            'ids' => $ids,
            'max_to_compare' => Configuration::get('PK_CMP_MAX'),
        );
        $details = $cp->getProductsToCompare($data, $this->context);
        $this->context->smarty->assign($details);

        $this->setTemplate('module:pk_compare/views/templates/front/compare.tpl');
        
    }

}