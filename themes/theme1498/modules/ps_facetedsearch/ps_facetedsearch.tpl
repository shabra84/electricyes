{if isset($listing.rendered_facets)}
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <button data-search-url="{if isset($clear_all_link)}{$clear_all_link}{/if}" class="btn btn-primary js-search-filters-clear-all">
        <i class="material-icons">&#xE14C;</i>
        {l s='Clear all' d='Shop.Theme.Actions'}
      </button>
      <button class="btn btn-primary ok">
        <i class="material-icons">&#xE876;</i>
        {l s='OK' d='Shop.Theme.Actions'}
      </button>
  </div>
  {$listing.rendered_facets nofilter}
</div>
{/if}
