{block name='compare'}
<form method="post" action="{$page_link}" class="compare-form">
	<button type="submit" class="smooth02 bt_compare btn btn-primary" {if $comparator_max_item > 0} disabled{/if}>
		<span><span class="btn-txt">{l s='Compare' mod='pk_compare'}</span> (<strong class="total-compare-val">{$total_in_compare}</strong>)</span>
	</button>
	<input type="hidden" name="compare_product_count" class="compare_product_count" value="{$total_in_compare}" />
	<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
</form>
{/block}