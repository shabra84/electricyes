{*
* 2002-2016 TemplateMonster
*
* TM Mosaic Products
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
* @author    TemplateMonster
* @copyright 2002-2016 TemplateMonster
* @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}
{assign var='product' value=$data}
<div class="product-container" itemscope itemtype="http://schema.org/Product">
  <div class="product-image-container">
    <a class="product_img_link" href="{$product.url}" title="{$product.name}">
      <img class="img-fluid" src="{$product.cover.bySize.large_default.url}" alt="{$product.name}" />
    </a>
  </div>
  <h5>
    <a class="product-name" href="{$product.url}" title="{$product.name}" itemprop="name">{$product.name}</a>
  </h5>
  {block name='product_price_and_shipping'}
    <div class="product-price-and-shipping">
      {if $product.has_discount}
        {hook h='displayProductPriceBlock' product=$product type="old_price"}

        <span class="regular-price">{$product.regular_price}</span>
        {if $product.discount_type === 'percentage'}
          <span class="discount-percentage">{$product.discount_percentage}</span>
        {/if}
      {/if}

      {hook h='displayProductPriceBlock' product=$product type="before_price"}

      <span itemprop="price" class="price">{$product.price}</span>

      {hook h='displayProductPriceBlock' product=$product type='unit_price'}

      {hook h='displayProductPriceBlock' product=$product type='weight'}
    </div>
  {/block}
</div>
