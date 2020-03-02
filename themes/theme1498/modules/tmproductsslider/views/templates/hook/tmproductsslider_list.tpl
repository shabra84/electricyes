{*
* 2002-2017 TemplateMonster
*
* TM Products Slider
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
* @author     TemplateMonster
* @copyright  2002-2017 TemplateMonster
* @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{*-------Information list-------*}

{$settings.online_only = false}                 {*display "Online only" in slide info*}
{$settings.reference = false}                   {*display "Reference name" in slide info*}
{$settings.new_sale_labels = false}             {*display "New Sale labels" in slide info*}
{$settings.condition = false}                   {*display "Condition" in slide info*}
{$settings.product_name = true}                 {*display "Product name" in slide info*}
{$settings.description_short = true}           {*display "Description short" in slide info*}
{$settings.description = false}                  {*display "Description" in slide info*}
{$settings.manufacturer = true}                 {*display "Manufacturer" in slide info*}
{$settings.supplier = true}                     {*display "Supplier" in slide info*}
{$settings.features = false}                    {*display "Features" in slide info*}
{$settings.prices = true}                       {*display "Prices" in slide info*}
{$settings.quantity = false}                    {*display "Quantity" in slide info*}
{$settings.cart_button = true}                  {*display "Add to cart button" in slide info*}
{$settings.more_button = false}                  {*display "Read more button" in slide info*}

{*$hook_name|@var_dump*}
{if isset($slides) && $slides}
  <div class="tm-products-slider-wrapper list">
    <div class="tm-products-slider swiper-container">
      <div class="swiper-wrapper bg-faded">
        {foreach from=$slides item=slide}
          <div class="swiper-slide">
            <div class="row p-2">
              {if isset($slide.info_array.images) && $slide.info_array.images}
                <div class="slide-image col-xs-5 col-md-6">
                  <div class="slide-image-wrap">
                    {if $slide.info_array.new && $settings.new_sale_labels}
                      <span class="new-box">
                      <span class="new-label">{l s='New' mod='tmproductsslider'}</span>
                    </span>
                    {/if}
                    {if $slide.info_array.on_sale && $settings.new_sale_labels}
                      <span class="sale-box no-print">
                      <span class="sale-label">{l s='Sale!' mod='tmproductsslider'}</span>
                    </span>
                    {/if}
                    {if $settings.list_extended_settings && $settings.list_images_gallery}
                      {if isset($slide.info_array.images) && $slide.info_array.images}
                        <div class="tmpr-inner-slider swiper-container" data-init-slide="0">
                          <div class="swiper-wrapper">
                            {foreach from=$slide.images item=img}
                              <div class="swiper-slide">
                                <img class="img-fluid" src="{$link->getImageLink($slide.info_array.name, $img.id_image, 'large_default')|escape:'htmlall':'UTF-8'}" alt="{$slide.info_array.name|escape:'htmlall':'UTF-8'}"/>
                              </div>
                            {/foreach}
                          </div>
                        </div>
                        <div class="swiper-thumbnails-inner">
                          <div class="swiper-thumbnails swiper-container">
                            <div class="swiper-wrapper">
                              {foreach from=$slide.images item=img}
                                <div class="swiper-slide">
                                  <img class="img-fluid" src="{$link->getImageLink($slide.info_array.name, $img.id_image, 'medium_default')|escape:'htmlall':'UTF-8'}" alt="{$slide.info_array.name|escape:'htmlall':'UTF-8'}"/>
                                </div>
                              {/foreach}
                            </div>
                          </div>
                        </div>
                      {/if}
                    {else}
                      <a class="slide-image" href="{$slide.info_array.url|escape:'htmlall':'UTF-8'}" title="{$slide.info_array.name|escape:'htmlall':'UTF-8'}">
                        <img class="img-fluid" src="{$slide.info_array.cover.bySize.large_default.url|escape:'htmlall':'UTF-8'}" alt="{$slide.info_array.name|escape:'htmlall':'UTF-8'}"/>
                      </a>
                    {/if}
                  </div>
                </div>
              {/if}
              <div class="slide-info {if $slide.info_array.images}col-xs-7 col-md-6{else}col-xs-12{/if}">
                <div class="slide-info-wrap">
                  {if $slide.info_array.online_only && $settings.online_only}
                    <p class="online_only">{l s='Online only' mod='tmproductsslider'}</p>
                  {/if}
                  {if (!empty($slide.info_array.reference) || $slide.info_array.reference) && $settings.reference}
                    <p id="product_reference">
                      <label>{l s='Reference:' mod='tmproductsslider'} </label>
                      <span class="editable" {if !empty($slide.info_array.reference) && $slide.info_array.reference} content="{$slide.info_array.reference|escape:'htmlall':'UTF-8'}"{/if}>{if !isset($groups)}{$slide.info_array.reference|escape:'htmlall':'UTF-8'}{/if}</span>
                    </p>
                  {/if}
                  {if !$slide.info_array.is_virtual && $slide.info_array.embedded_attributes.condition && $settings.condition}
                    <p id="product_condition">
                      <label>{l s='Condition:' mod='tmproductsslider'} </label>
                      {if $slide.info_array.embedded_attributes.condition == 'new'}
                        <span class="editable">{l s='New product' mod='tmproductsslider'}</span>
                      {elseif $slide.info_array.embedded_attributes.condition == 'used'}
                        <span class="editable">{l s='Used' mod='tmproductsslider'}</span>
                      {elseif $slide.info_array.embedded_attributes.condition == 'refurbished'}
                        <span class="editable">{l s='Refurbished' mod='tmproductsslider'}</span>
                      {/if}
                    </p>
                  {/if}
                  {if $settings.product_name}<h2 class="mt-2"><a href="{$slide.info_array.url|escape:'htmlall':'UTF-8'}">{$slide.info_array.name|truncate:25:'...':false|escape:'htmlall':'UTF-8'}</a></h2>{/if}
                  {if $slide.info_array.description_short && $settings.description_short}
                    <p class="slide-description des-short">{$slide.info_array.description_short|strip_tags:true|truncate:130:'...':false|escape:'htmlall':'UTF-8'}</p>
                  {/if}
                  {if $slide.info_array.description && $settings.description}
                    <p class="slide-description">{$slide.info_array.description|strip_tags:true|truncate:230:'...':false|escape:'htmlall':'UTF-8'}</p>
                  {/if}
                  {if $slide.info_array.manufacturer_name && $settings.manufacturer}
                    <div class="slide-manufacturer">
                      <span>{l s='Brand:' mod='tmproductsslider'}</span>
                      {$slide.info_array.manufacturer_name|escape:'htmlall':'UTF-8'}
                    </div>
                  {/if}
                  {if isset($slide.info_array.features) && $slide.info_array.features && $settings.features}
                    <div class="slide-product-features mb-1">
                      {foreach from=$slide.info_array.features item=feature}
                        <small class="mr-1"><span>{$feature.name|escape:'htmlall':'UTF-8'}:</span> {$feature.value|escape:'htmlall':'UTF-8'}</small>
                      {/foreach}
                    </div>
                  {/if}
                  {if $slide.info_array.price && $slide.info_array.show_price && $settings.prices && !isset($restricted_country_mode)}
                    <div class="product-price mb-2">
                      {block name='product_price_and_shipping'}
                        <div class="product-price-and-shipping">
                          {if $slide.info_array.has_discount}
                            {hook h='displayProductPriceBlock' product=$slide.info_array type="before_price"}
                            <span class="product-price">{$slide.info_array.price}</span>
                            {hook h='displayProductPriceBlock' product=$slide.info_array type='unit_price'}
                            {hook h='displayProductPriceBlock' product=$slide.info_array type='weight'}

                            {hook h='displayProductPriceBlock' product=$slide.info_array type="old_price"}
                            <span class="product-price product-price-old">{$slide.info_array.regular_price}</span>
                            {if $slide.info_array.discount_type === 'percentage'}
                              <span class="product-price product-price-reduction">{$slide.info_array.discount_percentage}</span>
                            {/if}
                          {/if}
                        </div>
                      {/block}
                      {if ($slide.info_array.embedded_attributes.available_for_order && !$slide.info_array.embedded_attributes.quantity_all_versions <= 0 && $settings.quantity)}
                        <!-- number of item in stock -->
                        <p id="product-quantity">
                          <span>{$slide.info_array.embedded_attributes.quantity_all_versions|intval}</span>
                          {if $slide.info_array.embedded_attributes.quantity_all_versions == 1}
                            <span>{l s='Item' mod='tmproductsslider'}</span>
                          {else}
                            <span>{l s='Items' mod='tmproductsslider'}</span>
                          {/if}
                        </p>
                      {/if}
                    </div>
                  {/if}
                  {if $settings.more_button || $settings.cart_button}
                    <div class="buttons-container">
                      {if $slide.info_array.embedded_attributes.available_for_order && !isset($restricted_country_mode) && $settings.cart_button}
                        {if (!isset($slide.info_array.embedded_attributes.customization_required) || !$slide.info_array.embedded_attributes.customization_required) && $slide.info_array.embedded_attributes.quantity_all_versions > 0}
                          <a class="ajax_add_to_cart_button btn btn-primary cart-button btn-lg " href="{$link->getPageLink('cart', true, NULL, "qty=1&amp;id_product={$slide.info_array.id_product|intval}&amp;token={$static_token}&amp;add", false)|escape:'html':'UTF-8'}" rel="nofollow"
                             title="{l s='Add to cart' mod='tmproductsslider'}" data-id-product="{$slide.info_array.id_product|intval}" data-minimal_quantity="{$slide.info_array.embedded_attributes.minimal_quantity|intval}">
                            <i class="fl-outicons-shopping-cart13"></i>
                            <span>{l s='Add to cart' mod='tmproductsslider'}</span>
                          </a>
                        {else}
                          <a href="{$slide.info_array.url|escape:'htmlall':'UTF-8'}" class="btn btn-primary cart-button">
                            <span>{l s='Add to cart' mod='tmproductsslider'}</span>
                          </a>
                        {/if}
                      {/if}
                      {if $settings.more_button}
                        <a href="{$slide.info_array.url|escape:'htmlall':'UTF-8'}" class="btn lnk_view btn btn-secondary">
                          <span>{l s='Read More' mod='tmproductsslider'}</span>
                        </a>
                      {/if}
                    </div>
                  {/if}
                </div>
              </div>
            </div>
          </div>
        {/foreach}
      </div>
      {if $settings.list_extended_settings && $settings.list_slider_navigation}
        <div class="swiper-button-prev swiper-button-black"></div>
        <div class="swiper-button-next swiper-button-black"></div>
      {/if}
      {if $settings.list_extended_settings && $settings.list_slider_pagination}
        <div class="swiper-pagination my-1"></div>
      {/if}
    </div>
    {if ($settings.list_extended_settings && $settings.list_slider_thumbnails) || !$settings.list_extended_settings}
      <div class="swiper-thumbnails">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            {foreach from=$slides item=slide name=slide}
              <div class="swiper-slide{if ($smarty.foreach.slide.iteration - 1) % 4 == 0} start-decor{/if}{if ($smarty.foreach.slide.iteration - 1) % 2 == 0} even{/if}">
                <div class="product-thumbnail">
                  <img class="img-fluid" src="{$slide.info_array.cover.bySize.medium_default.url|escape:'htmlall':'UTF-8'}" alt="{$slide.info_array.name|escape:'htmlall':'UTF-8'}"/>
                  {if $settings.product_name}<h6><span>{$slide.info_array.name|truncate:25:'...':false|escape:'htmlall':'UTF-8'}</span></h6>{/if}
                </div>
              </div>
            {/foreach}
          </div>
        </div>
      </div>
    {/if}
  </div>
{/if}

