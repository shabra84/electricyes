{**
* 2002-2016 TemplateMonster
*
* TM Category Products
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
*  @author    TemplateMonster
*  @copyright 2002-2016 TemplateMonster
*  @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{if isset($blocks) && $blocks}
  {foreach from=$blocks item='block' name='block'}
    {assign var="block_identificator" value="_{$block.id}"}
    {if $block.use_carousel}
    {literal}
      <script type="text/javascript">
        $(document).ready(function() {
          setNbCatItems{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}();
          tmCategoryCarousel{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal} = $('#{/literal}{$block.hook_name}{literal}-block-category-{/literal}{$smarty.foreach.block.iteration}{literal} > .products').bxSlider({
            responsive       : true,
            useCSS           : false,
            minSlides        : carousel_nb_new{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal},
            maxSlides        : carousel_nb_new{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal},
            slideWidth       : {/literal}{$block.carousel_settings.carousel_slide_width}{literal},
            slideMargin      : carousel_margin,
            infiniteLoop     : {/literal}{$block.carousel_settings.carousel_loop}{literal},
            hideControlOnEnd : {/literal}{$block.carousel_settings.carousel_hide_control}{literal},
            randomStart      : {/literal}{$block.carousel_settings.carousel_random}{literal},
            moveSlides       : {/literal}{$block.carousel_settings.carousel_item_scroll}{literal},
            pager            : carousel_pager,
            autoHover        : {/literal}{$block.carousel_settings.carousel_auto_hover}{literal},
            auto             : {/literal}{$block.carousel_settings.carousel_auto}{literal},
            speed            : {/literal}{$block.carousel_settings.carousel_speed}{literal},
            pause            : {/literal}{$block.carousel_settings.carousel_auto_pause}{literal},
            controls         : carousel_controls,
            autoControls     : {/literal}{$block.carousel_settings.carousel_auto_control}{literal},
            startText        : '',
            stopText         : ''
          });
          var tm_cps_doit;
          $(window).resize(function() {
            clearTimeout(tm_cps_doit);
            tm_cps_doit = setTimeout(function() {
              resizedwtm_cps{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}();
            }, 201);
          });
        });
        function resizedwtm_cps{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}() {
          if ($('.category-block-{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}').length) {
            setNbCatItems{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}();
            tmCategoryCarousel{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}.reloadSlider({
              responsive       : true,
              useCSS           : false,
              minSlides        : carousel_nb_new{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal},
              maxSlides        : carousel_nb_new{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal},
              slideWidth       : {/literal}{$block.carousel_settings.carousel_slide_width}{literal},
              slideMargin      : carousel_margin,
              infiniteLoop     : {/literal}{$block.carousel_settings.carousel_loop}{literal},
              hideControlOnEnd : {/literal}{$block.carousel_settings.carousel_hide_control}{literal},
              randomStart      : {/literal}{$block.carousel_settings.carousel_random}{literal},
              moveSlides       : {/literal}{$block.carousel_settings.carousel_item_scroll}{literal},
              pager            : carousel_pager,
              autoHover        : {/literal}{$block.carousel_settings.carousel_auto_hover}{literal},
              auto             : {/literal}{$block.carousel_settings.carousel_auto}{literal},
              speed            : {/literal}{$block.carousel_settings.carousel_speed}{literal},
              pause            : {/literal}{$block.carousel_settings.carousel_auto_pause}{literal},
              controls         : carousel_controls,
              autoControls     : {/literal}{$block.carousel_settings.carousel_auto_control}{literal},
              startText        : '',
              stopText         : ''
            });
          }
        }
        function setNbCatItems{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}() {
          if ($('.category-block-{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}').width() < 320) {
            carousel_nb_new{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal} = 1;
            carousel_pager = 0;
            carousel_controls = 1;
            carousel_margin = 10;
          }
          if ($('.category-block-{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}').width() >= 320) {
            carousel_nb_new{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal} = 2;
            carousel_pager = 0;
            carousel_controls = 1;
            carousel_margin = 10;
          }
          if ($('.category-block-{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}').width() >= 560) {
            carousel_nb_new{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal} = 3;
            carousel_pager = 0;
            carousel_controls = 1;
            carousel_margin = 10;
          }
          if ($('.category-block-{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal}').width() > 840) {
            carousel_nb_new{/literal}{$block.hook_name}{$smarty.foreach.block.iteration}{literal} = {/literal}{$block.carousel_settings.carousel_nb}{literal};
            carousel_pager = {/literal}{$block.carousel_settings.carousel_pager}{literal};
            carousel_controls = {/literal}{$block.carousel_settings.carousel_control}{literal};
            carousel_margin = {/literal}{$block.carousel_settings.carousel_slide_margin}{literal};
          }
        }
      </script>
    {/literal}
    {/if}
  {/foreach}
{/if}