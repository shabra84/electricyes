<?php
/**
* Promokit Menu Module
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
class pk_favoritesAccountModuleFrontController extends ModuleFrontController
{
	public $ssl = true;

	public function init()
	{
		parent::init();

		require_once($this->module->getLocalPath().'/classes/FavoriteProduct.php');
	}

	public function initContent()
	{
		parent::initContent();

		if (!Context::getContext()->customer->isLogged())
			Tools::redirect('index.php?controller=authentication&redirect=module&module=pk_favorites&action=account');

		if (Context::getContext()->customer->id)
		{
			$this->context->smarty->assign('favoriteProducts', FavoriteProduct::getFavProducts(Context::getContext()->customer->id));
			$this->setTemplate('module:pk_favorites/views/templates/front/pk_favorites-account.tpl');
		}
	}
}