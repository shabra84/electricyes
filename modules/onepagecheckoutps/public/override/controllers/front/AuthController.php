<?php
/**
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * We are experts and professionals in PrestaShop
 *
 * @author    PresTeamShop.com <support@presteamshop.com>
 * @copyright 2011-2018 PresTeamShop
 * @license   see file: LICENSE.txt
 * @category  PrestaShop
 * @category  Module
 */

class AuthController extends AuthControllerCore
{
    public $onepagecheckoutps;

    public function init()
    {
        parent::init();

        if (Module::isInstalled('onepagecheckoutps')) {
            $onepagecheckoutps = Module::getInstanceByName('onepagecheckoutps');
            if (Validate::isLoadedObject($onepagecheckoutps) && $onepagecheckoutps->active) {
                if ($onepagecheckoutps->core->isVisible() && Tools::getIsset('create_account')) {
                    $this->onepagecheckoutps = $onepagecheckoutps;
                }
            }
        }
    }

    public function initContent()
    {
        parent::initContent();

        if (Validate::isLoadedObject($this->onepagecheckoutps)) {
            $is_need_invoice     = false;
            $opc_fields_position = $this->onepagecheckoutps->getFieldsFront($is_need_invoice);

            $this->context->smarty->assign(array(
                'OPC_GLOBALS'     => $this->onepagecheckoutps->globals,
                'OPC_FIELDS'      => $opc_fields_position,
                'is_need_invoice' => $is_need_invoice
            ));
            Media::addJsDef(array('is_need_invoice' => $is_need_invoice));

            $templateVars = $this->onepagecheckoutps->getTemplateVarsOPC(true, true);

            $this->context->smarty->assign($templateVars);
            Media::addJsDef($templateVars);

            $this->setTemplate('../../../modules/'.$this->onepagecheckoutps->name.'/views/templates/front/onepagecheckoutps');
        }
    }

    public function setMedia()
    {
        parent::setMedia();

        if (Validate::isLoadedObject($this->onepagecheckoutps)) {
            $this->onepagecheckoutps->getMediaFront();
        }
    }
}
