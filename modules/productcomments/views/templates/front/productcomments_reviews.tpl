{*
* Promokit Rating Module
*
* @package   alysum
* @version   1.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*}
{assign var=stars_num value=5}
{assign var=stars_num_tmp value=$stars_num}
<div class="flex-container align-items-center fast-review">
<div class="star_content">
	<div class="max-rating star-container">
		{while $stars_num_tmp-- > 0}
		  <svg class="svgic svgic-pk-star"><use xlink:href="#si-pk-star"></use></svg>
		{/while}
	</div>
	<div class="star-rating" style="width:{(100/$stars_num)*$averageTotal}%" data-average="{$averageTotal}">
		<div class="cut-stars star-container">
		{while $stars_num-- > 0}
		  <svg class="svgic svgic-pk-star"><use xlink:href="#si-pk-star"></use></svg>
		{/while}
		</div>
	</div>
</div>
{if isset($show_link) && $show_link == true}
<div class="add-review">
	<a class="open-comment-form" href="#new_comment_form">{l s='Add Review' mod='productcomments'}</a>
</div>
{/if}
</div>