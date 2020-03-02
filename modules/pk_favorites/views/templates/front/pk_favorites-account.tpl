{*
* Promokit Favorites Module
*
* @package   alysum
* @version   1.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*}

{extends file='page.tpl'}

{block name="page_content"}
		<div id="favoriteproducts_block_account">
			<h2 class="page-title">{l s='My favorite products.' mod='pk_favorites'}</h2>
			{if $favoriteProducts}
				<div class="view_grid">
					<div class="product_list">
						<div class="grid-container">
						{foreach from=$favoriteProducts item=favoriteProduct}
							{include file="catalog/_partials/miniatures/product.tpl" product=$favoriteProduct}
						{/foreach}
						</div>
					</div>
				</div>
			{else}
				<p class="warning">{l s='No favorite products have been determined just yet' mod='pk_favorites'}</p>
			{/if}
		</div>
{/block}