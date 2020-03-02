{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="logo-wrapper">
      <a href="{$urls.base_url}">
        <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
      </a>
    </div>
    <div class="menu-wrapper">
      {hook h='displayTop'}
    </div>
    <div class="nav-wrapper">
      {hook h='displayNav1'}
      <div class="nav-vertical">
        {hook h='displayNav2'}
        {hook h='displayNav'}
      </div>
    </div>
  </nav>
{/block}