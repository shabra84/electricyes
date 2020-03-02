<?php
/**
 * 2002-2016 TemplateMonster
 *
 * TemplateMonster Social Login
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
 *  @author    TemplateMonster (Alexander Grosul)
 *  @copyright 2002-2016 TemplateMonster
 *  @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class TmHeaderAccountAuthModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        if (Tools::isSubmit('submitCreate')) {
            $this->processCreateAccount();
        }

        if (Tools::isSubmit('submitLogin')) {
            $this->processLogin();
        }
    }

    protected function processCreateAccount()
    {
        $register_form = $this
            ->makeCustomerForm()
            ->setGuestAllowed(false)
            ->fillWith(Tools::getAllValues());

        if ($register_form->submit()) {
            die(json_encode([
                'hasError' => false,
            ]));
        }

        die(json_encode([
            'hasError' => true,
            'errors' => $register_form->getErrors()
        ]));
    }

    protected function processLogin()
    {
        $login_form = $this
            ->makeLoginForm()
            ->fillWith(Tools::getAllValues());

        if ($login_form->submit()) {
            die(json_encode([
                'hasError' => false,
            ]));
        }

        die(json_encode([
            'hasError' => true,
            'errors' => $login_form->getErrors()
        ]));
    }
}
