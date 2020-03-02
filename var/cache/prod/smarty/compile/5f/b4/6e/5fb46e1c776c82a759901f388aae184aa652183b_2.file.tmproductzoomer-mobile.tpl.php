<?php
/* Smarty version 3.1.32, created on 2019-11-27 06:21:53
  from '/home/nuevaelectricyes/public_html/modules/tmproductzoomer/views/templates/hook/tmproductzoomer-mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dde07f1b586e7_14807418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb46e1c776c82a759901f388aae184aa652183b' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmproductzoomer/views/templates/hook/tmproductzoomer-mobile.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dde07f1b586e7_14807418 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value, 'content', false, 'variable', 'content', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variable']->value => $_smarty_tpl->tpl_vars['content']->value) {
?>
        var <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['variable']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 = <?php if (!$_smarty_tpl->tpl_vars['content']->value['value']) {?>false<?php } elseif ($_smarty_tpl->tpl_vars['content']->value['type'] == 'string') {?>'<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content']->value['value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'<?php } else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content']->value['value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    var TMPRODUCTZOOMER_IS_MOBILE = true;
<?php echo '</script'; ?>
><?php }
}
