<script type="text/javascript">
  {foreach from=$params item=hook}
    {if $hook.display_caroucel}
      {literal}
        $(document).ready(function() {
          initTMManufacturerCarousel('tm_manufacturers_block_{/literal}{$hook.hookName}{literal}'{/literal}, {$hook.caroucel_nb}, {$hook.slide_width}, {$hook.slide_margin}, {$hook.caroucel_item_scroll}, {$hook.caroucel_auto}, {$hook.caroucel_speed}, {$hook.caroucel_auto_pause}, {$hook.caroucel_random}, {$hook.caroucel_loop}, {$hook.caroucel_hide_controll}, {$hook.caroucel_pager}, {$hook.caroucel_control}, {$hook.caroucel_auto_control}, {$hook.caroucel_auto_hover}{literal});
        });
      {/literal}
    {/if}
  {/foreach}
</script>