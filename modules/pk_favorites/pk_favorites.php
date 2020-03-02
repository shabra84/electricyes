<?php
/**
* Promokit Menu Module
*
* @package   alysum
* @version   5.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*/

if (!defined('_CAN_LOAD_FILES_'))
	exit;

class pk_favorites extends Module
{
	public function __construct()
	{
		$this->name = 'pk_favorites';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'promokit.eu';
		$this->need_instance = 0;

		$this->controllers = array('account');

		parent::__construct();

		$this->displayName = $this->l('Favorite Products');
		$this->description = $this->l('Display a page featuring the customer\'s favorite products.');
		$this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
	}

	public function install()
	{
			if (!parent::install()
				|| !$this->registerHook('displayMyAccountBlock')
				|| !$this->registerHook('displayCustomerAccount')
				|| !$this->registerHook('displayMoreButtons')
        || !$this->registerHook('displayFavButton')
        || !$this->registerHook('displayProductButtons')
				|| !$this->registerHook('displayHeader'))
					return false;

			if (!Db::getInstance()->execute('
				CREATE TABLE `'._DB_PREFIX_.'favorite_product` (
				`id_favorite_product` int(10) unsigned NOT NULL auto_increment,
				`id_product` int(10) unsigned NOT NULL,
				`id_customer` int(10) unsigned NOT NULL,
				`id_shop` int(10) unsigned NOT NULL,
				`date_add` datetime NOT NULL,
  				`date_upd` datetime NOT NULL,
				PRIMARY KEY (`id_favorite_product`))
				ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8'))
				return false;

			return true;
	}

	public function uninstall()
	{
		if (!parent::uninstall() || !Db::getInstance()->execute('DROP TABLE `'._DB_PREFIX_.'favorite_product`'))
			return false;
		return true;
	}

	public function hookDisplayCustomerAccount($params)
	{
		return $this->fetch('module:'.$this->name.'/views/templates/hook/my-account.tpl');
	}

	public function hookDisplayMyAccountBlock($params)
	{
		return $this->fetch('module:'.$this->name.'/views/templates/hook/my-account.tpl');
	}

	public function hookdisplayProductButtons($params)
	{
		include_once(dirname(__FILE__).'/classes/FavoriteProduct.php');
		$this->smarty->assign(array(
      'pid' => Tools::getValue('id_product'),
			'isCustomerFavoriteProduct' => (FavoriteProduct::isCustomerFavoriteProduct($this->context->customer->id, Tools::getValue('id_product')) ? 1 : 0)
		));
		return $this->fetch('module:'.$this->name.'/views/templates/hook/pk_favorites-extra.tpl');
	}

  public function hookDisplayFavButton($params)
  {
    include_once(dirname(__FILE__).'/classes/FavoriteProduct.php');
    $this->smarty->assign(array(
      'pid' => $params['product_id'],
      'isCustomerFavoriteProduct' => (FavoriteProduct::isCustomerFavoriteProduct($this->context->customer->id, $params['product_id']) ? 1 : 0)
    ));
    return $this->fetch('module:'.$this->name.'/views/templates/hook/pk_favorites-extra.tpl');
  }

	public function hookDisplayHeader($params)
	{
		$this->context->controller->registerStylesheet($this->name, 'modules/'.$this->name.'/views/assets/css/favoriteproducts.css', ['media' => 'all', 'priority' => 150]);
    $this->context->controller->registerJavascript($this->name, 'modules/'.$this->name.'/views/assets/js/favoriteproducts.js', ['position' => 'bottom', 'priority' => 150]);

		Media::addJsDef(
      array(
        'favorites' => array(
          'favorite_products_url_add' => $this->context->link->getModuleLink('pk_favorites', 'actions', ['process' => 'add']),
          'favorite_products_url_remove' => $this->context->link->getModuleLink('pk_favorites', 'actions', ['process' => 'remove'], true),
          'favorite_products_id_product' => Tools::getValue('id_product') ? Tools::getValue('id_product') : false,
          'phrases' => array(
            'add' => $this->l('Add to favorites'),
            'remove' => $this->l('Remove from favorites'),
          	'added' => $this->l('The product has been added to your').'&nbsp;<a href="'.$this->context->link->getModuleLink('pk_favorites', 'account').'">'.$this->l('favorites').'</a>',
          	'removed' => $this->l('The product has been removed from').'&nbsp;<a href="'.$this->context->link->getModuleLink('pk_favorites', 'account').'">'.$this->l('favorites').'</a>',
          )
        ),
      )
    );
	}

}