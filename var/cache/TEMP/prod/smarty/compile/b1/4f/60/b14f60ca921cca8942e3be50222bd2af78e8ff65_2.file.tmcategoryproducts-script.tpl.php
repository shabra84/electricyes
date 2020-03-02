<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:07
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmcategoryproducts/views/templates/hook/tmcategoryproducts-script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc085b661b40_91244709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14f60ca921cca8942e3be50222bd2af78e8ff65' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmcategoryproducts/views/templates/hook/tmcategoryproducts-script.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc085b661b40_91244709 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['blocks']->value) && $_smarty_tpl->tpl_vars['blocks']->value) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, NULL, 'block', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']++;
?>
    <?php $_smarty_tpl->_assignInScope('block_identificator', "_".((string)$_smarty_tpl->tpl_vars['block']->value['id']));?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['use_carousel']) {?>
    
      <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
          setNbCatItems<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
();
          tmCategoryCarousel<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
 = $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');?>
-block-category-<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
 > .products').bxSlider({
            responsive       : true,
            useCSS           : false,
            minSlides        : carousel_nb_new<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
,
            maxSlides        : carousel_nb_new<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
,
            slideWidth       : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_slide_width'], ENT_QUOTES, 'UTF-8');?>
,
            slideMargin      : carousel_margin,
            infiniteLoop     : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_loop'], ENT_QUOTES, 'UTF-8');?>
,
            hideControlOnEnd : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_hide_control'], ENT_QUOTES, 'UTF-8');?>
,
            randomStart      : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_random'], ENT_QUOTES, 'UTF-8');?>
,
            moveSlides       : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_item_scroll'], ENT_QUOTES, 'UTF-8');?>
,
            pager            : carousel_pager,
            autoHover        : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_auto_hover'], ENT_QUOTES, 'UTF-8');?>
,
            auto             : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_auto'], ENT_QUOTES, 'UTF-8');?>
,
            speed            : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_speed'], ENT_QUOTES, 'UTF-8');?>
,
            pause            : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_auto_pause'], ENT_QUOTES, 'UTF-8');?>
,
            controls         : carousel_controls,
            autoControls     : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_auto_control'], ENT_QUOTES, 'UTF-8');?>
,
            startText        : '',
            stopText         : ''
          });
          var tm_cps_doit;
          $(window).resize(function() {
            clearTimeout(tm_cps_doit);
            tm_cps_doit = setTimeout(function() {
              resizedwtm_cps<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
();
            }, 201);
          });
        });
        function resizedwtm_cps<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
() {
          if ($('.category-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
').length) {
            setNbCatItems<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
();
            tmCategoryCarousel<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.reloadSlider({
              responsive       : true,
              useCSS           : false,
              minSlides        : carousel_nb_new<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
,
              maxSlides        : carousel_nb_new<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
,
              slideWidth       : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_slide_width'], ENT_QUOTES, 'UTF-8');?>
,
              slideMargin      : carousel_margin,
              infiniteLoop     : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_loop'], ENT_QUOTES, 'UTF-8');?>
,
              hideControlOnEnd : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_hide_control'], ENT_QUOTES, 'UTF-8');?>
,
              randomStart      : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_random'], ENT_QUOTES, 'UTF-8');?>
,
              moveSlides       : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_item_scroll'], ENT_QUOTES, 'UTF-8');?>
,
              pager            : carousel_pager,
              autoHover        : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_auto_hover'], ENT_QUOTES, 'UTF-8');?>
,
              auto             : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_auto'], ENT_QUOTES, 'UTF-8');?>
,
              speed            : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_speed'], ENT_QUOTES, 'UTF-8');?>
,
              pause            : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_auto_pause'], ENT_QUOTES, 'UTF-8');?>
,
              controls         : carousel_controls,
              autoControls     : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_auto_control'], ENT_QUOTES, 'UTF-8');?>
,
              startText        : '',
              stopText         : ''
            });
          }
        }
        function setNbCatItems<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
() {
          if ($('.category-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
').width() < 320) {
            carousel_nb_new<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
 = 1;
            carousel_pager = 0;
            carousel_controls = 1;
            carousel_margin = 10;
          }
          if ($('.category-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
').width() >= 320) {
            carousel_nb_new<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
 = 2;
            carousel_pager = 0;
            carousel_controls = 1;
            carousel_margin = 10;
          }
          if ($('.category-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
').width() >= 560) {
            carousel_nb_new<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
 = 3;
            carousel_pager = 0;
            carousel_controls = 1;
            carousel_margin = 10;
          }
          if ($('.category-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
').width() > 840) {
            carousel_nb_new<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['hook_name'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
 = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_nb'], ENT_QUOTES, 'UTF-8');?>
;
            carousel_pager = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_pager'], ENT_QUOTES, 'UTF-8');?>
;
            carousel_controls = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_control'], ENT_QUOTES, 'UTF-8');?>
;
            carousel_margin = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['carousel_settings']['carousel_slide_margin'], ENT_QUOTES, 'UTF-8');?>
;
          }
        }
      <?php echo '</script'; ?>
>
    
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
