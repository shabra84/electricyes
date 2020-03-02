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
{extends file='page.tpl'}

{block name='page_title'}
  <span class="sitemap-title">{l s='Sitemap' d='Shop.Theme'}</span>
{/block}

{block name='page_content_container'}
  <div class="container-fluid">

    <div id="sitemap-tree" class="row sitemap col-xs-12">
        <div class="col-md-12">
          <h1 class="custom-toggle collapsed" data-toggle="collapse" data-target="#col_offers" aria-expanded="false">{$our_offers}</h1>
          <div class="collapse" id="col_offers">{include file='cms/_partials/sitemap-nested-list.tpl' links=$links.offers}</div>
        </div>
        <div class="col-md-12">
          <h1 class="custom-toggle collapsed" data-toggle="collapse" data-target="#col_categories" aria-expanded="false">{$categories}</h1>
          <div class="collapse" id="col_categories">{include file='cms/_partials/sitemap-nested-list.tpl' links=$links.categories}</div>
        </div>
        <div class="col-md-12">
          <h1 class="custom-toggle collapsed" data-toggle="collapse" data-target="#col_user_account" aria-expanded="false">{$your_account}</h1>
          <div class="collapse" id="col_user_account">{include file='cms/_partials/sitemap-nested-list.tpl' links=$links.user_account}</div>
        </div>
        <div class="col-md-12">
          <h1 class="custom-toggle collapsed" data-toggle="collapse" data-target="#col_pages" aria-expanded="false">{$pages}</h1>
          <div class="collapse" id="col_pages">{include file='cms/_partials/sitemap-nested-list.tpl' links=$links.pages}</div>
        </div>
    </div>
  </div>
{/block}
