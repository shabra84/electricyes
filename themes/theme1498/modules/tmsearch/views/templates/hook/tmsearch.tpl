<div id="tmsearch" class="nav-element">
	<span class="expand-more" data-toggle="dropdown"><i class="fl-outicons-magnifying-glass34"></i></span>
	<form id="tmsearchbox" method="get" action="{Tmsearch::getTMSearchLink('tmsearch')|escape:'htmlall':'UTF-8'}" >
		{if !Configuration::get('PS_REWRITING_SETTINGS')}
			<input type="hidden" name="fc" value="module" />
			<input type="hidden" name="controller" value="tmsearch" />
			<input type="hidden" name="module" value="tmsearch" />
		{/if}
		<div class="selector">
			<select name="search_categories" class="form-control form-control-select">
				{foreach from=$search_categories item=category}
					<option {if isset($active_category) && $active_category == $category.id}selected="selected"{/if} value="{$category.id|escape:'htmlall':'UTF-8'}">{if $category.id == 2}{l s='All Categories' mod='tmsearch'}{else}{$category.name|escape:'htmlall':'UTF-8'}{/if}</option>
				{/foreach}
			</select>
		</div>
		<input class="tm_search_query form-control" type="text" id="tm_search_query" name="search_query" placeholder="{l s='Search' mod='tmsearch'}" value="{if isset($search_query)}{$search_query|escape:'htmlall':'UTF-8'|stripslashes}{/if}" />
		<button type="submit" name="tm_submit_search" class="button-search">
			<i class="fl-outicons-magnifying-glass34"></i>
		</button>
	</form>
</div>