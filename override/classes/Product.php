<?php
class Product extends ProductCore {
    
    /*
    * module: hhproduct
    * date: 2019-05-21 02:40:11
    * version: 0.1.0
    */
    
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $custom_field;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_1;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_2;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_3;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_4;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_5;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_6;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_7;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_8;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_9;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $atributo_10;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $custom_field_lang;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $custom_field_lang_wysiwyg;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $coordenada_1;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $coordenada_2;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $coordenada_3;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public $coordenada_4;
    /*
    * module: hhproduct
    * date: 2019-06-11 15:27:01
    * version: 0.1.0
    */
    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, \Context $context = null) {
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
