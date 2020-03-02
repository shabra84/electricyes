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

{assign var='banner' value=$data}
<div class="tmmp-frontend-banner tmmp-frontend-banner-{$banner->id}{if $banner->specific_class} {$banner->specific_class}{/if}">
  <h3>{$banner->title}</h3>
  {if $banner->url}
    <a href="{$banner->url}" title="{$banner->title}">
  {/if}
    {if $banner->image_path}
      <img class="img-fluid" src="{$tmmp_image_path}{$banner->image_path}" alt="{$banner->title}" />
    {/if}
    {if $banner->description}
      <div class="tmmp-banner-description">
        {$banner->description nofilter}
      </div>
    {/if}
  {if $banner->url}
    </a>
  {/if}
</div>