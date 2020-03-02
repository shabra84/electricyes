<?php
/**
* Promokit Favorites Module
*
* @package   alysum
* @version   1.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*/

/**
 * @since 1.5.0
 */
class pk_favoritesActionsModuleFrontController extends ModuleFrontController
{
	/**
	 * @var int
	 */
	public $id_product;

	public function init()
	{
		parent::init();

		require_once($this->module->getLocalPath().'classes/FavoriteProduct.php');
		$this->id_product = (int)Tools::getValue('id_product');
	}

	public function postProcess()
	{
		if (Tools::getValue('process') == 'remove')
			$this->processRemove();
		else if (Tools::getValue('process') == 'add')
			$this->processAdd();
		exit;
	}

	/**
	 * Remove a favorite product
	 */
	public function processRemove()
	{
		// check if product exists
		$product = new Product($this->id_product);
		if (!Validate::isLoadedObject($product))
			die('0');

		$favorite_product = FavoriteProduct::getFavoriteProduct((int)Context::getContext()->cookie->id_customer, (int)$product->id);
		if ($favorite_product && $favorite_product->delete())
			die('0');
		die(1);
	}

	/**
	 * Add a favorite product
	 */
	public function processAdd()
	{
		$product = new Product($this->id_product);
		// check if product exists
		if (!Validate::isLoadedObject($product) || FavoriteProduct::isCustomerFavoriteProduct((int)Context::getContext()->cookie->id_customer, (int)$product->id))
			die('1');
		$favorite_product = new FavoriteProduct();
		$favorite_product->id_product = $product->id;
		$favorite_product->id_customer = (int)Context::getContext()->cookie->id_customer;
		$favorite_product->id_shop = (int)Context::getContext()->shop->id;
		if ($favorite_product->add())
			die('0');
		die(1);
	}
}