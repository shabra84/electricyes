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

class Product extends ProductCore {
    
    public $custom_field;
    public $atributo_1;
    public $atributo_2;
    public $atributo_3;
    public $atributo_4;
    public $atributo_5;
    public $atributo_6;
    public $atributo_7;
    public $atributo_8;
    public $atributo_9;
    public $atributo_10;
    public $custom_field_lang;
    public $custom_field_lang_wysiwyg;
    public $coordenada_1;
    public $coordenada_2;
    public $coordenada_3;
    public $coordenada_4;

    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, \Context $context = null) {
        //Définition des nouveaux champs
        self::$definition['fields']['coordenada_1'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['coordenada_2'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['coordenada_3'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['coordenada_4'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_1'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_2'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_3'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_4'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_5'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_6'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_7'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_8'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_9'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['atributo_10'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];

        self::$definition['fields']['custom_field'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['custom_field_lang']     = [
            'type' => self::TYPE_STRING,
            'lang' => true,
            'required' => false, 'size' => 255
        ];
        self::$definition['fields']['custom_field_lang_wysiwyg']     = [
            'type' => self::TYPE_HTML,
            'lang' => true,
            'required' => false,
            'validate' => 'isCleanHtml'
        ];
        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);
    }
}
