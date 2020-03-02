{*
* 2002-2016 TemplateMonster
*
* TM Product List Gallery
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
* @author   TemplateMonster
* @copyright  2002-2016 TemplateMonster
* @license  http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{if $smarty_settings.st_display}
  {if count($product_images) > 1}
    {foreach from=$product_images item=image}
      {assign var=imageId value="`$product.id_product`-`$image.id_image`"}
      {if !empty($image.legend)}
        {assign var=imageTitle value=$image.legend|escape:'html':'UTF-8'}
      {else}
        {assign var=imageTitle value=$product.name|escape:'html':'UTF-8'}
      {/if}
      {if $smarty_settings.st_type == 'rollover'}
        {if $image.cover != 1}
          <img class="img-fluid hover-image" src="{if Configuration::get('PS_SSL_ENABLED')}https://{else}http://{/if}{$link->getImageLink($product.link_rewrite, $imageId, 'home_default')|escape:'html':'UTF-8'}" alt="{$imageTitle|escape:'html':'UTF-8'}" title="{$imageTitle|escape:'html':'UTF-8'}" />
          {break}
        {/if}
      {/if}
    {/foreach}
    {if $smarty_settings.st_type == 'slideshow'}
        {foreach from=$product_images item=image name=image}
          {assign var=imageId value="`$product.id_product`-`$image.id_image`"}
          {if !empty($image.legend)}
            {assign var=imageTitle value=$image.legend|escape:'html':'UTF-8'}
          {else}
            {assign var=imageTitle value=$product.name}
          {/if}
          {if $image.cover != 1}
            <img class="img-fluid" src="{if Configuration::get('PS_SSL_ENABLED')}https://{else}http://{/if}{$link->getImageLink($product.link_rewrite, $imageId, 'home_default')|escape:'html':'UTF-8'}" alt="{$imageTitle|escape:'html':'UTF-8'}" title="{$imageTitle|escape:'html':'UTF-8'}" />
          {/if}
        {/foreach}
      {if $smarty_settings.st_slider_controls}
        <p class="slideshow-controls"><em class="prev"></em><em class="next"></em></p>
      {/if}
      {if $smarty_settings.st_slider_pager}
        <p class="slideshow-pager">
          {foreach from=$product_images item=image name=image}
            <em>{$smarty.foreach.image.iteration|escape:'html':'UTF-8'}</em>
          {/foreach}
        </p>
      {/if}
    {/if}
    {if $smarty_settings.st_type == 'gallery'}
      <div class="gallery-wrapper">
        <ul class="gallery-thumb-list">
          {foreach from=$product_images item=image name=image}
            {assign var=imageId value="`$product.id_product`-`$image.id_image`"}
            {if !empty($image.legend)}
              {assign var=imageTitle value=$image.legend|escape:'html':'UTF-8'}
            {else}
              {assign var=imageTitle value=$product.name}
            {/if}
            {assign var=imageVisible value=100/$smarty_settings.st_visible}
            {if $smarty.foreach.image.iteration < $smarty_settings.st_nb_items + 1}
              <li id="thumb-{$product.id_product|escape:'html':'UTF-8'}-{$image.id_image|escape:'html':'UTF-8'}" class="gallery-image-thumb{if $image.cover == 1} active{/if}{if $smarty_settings.st_gall_carousel && $smarty.foreach.image.iteration > $smarty_settings.st_visible} clone-image{/if}" style="width: {$imageVisible}%;{if $smarty_settings.st_gall_carousel && $smarty.foreach.image.iteration > $smarty_settings.st_visible} transform: translateX({{$smarty.foreach.image.iteration|escape:'html':'UTF-8'} - 1}00%){/if}">
                <span data-href="{if Configuration::get('PS_SSL_ENABLED')}https://{else}http://{/if}{$link->getImageLink($product.link_rewrite, $imageId, 'home_default')|escape:'html':'UTF-8'}" data-title="{$imageTitle|escape:'html':'UTF-8'}" data-alt="{$imageTitle|escape:'html':'UTF-8'}">
                  <img class="img-fluid" src="{if Configuration::get('PS_SSL_ENABLED')}https://{else}http://{/if}{$link->getImageLink($product.link_rewrite, $imageId, 'home_default')|escape:'html':'UTF-8'}" alt="{$imageTitle|escape:'html':'UTF-8'}" title="{$imageTitle|escape:'html':'UTF-8'}" itemprop="image" />
                </span>
              </li>
            {/if}
          {/foreach}
        </ul>
        {if $smarty_settings.st_gall_carousel && $product_images|@count > $smarty_settings.st_visible}
          <p class="gallery-controls"><span class="prev"></span><span class="next"></span></p>
        {/if}
      </div>
    {/if}
  {/if}
{/if}
