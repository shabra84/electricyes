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
{block name='product_miniature_item'}
  <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container" style="padding-top:{{$product.cover.bySize.home_default.height}/{$product.cover.bySize.home_default.width} * 100 / 2}%; padding-bottom:{{$product.cover.bySize.home_default.height}/{$product.cover.bySize.home_default.width} * 100 / 2}%;">
      <div class="thumbnail-container-wrap">
        {block name='product_thumbnail'}
          <div class="product-thumbnail-wrapper">
              <a href="{$product.url}" class="thumbnail product-thumbnail">
                <img
                  class="img-fluid"
                  src = "{$product.cover.bySize.home_default.url}"
                  alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                  data-full-size-image-url = "{$product.cover.large.url}"
                >
                {capture name='displayProductListGallery'}{hook h='displayProductListGallery' product=$product}{/capture}
                {if $smarty.capture.displayProductListGallery}
                  {hook h='displayProductListGallery' product=$product}
                {/if}
              </a>
            {if $product.show_price}
              {if $product.has_discount}
                {if $product.discount_type === 'percentage'}
                  <span class="discount-percentage">{$product.discount_percentage}</span>
                {/if}
              {/if}
            {/if}
            {block name='product_flags'}
              <span class="product-flags">
                  {foreach from=$product.flags item=flag}
                    <span class="{$flag.type}">{$flag.label}</span>
                  {/foreach}
                </span>
            {/block}
          </div>
        {/block}

        <div class="product-description">
          {block name='product_name'}
            <h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
          {/block}

          {block name='product_price_and_shipping'}
            {if $product.show_price}
              <div class="product-price-and-shipping">
                {hook h='displayProductPriceBlock' product=$product type="before_price"}

                <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
                <span itemprop="price" class="price">{$product.price}</span>

                {hook h='displayProductPriceBlock' product=$product type='unit_price'}

                {if $product.has_discount}
                  {hook h='displayProductPriceBlock' product=$product type="old_price"}

                  <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
                  <span class="regular-price">{$product.regular_price}</span>
                {/if}
                {hook h='displayProductPriceBlock' product=$product type='weight'}
              </div>
            {/if}
          {/block}

        {block name='product_reviews'}
          {hook h='displayProductListReviews' product=$product}
        {/block}

        {block name='product_variants'}
          {if $product.main_variants}
            {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
          {/if}
        {/block}

        <div class="product-add-to-cart">
          {if !$configuration.is_catalog && {$product.minimal_quantity} < {$product.quantity}}
            <form action="{$urls.pages.cart}" method="post">
              <div class="product-quantity" style="display:none;">
                <input type="hidden" name="token" value="{$static_token}">
                <input type="hidden" name="id_product" value="{$product.id_product}">
                <input type="hidden" name="id_customization" value="0">
                <input type="hidden" name="qty" value="1" class="input-group"  min="1"  />
              </div>
              {if $product.customizable == 0}
              <a href="javascript:void(0);" class="ajax_add_to_cart_button add-to-cart btn btn-lg btn-primary hidden-lg-down" data-button-action="add-to-cart">
                <i class="material-icons">&#xE8CB;</i>
                <span>{l s='Add to cart' d='Shop.Theme.Actions'}</span>
              </a>
              <a href="javascript:void(0);" class="ajax_add_to_cart_button add-to-cart hidden-xl-up" data-button-action="add-to-cart">
                <i class="material-icons">&#xE8CB;</i>
              </a>
              {/if}
              {block name='quick_view'}
                <a class="quick-view" href="#" data-link-action="quickview"><span>{l s='Quick view' d='Shop.Theme.Actions'}</span></a>
              {/block}
            </form>
          {else}
            {block name='quick_view'}
              <a class="quick-view" href="#" data-link-action="quickview"><span>{l s='Quick view' d='Shop.Theme.Actions'}</span></a>
            {/block}
          {/if}
        </div>
      </div>
    </div>

  </article>
{/block}
