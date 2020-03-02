{*
* 2002-2017 TemplateMonster
*
* TM Mega Menu
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
* @author     TemplateMonster (Alexander Grosul)
* @copyright  2002-2017 TemplateMonster
* @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{if isset($menu) && $menu}
  {if $hook == 'left_column' || $hook == 'right_column'}
    <section class="block">
    <h4 class="title_block">{l s='Menu' mod='tmmegamenu'}</h4>
    <div class="block_content {$hook}_menu column_menu top-level tmmegamenu_item">
  {else}
    <div class="{$hook}_menu top-level tmmegamenu_item">
    <div class="menu-title tmmegamenu_item">{l s='Menu' mod='tmmegamenu'}</div>
  {/if}
  <ul class="menu clearfix top-level-menu tmmegamenu_item">
    {foreach from=$menu key=id item='item'}
      <li class="{$item.specific_class}{if $item.is_simple} simple{/if} top-level-menu-li tmmegamenu_item {$item.unique_code} {if isset($item.selected) && $item.selected}{$item.selected}{/if}">
        {if $item.url}
          <a class="{$item.unique_code} top-level-menu-li-a tmmegamenu_item" href="{$item.url}">
        {else}
          <span class="{$item.unique_code} top-level-menu-li-span tmmegamenu_item">
        {/if}
          {if $item.title}{$item.title}{/if}
            {if $item.badge}
              <span class="menu_badge {$item.unique_code} top-level-badge tmmegamenu_item">{$item.badge}</span>
            {/if}
        {if $item.url}
          </a>
        {else}
          </span>
        {/if}
        {if $item.is_simple}
          <ul class="is-simplemenu tmmegamenu_item first-level-menu {$item.unique_code}">
            {$item.submenu nofilter}
          </ul>
        {/if}
        {if $item.is_mega}
          <div class="is-megamenu tmmegamenu_item first-level-menu {$item.unique_code}">
            {foreach from=$item.submenu key='id_row' item='row'}
              <div id="megamenu-row-{$id}-{$id_row}" class="megamenu-row row megamenu-row-{$id_row}">
                {if isset($row)}
                  {foreach from=$row item='col'}
                    <div id="column-{$id}-{$id_row}-{$col.col}" class="megamenu-col megamenu-col-{$id_row}-{$col.col} col-sm-{$col.width} {$col.class}">
                      <ul class="content">
                        {$col.content nofilter}
                      </ul>
                    </div>
                  {/foreach}
                {/if}
              </div>
            {/foreach}
          </div>
        {/if}
      </li>
    {/foreach}
  </ul>
  {if $hook == 'left_column' || $hook == 'right_column'}
    </div>
  </section>
  {else}
    </div>
  {/if}
{/if}