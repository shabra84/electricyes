<?php
/**
 * 2002-2016 TemplateMonster
 *
 * TM Manufacturers block
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
 * @author    TemplateMonster (Alexander Grosul)
 * @copyright 2002-2016 TemplateMonster
 * @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
 */
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}
include_once(__DIR__.'/src/TMManufacturersSettingsRepository.php');
include_once(__DIR__.'/src/TMManufacturersPresenter.php');

class TmManufacturerBlock extends Module implements WidgetInterface
{
    public  $linkBlockRepository;
    private $defaultHook;
    private $hooks = array();

    public function __construct()
    {
        $this->name = 'tmmanufacturerblock';
        $this->tab = 'front_office_features';
        $this->version = '1.2.0';
        $this->author = 'TemplateMonster (Alexander Grosul)';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->module_key = 'b7619a4d09cd462e029111f20477d6d5';
        parent::__construct();
        $this->displayName = $this->l('TM Manufacturers Block');
        $this->description = $this->l('Displays a block listing product manufacturers and/or brands.');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->defaultHook = 'displayNavFullWidth';
        $this->currentHook = $this->defaultHook;
        $this->manufacturerSettingsRepository = new TMManufacturersSettingsRepository(
            Db::getInstance(),
            $this->context->shop
        );
        $this->manufacturerPresenter = new TMManufacturersPresenter(
            Db::getInstance(),
            $this->context->shop,
            $this->defaultHook,
            $this->name
        );
        $h = $this->manufacturerPresenter->getAllModuleHooks($this->name, $this->currentHook);
        if (is_array($h)) {
            $this->hooks = $h;
        } elseif ($h) {
            $this->currentHook = $h;
        }
    }

    public function install()
    {
        return parent::install()
        && $this->manufacturerSettingsRepository->createTables()
        && $this->manufacturerSettingsRepository->setDefaultSettings($this->defaultHook)
        && $this->registerHook('header')
        && $this->registerHook('displayBackOfficeHeader')
        && $this->registerHook('actionObjectManufacturerDeleteAfter')
        && $this->registerHook('actionObjectManufacturerAddAfter')
        && $this->registerHook('actionObjectManufacturerUpdateAfter')
        && $this->registerHook('displayBeforeBodyClosingTag')
        && $this->registerHook('displayNavFullWidth');
    }

    public function uninstall()
    {
        if (!$this->manufacturerSettingsRepository->dropTables()
            || !parent::uninstall()
        ) {
            return false;
        }

        return true;
    }

    public function getContent(array $hooks = [])
    {
        if ($loadedHook = Tools::getValue('hookName')) {
            $this->currentHook = $loadedHook;
        }
        $output = '';
        if ($message = $this->getWarningMultishopHtml()) {
            return $message;
        }
        if (Tools::isSubmit('submitBlockManufacturers')) {
            $display_name = (int)Tools::getValue('TM_MANUFACTURER_DISPLAY_NAME');
            $display_image = (int)Tools::getValue('TM_MANUFACTURER_DISPLAY_IMAGE');
            $nb_display = (int)Tools::getValue('TM_MANUFACTURER_DISPLAY_ITEM_NB');
            $display_caroucel = (int)Tools::getValue('TM_MANUFACTURER_DISPLAY_CAROUCEL');
            $caroucel_nb = (int)Tools::getValue('TM_MANUFACTURER_CAROUCEL_NB');
            $slide_width = (int)Tools::getValue('TM_MANUFACTURER_CAROUCEL_SLIDE_WIDTH');
            $caroucel_item_scroll = (int)Tools::getValue('TM_MANUFACTURER_CAROUCEL_ITEM_SCROLL');
            $errors = array();
            if ($nb_display < 1) {
                $errors[] = $this->l('There is an invalid number of elements.');
            } elseif ($display_caroucel && ($caroucel_item_scroll > $caroucel_nb)) {
                $errors[] = $this->l('Quantity items to scroll cann\'t be greater than visible items.');
            } elseif ($display_caroucel && ($slide_width < 1)) {
                $errors[] = $this->l('Slide width cann\'t be less than 1px.');
            } elseif (!$display_name && !$display_image) {
                $errors[] = $this->l('Please choose something to display.');
            } else {
                foreach (array_keys($this->manufacturerSettingsRepository->settingsList) as $name) {
                    if (!$this->manufacturerSettingsRepository->updateSetting(
                        $this->currentHook, $name, Tools::getValue($name)
                    )
                    ) {
                        $errors[] = $this->l('Can\'t update settings!');
                    }
                }
                $this->clearModuleCache();
            }
            if (isset($errors) && count($errors)) {
                $output .= $this->displayError(implode('<br />', $errors));
            } else {
                $output .= $this->displayConfirmation($this->l('Settings updated.'));
            }
        }

        return $output.$this->renderForm();
    }

    /**
     * Display Warning.
     * return alert with warning multishop
     */
    private function getWarningMultishopHtml()
    {
        if (Shop::getContext() == Shop::CONTEXT_GROUP || Shop::getContext() == Shop::CONTEXT_ALL) {
            return '<p class="alert alert-warning">' .
            $this->l('You cannot manage this module settings from "All Shops" or "Group Shop" context,
                 select the store you want to edit') .
            '</p>';
        } else {
            return '';
        }
    }

    public function renderForm(array $fields_form = [], array $options = [], array $hooks = [])
    {
        $image_types = $this->manufacturerPresenter->getImageTypes();
        foreach ($image_types as $image_type) {
            $options[] = array('id' => $image_type, 'name' => $image_type);
        }
        if ($availableHooks = $this->manufacturerPresenter->getAllModuleHooks($this->name, $this->currentHook)) {
            foreach ($availableHooks as $hook) {
                $hooks[] = ['id' => $hook['name'], 'name' => $hook['name']];
            }
        }
        $fields_form['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings'),
                'icon'  => 'icon-cogs'
            ),
            'input'  => array(
                array(
                    'form_group_class' => !$hooks ? 'hidden' : '',
                    'type'             => 'select',
                    'label'            => $this->l('Select the hook'),
                    'name'             => 'hookName',
                    'options'          => array(
                        'query' => $hooks,
                        'id'    => 'id',
                        'name'  => 'name'
                    )
                ),
                array(
                    'type'    => 'select',
                    'label'   => $this->l('Order by'),
                    'name'    => 'TM_MANUFACTURER_ORDER',
                    'options' => array(
                        'query' => array(
                            array('id' => 0, 'name' => $this->l('manufacturer name')),
                            array('id' => 1, 'name' => $this->l('manufacturer id'))
                        ),
                        'id'    => 'id',
                        'name'  => 'name'
                    )
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Display name'),
                    'name'   => 'TM_MANUFACTURER_DISPLAY_NAME',
                    'desc'   => $this->l('Display manufacturers name.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Display image'),
                    'name'   => 'TM_MANUFACTURER_DISPLAY_IMAGE',
                    'desc'   => $this->l('Display manufacturers image.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Number of elements to display'),
                    'name'  => 'TM_MANUFACTURER_DISPLAY_ITEM_NB',
                    'class' => 'fixed-width-xs'
                ),
                array(
                    'type'    => 'select',
                    'label'   => $this->l('Image Type'),
                    'name'    => 'TM_MANUFACTURER_DISPLAY_IMAGE_TYPE',
                    'desc'    => $this->l('Select image type.'),
                    'options' => array(
                        'query' => $options,
                        'id'    => 'id',
                        'name'  => 'name'
                    )
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Use caroucel'),
                    'name'   => 'TM_MANUFACTURER_DISPLAY_CAROUCEL',
                    'desc'   => $this->l('Display manufacturers in the caroucel.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Visible items'),
                    'name'  => 'TM_MANUFACTURER_CAROUCEL_NB',
                    'class' => 'fixed-width-xs'
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Items scroll'),
                    'name'  => 'TM_MANUFACTURER_CAROUCEL_ITEM_SCROLL',
                    'class' => 'fixed-width-xs'
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Slide Width'),
                    'name'  => 'TM_MANUFACTURER_CAROUCEL_SLIDE_WIDTH',
                    'class' => 'fixed-width-xs'
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Slide Margin'),
                    'name'  => 'TM_MANUFACTURER_CAROUCEL_SLIDE_MARGIN',
                    'class' => 'fixed-width-xs'
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Auto scroll'),
                    'name'   => 'TM_MANUFACTURER_CAROUCEL_AUTO',
                    'desc'   => $this->l('Use auto scroll in caroucel.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Caroucel speed'),
                    'name'  => 'TM_MANUFACTURER_CAROUCEL_SPEED',
                    'class' => 'fixed-width-xs',
                    'desc'  => 'Slide transition duration (in ms)'
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Pause'),
                    'name'  => 'TM_MANUFACTURER_CAROUCEL_AUTO_PAUSE',
                    'class' => 'fixed-width-xs',
                    'desc'  => 'The amount of time (in ms) between each auto transition'
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Random'),
                    'name'   => 'TM_MANUFACTURER_CAROUCEL_RANDOM',
                    'desc'   => $this->l('Start caroucel on a random item.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Caroucel loop'),
                    'name'   => 'TM_MANUFACTURER_CAROUCEL_LOOP',
                    'desc'   => $this->l(
                        'Show next while the last slide will transition to the first slide and vice-versa.'
                    ),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Hide controll on end'),
                    'name'   => 'TM_MANUFACTURER_CAROUCEL_HIDE_CONTROL',
                    'desc'   => $this->l('Control will be hidden on last slide and vice-versa.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Pager'),
                    'name'   => 'TM_MANUFACTURER_CAROUCEL_PAGER',
                    'desc'   => $this->l('Pager settings.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Control'),
                    'name'   => 'TM_MANUFACTURER_CAROUCEL_CONTROL',
                    'desc'   => $this->l('Prev/Next buttons.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Auto controll'),
                    'name'   => 'TM_MANUFACTURER_CAROUCEL_AUTO_CONTROL',
                    'desc'   => $this->l('Play/Stop buttons.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'   => 'switch',
                    'label'  => $this->l('Auto hover'),
                    'name'   => 'TM_MANUFACTURER_CAROUCEL_AUTO_HOVER',
                    'desc'   => $this->l('Auto show will pause when mouse hovers over slider.'),
                    'values' => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
            )
        );
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get(
            'PS_BO_ALLOW_EMPLOYEE_FORM_LANG'
        ) : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitBlockManufacturers';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).
            '&configure='.$this->name.
            '&tab_module='.$this->tab.
            '&module_name='.$this->name.($hooks ? '&hookName='.$this->currentHook : '');
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues($result = [])
    {
        $result['hookName'] = $this->currentHook;
        if (!$this->manufacturerSettingsRepository->getSettings($this->currentHook)) {
            $this->manufacturerSettingsRepository->setDefaultSettings($this->currentHook);
        }
        foreach ($this->manufacturerSettingsRepository->getSettings($this->currentHook) as $name => $value) {
            $result[$name] = Tools::getValue(
                $name, $value ? $value : $this->manufacturerSettingsRepository->settingsList[$name]
            );
        }

        return $result;
    }

    protected function changeArrayKeys($array)
    {
        $sorted = array();
        foreach ($array as $a) {
            $sorted[$a['id_manufacturer']] = $a;
        }
        sort($sorted);
        while (list($key, $val) = each($sorted)) {
            $sorted[$key] = $val;
        }

        return $sorted;
    }

    public function hookActionObjectManufacturerUpdateAfter()
    {
        $this->clearModuleCache();
    }

    public function hookActionObjectManufacturerAddAfter()
    {
        $this->clearModuleCache();
    }

    public function hookActionObjectManufacturerDeleteAfter()
    {
        $this->clearModuleCache();
    }

    private function clearModuleCache()
    {
        $hooks = $this->manufacturerPresenter->getAllModuleHooks($this->name, $this->currentHook);
        if ($hooks) {
            if (is_array($hooks)) {
                foreach ($hooks as $hook) {
                    parent::_clearCache('tmmanufacturerblock.tpl', $this->name.'_'.Tools::strtolower($hook['name']));
                    parent::_clearCache(
                        'tmmanufacturerblock_'.Tools::strtolower($hook['name']).'.tpl',
                        $this->name.'_'.Tools::strtolower($hook['name'])
                    );
                }
            } else {
                parent::_clearCache('tmmanufacturerblock.tpl', $this->name.'_'.Tools::strtolower($this->currentHook));
                parent::_clearCache(
                    'tmmanufacturerblock_'.Tools::strtolower($this->currentHook).'.tpl',
                    $this->name.'_'.Tools::strtolower($this->currentHook)
                );
            }
        }
    }

    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJquery();
            $this->context->controller->addJS($this->_path.'views/js/tmmanufacturerblock_admin.js');
        }
    }

    public function hookHeader()
    {
        if ($this->manufacturerPresenter->getValue('TM_MANUFACTURER_DISPLAY_CAROUCEL')) {
            $this->context->controller->addJqueryPlugin(array('bxslider'));
            $this->context->controller->registerJavascript('module-tmmanufacturerblock', 'modules/' .$this->name. '/views/js/tmmanufacturerblock.js');
        }
        $this->context->controller->registerStylesheet('module-tmmanufacturerblock', 'modules/' .$this->name. '/views/css/tmmanufacturerblock.css');
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        $manufacturers = Manufacturer::getManufacturers();
        if ($this->manufacturerSettingsRepository->getSetting($hookName, 'TM_MANUFACTURER_ORDER')) {
            $manufacturers = $this->changeArrayKeys($manufacturers);
        }
        foreach ($manufacturers as &$manufacturer) {
            $manufacturer['image'] = $this->context->language->iso_code.'-default';
            if (file_exists(
                _PS_MANU_IMG_DIR_.$manufacturer['id_manufacturer'].'-'.$this->manufacturerSettingsRepository->getSetting(
                    $hookName,
                    'TM_MANUFACTURER_DISPLAY_IMAGE_TYPE'
                ).'.jpg'
            )) {
                $manufacturer['image'] = $manufacturer['id_manufacturer'];
            }
        }

        return array(
            'hookName'               => $hookName,
            'manufacturers'          => $manufacturers,
            'display_name'           => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_DISPLAY_NAME'
            ),
            'order_by'               => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_ORDER'
            ),
            'display_image'          => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_DISPLAY_IMAGE'
            ),
            'image_type'             => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_DISPLAY_IMAGE_TYPE'
            ),
            'nb_display'             => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_DISPLAY_ITEM_NB'
            ),
            'display_caroucel'       => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_DISPLAY_CAROUCEL'
            ),
            'caroucel_nb'            => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_NB'
            ),
            'slide_width'            => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_SLIDE_WIDTH'
            ),
            'slide_margin'           => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_SLIDE_MARGIN'
            ),
            'caroucel_auto'          => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_AUTO'
            ),
            'caroucel_item_scroll'   => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_ITEM_SCROLL'
            ),
            'caroucel_speed'         => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_SPEED'
            ),
            'caroucel_auto_pause'    => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_AUTO_PAUSE'
            ),
            'caroucel_random'        => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_RANDOM'
            ),
            'caroucel_loop'          => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_LOOP'
            ),
            'caroucel_hide_controll' => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_HIDE_CONTROL'
            ),
            'caroucel_pager'         => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_PAGER'
            ),
            'caroucel_control'       => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_CONTROL'
            ),
            'caroucel_auto_control'  => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_AUTO_CONTROL'
            ),
            'caroucel_auto_hover'    => $this->manufacturerSettingsRepository->getSetting(
                $hookName, 'TM_MANUFACTURER_CAROUCEL_AUTO_HOVER'
            ),
        );
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        $fileName = 'tmmanufacturerblock.tpl';
        if ($this->getTemplatePath('views/templates/hook/tmmanufacturerblock_'.Tools::strtolower($hookName).'.tpl')) {
            $fileName = 'tmmanufacturerblock_'.Tools::strtolower($hookName).'.tpl';
        }
        if (!$this->isCached($fileName, $this->getCacheId('tmmanufacturerblock_'.Tools::strtolower($hookName)))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->display(
            __FILE__,
            'views/templates/hook/'.$fileName,
            $this->getCacheId('tmmanufacturerblock_'.Tools::strtolower($hookName))
        );
    }

    public function hookDisplayBeforeBodyClosingTag()
    {
        $params = [];

        $hooks = $this->manufacturerPresenter->getAllModuleHooks($this->name, $this->currentHook);

        if (is_array($hooks)) {
            foreach ($hooks as $hook) {
                $params[] = $this->getWidgetVariables($hook['name']);

            }
        } else {
            $params[] = $this->getWidgetVariables($this->currentHook);
        }

        $this->context->smarty->assign([
           'params' => $params
        ]);

        return $this->display($this->_path, '/views/templates/hook/tmmanufacturerblock-script.tpl');
    }
}
