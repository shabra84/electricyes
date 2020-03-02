{*
* 2002-2017 TemplateMonster
*
* TM Product Custom Tab
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
*  @author    TemplateMonster
*  @copyright 2002-2017 TemplateMonster
*  @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{if isset($items) && $items}
  <section id="product-tabs" class="page-product-box">
    {foreach from=$items item=item name=item}
      {if isset($item.name) && $item.name}
        <div class="product-tabs">
          <h3 class="page-product-heading">{$item.name|escape:'htmlall':'UTF-8'}</h3>
          <div>{$item.description nofilter}</div>
        </div>
      {/if}
    {/foreach}
  </section>
{/if}
