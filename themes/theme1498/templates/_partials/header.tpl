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
<div id="toTop" style="display: block;"></div>

{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

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
        <div class="nav-element">
          <span class="expand-more" data-toggle="dropdown"><i class="fl-outicons-gear40"></i></span>
          <div class="dropdown"><form class="lang_carrency">{hook h='displayNav3'}</form></div>
        </div>
        {hook h='displayNav'}
      </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-full-width">
    {hook h='displayNavFullWidth'}
  </div>
  {if $page.page_name == 'index'}
    <div class="header-top-column">
      {hook h='displayTopColumn'}
    </div>
  {/if}
{/block}