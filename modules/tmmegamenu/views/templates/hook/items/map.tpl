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

{if isset($map) && $map && $map.latitude && $map.longitude}
  <li class="megamenu_map">
    <h5>{$map.title}</h5>
    <div id="tmmegamenu_map_{$map.id}" class="frontend-map"></div>
    {if $map.description}
      <div class="megamenu-map-description">
        {$map.description nofilter}
      </div>
    {/if}
  </li>
{/if}
