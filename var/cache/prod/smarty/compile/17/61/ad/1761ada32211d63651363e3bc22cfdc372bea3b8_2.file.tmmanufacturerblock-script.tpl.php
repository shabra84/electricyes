<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:21:57
  from '/home/nuevaelectricyes/public_html/modules/tmmanufacturerblock/views/templates/hook/tmmanufacturerblock-script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0db5eed3e8_34641037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1761ada32211d63651363e3bc22cfdc372bea3b8' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmmanufacturerblock/views/templates/hook/tmmanufacturerblock-script.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0db5eed3e8_34641037 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'hook');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['hook']->value['display_caroucel']) {?>
      
        $(document).ready(function() {
          initTMManufacturerCarousel('tm_manufacturers_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['hookName'], ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_nb'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['slide_width'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['slide_margin'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_item_scroll'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_auto'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_speed'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_auto_pause'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_random'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_loop'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_hide_controll'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_pager'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_control'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_auto_control'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value['caroucel_auto_hover'], ENT_QUOTES, 'UTF-8');?>
);
        });
      
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
><?php }
}
