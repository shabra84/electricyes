{*
* 2002-2016 TemplateMonster
*
* TM Manufacturers block
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
* @author     TemplateMonster (Alexander Grosul)
* @copyright  2002-2016 TemplateMonster
* @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{if $manufacturers}
  <div id="tm_manufacturers_block_{$hookName}" class="{$hookName} clearfix tm_manufacturers_block default">
    <ul class="manufacturers_items{if !$display_caroucel} row{else} clearfix{/if}">
      {foreach from=$manufacturers item=manufacturer name=manufacturers}
        {if $smarty.foreach.manufacturers.iteration <= $nb_display}
          <li class="manufacturer_item{if !$display_caroucel} col-xs-6 col-sm-3{else} caroucel_item{/if}">
            {if isset($display_name) && $display_name}
              <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)}" title="{l s='More about %s' sprintf=[$manufacturer.name] mod='tmmanufacturerblock'}">{$manufacturer.name}</a>
            {/if}
            {if isset($display_image) && $display_image}
              <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)}" title="{l s='More about %s' sprintf=[$manufacturer.name] mod='tmmanufacturerblock'}">
                <img class="img-responsive" src="{$urls.img_manu_url}{$manufacturer.id_manufacturer}-{$image_type}.jpg" alt="{$manufacturer.image}"/>
              </a>
            {/if}
          </li>
        {/if}
      {/foreach}
    </ul>
  </div>
{/if}