<?php 
class BornerosAjaxfuncModuleFrontController extends ModuleFrontController
{

	
	public function init()
    {
        parent::init();
	}

	public function __construct()
    {
    	$act = Tools::getValue('action');
    	if($act=="addtocart")
    		$this->addto();
    	else
    		$this->add2();
    }


    function createCart()
	{
		$this->context = Context::getContext();
	    if (is_null($this->context->cart)) {

	        $this->context->cart = 
	            new Cart($this->context->cookie->id_cart);
	    }

	    if (is_null($this->context->cart->id_lang)) {
	         $this->context->cart->id_lang = $this->context->cookie->id_lang;
	    }

	    if (is_null($this->context->cart->id_currency)) {
	         $this->context->cart->id_currency = $this->context->cookie->id_currency;
	    }

	    if (is_null($this->context->cart->id_customer)) {
	         $this->context->cart->id_customer = $this->context->cookie->id_customer;
	    }

	    if (is_null($this->context->cart->id_guest)) {

	        if (empty($this->context->cookie->id_guest)){
	            $this->context->cookie->__set(
	                'id_guest', 
	                Guest::getFromCustomer($this->context->cookie->id_customer)
	            );
	        }
	        $this->context->cart->id_guest = $this->context->cookie->id_guest;
	    }

	    if (is_null($this->context->cart->id)) {

	         $this->context->cart->add();

	         $this->context->cookie->__set('id_cart', $this->context->cart->id);
	    }
	}


    public function add2()
    {
    	/*
    	echo "Xxxxxxx";
        ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		*/
      $customData = Tools::getValue('customdata');
      $idProduct = Tools::getValue('pid'); // for me it's always one
      $idProduct = 157;
      $id_product_attribute = 0;
      $new_price_without_tax = 987;
	
	  $this->context = Context::getContext();
	  $this->createCart();

    	      // get cart id if exists
       if ($this->context->cookie->id_cart)
       {
       	 echo "tiene carro";
         $cart = new Cart($this->context->cookie->id_cart);
       }

      // create new cart if needed

    if (!isset($cart) OR !$cart->id)
    {
    	echo "NO tiene carro";
        $cart = new Cart($this->context->cookie->id_cart);
        $cart->id_customer = (int)($this->context->cookie->id_customer);
        $cart->id_address_delivery = (int) (Address::getFirstCustomerAddressId($cart->id_customer));
        $cart->id_address_invoice = $cart->id_address_delivery;
        $cart->id_lang = (int)($this->context->cookie->id_lang);
        $cart->id_currency = (int)($this->context->cookie->id_currency);
        $cart->id_carrier = 1;
        $cart->recyclable = 0;
        $cart->gift = 0;
        $cart->add();
        $this->context->cookie->id_cart = (int)($cart->id);
    }


/*
    $cart->updateQty(1,$idProduct);
    //print_r($cart);
    $cart->update();
    //$cart = $this->context->cart;
    echo "current-->".$cart->id;
	$current_id_cart = $cart->id;
*/	
	//$productToAdd = new Product((int)($idProduct), true, (int)($this->context->cookie->id_lang));

	$cart->updateQty(1, $idProduct);
	$specific_price = new SpecificPrice();
	$specific_price->id_product = (int)$idProduct; // choosen product id
	$specific_price->id_product_attribute = 0;
	$specific_price->id_cart = (int)$cart->id;
	$specific_price->id_shop = (int)$context->shop->id;
	$specific_price->id_currency = 0;
	$specific_price->id_country = 0;
	$specific_price->id_group = 0;
	$specific_price->id_customer = 0;
	$specific_price->from_quantity = 1;
	$specific_price->price = 632.5;
	$specific_price->reduction_type = 'amount';
	$specific_price->reduction_tax = 1;
	$specific_price->reduction = 0;
	$specific_price->from = date("Y-m-d H:i:s");
	$specific_price->to = date("Y-m-d").' 23:59:59'; // or set date x days from now
	$specific_price->id_specific_price_rule = $specific_price_rule->id;
	$specific_price->add();

/*
	echo "1";
	$specific_price = new SpecificPrice();
	echo "2";
	$specific_price->id_product = (int)$idProduct; // choosen product id
	echo "3";
	$specific_price->id_product_attribute = 0; // optional or set to 0
	echo "4";
	$specific_price->id_cart = (int)$cart->id;
	echo "5";
	$specific_price->from_quantity = 1;
	echo "6";
	$specific_price->price = 66.3;
	$specific_price->reduction_type = 'amount';
	$specific_price->reduction_tax = 1;
	$specific_price->reduction = 0;
	$specific_price->from = date("Y-m-d H:i:s");
	$specific_price->to = "0000-00-00 00:00:00"; // or set date x days from now
	echo "7";
	$specific_price->add();
	echo "8";
	*/
	/*
	$specific_price_rule = new SpecificPriceRule();
	$specific_price_rule->name = 'Price rule name here';
	$specific_price_rule->id_shop = (int)$context->shop->id;
	$specific_price_rule->id_currency = 0;
	$specific_price_rule->id_country = 0;
	$specific_price_rule->id_group = 0;
	$specific_price_rule->from_quantity = 1;
	$specific_price_rule->price = 132.5;
	$specific_price_rule->reduction = 0;
	$specific_price_rule->reduction_tax = 0;
	$specific_price_rule->reduction_type = 'amount';
	$specific_price_rule->from = date("Y-m-d H:i:s");
	$specific_price_rule->to = date("Y-m-d").' 23:59:59';
	$specific_price_rule->add();
	$specific_price = new SpecificPrice();
	$specific_price->id_product = (int)$idProduct; // choosen product id
	$specific_price->id_product_attribute = 0;
	$specific_price->id_cart = (int)$cart->id;
	$specific_price->id_shop = (int)$context->shop->id;
	$specific_price->id_currency = 0;
	$specific_price->id_country = 0;
	$specific_price->id_group = 0;
	$specific_price->id_customer = 0;
	$specific_price->from_quantity = 1;
	$specific_price->price = 132.5;
	$specific_price->reduction_type = 'amount';
	$specific_price->reduction_tax = 1;
	$specific_price->reduction = 0;
	$specific_price->from = date("Y-m-d H:i:s");
	$specific_price->to = date("Y-m-d").' 23:59:59'; // or set date x days from now
	$specific_price->id_specific_price_rule = $specific_price_rule->id;
	$specific_price->add();
	*/


	/*
	echo "a1";
	$specific_price = new SpecificPrice();
	echo "a2";


	$specific_price->id_product = (int)$idProduct; // choosen product id
	$specific_price->id_product_attribute = (int)$id_product_attribute; // optional or set to 0
	$specific_price->id_cart = (int)$current_id_cart;
	$specific_price->from_quantity = 1;
	$specific_price->price = $new_price_without_tax;
	$specific_price->reduction_type = 'amount';
	$specific_price->reduction_tax = 1;
	$specific_price->reduction = 0;
	$specific_price->from = date("Y-m-d H:i:s");
	$specific_price->to = "0000-00-00 00:00:00"; // or set date x days from now
		echo "a3";

	$specific_price->add();
		echo "a4";
		echo "FIN";
	*/
  echo "FINxxxx";


    }

    private function createCart()
	{
		$this->context = Context::getContext();
	    if (is_null($this->context->cart)) {

	        $this->context->cart = 
	            new Cart($this->context->cookie->id_cart);
	    }

	    if (is_null($this->context->cart->id_lang)) {
	         $this->context->cart->id_lang = $this->context->cookie->id_lang;
	    }

	    if (is_null($this->context->cart->id_currency)) {
	         $this->context->cart->id_currency = $this->context->cookie->id_currency;
	    }

	    if (is_null($this->context->cart->id_customer)) {
	         $this->context->cart->id_customer = $this->context->cookie->id_customer;
	    }

	    if (is_null($this->context->cart->id_guest)) {

	        if (empty($this->context->cookie->id_guest)){
	            $this->context->cookie->__set(
	                'id_guest', 
	                Guest::getFromCustomer($this->context->cookie->id_customer)
	            );
	        }
	        $this->context->cart->id_guest = $this->context->cookie->id_guest;
	    }

	    if (is_null($this->context->cart->id)) {

	         $this->context->cart->add();

	         $this->context->cookie->__set('id_cart', $this->context->cart->id);
	    }
	}

    public function addto() {        
        
        ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

	  //  $this->context = Context::getContext();
		$this->context = Context::getContext();
	    if (is_null($this->context->cart)) {

	        $this->context->cart = 
	            new Cart($this->context->cookie->id_cart);
	    }

	    if (is_null($this->context->cart->id_lang)) {
	         $this->context->cart->id_lang = $this->context->cookie->id_lang;
	    }

	    if (is_null($this->context->cart->id_currency)) {
	         $this->context->cart->id_currency = $this->context->cookie->id_currency;
	    }

	    if (is_null($this->context->cart->id_customer)) {
	         $this->context->cart->id_customer = $this->context->cookie->id_customer;
	    }

	    if (is_null($this->context->cart->id_guest)) {

	        if (empty($this->context->cookie->id_guest)){
	            $this->context->cookie->__set(
	                'id_guest', 
	                Guest::getFromCustomer($this->context->cookie->id_customer)
	            );
	        }
	        $this->context->cart->id_guest = $this->context->cookie->id_guest;
	    }

	    if (is_null($this->context->cart->id)) {

	         $this->context->cart->add();

	         $this->context->cookie->__set('id_cart', $this->context->cart->id);
	    }



	  //print_r($cont);
      $customData = Tools::getValue('customdata');
      $idProduct = Tools::getValue('pid'); // for me it's always one
      $customData = "xxxxxxx";
      $idProduct = 64;
      $qty=1;
      $attribute = 74;
      echo "el id es ".$idProduct;
      //print_r($this->context);
       // get cart id if exists
       if ($this->context->cookie->id_cart)
       {
       	echo "p1";
         $cart = new Cart($this->context->cookie->id_cart);
       }

      // create new cart if needed

      if (!isset($cart) OR !$cart->id)
      {
      	echo "p2";
        $cart = new Cart($this->context->cookie->id_cart);
        $cart->id_customer = (int)($this->context->cookie->id_customer);
        $cart->id_address_delivery = (int) (Address::getFirstCustomerAddressId($cart->id_customer));
        $cart->id_address_invoice = $cart->id_address_delivery;
        $cart->id_lang = (int)($this->context->cookie->id_lang);
        $cart->id_currency = (int)($this->context->cookie->id_currency);
        $cart->id_carrier = 1;
        $cart->recyclable = 0;
        $cart->gift = 0;
        $cart->add();
        $this->context->cookie->id_cart = (int)($cart->id);
      }
		echo "ID: ".$idProduct." / LANG -->".$this->context->cookie->id_lang." //";
      // get product to add into cart
        //$productToAdd = new Product((int)($idProduct), true, (int)($this->context->cookie->id_lang));
        echo "p3";
        $cart->update();
        echo "p4";
        $cart = $this->context->cart;

        echo "p5";
        $updateQuantity = $cart->updateQty((int)($qty), (int)($idProduct));
        echo "p6";

        $cart->update();
        echo "p7";
       //header('Content-Type: application/json');
       //die(Tools::jsonEncode(['message' => true]));
       
      }

	
}