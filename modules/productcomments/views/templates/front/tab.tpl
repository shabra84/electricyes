{*
* Promokit Rating Module
*
* @package   alysum
* @version   1.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*}
<li class="nav-item">
	<a class="nav-link" data-toggle="tab" href="#extra-99"><h5>{l s='Comments' mod='productcomments'}</h5>

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
	</div>
	</a>
</li>