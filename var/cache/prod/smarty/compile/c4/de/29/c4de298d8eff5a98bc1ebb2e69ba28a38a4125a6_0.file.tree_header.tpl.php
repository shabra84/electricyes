<?php
/* Smarty version 3.1.32, created on 2019-11-26 02:59:23
  from '/home/nuevaelectricyes/public_html/admin805/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc86fb8b8294_13209295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4de298d8eff5a98bc1ebb2e69ba28a38a4125a6' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/admin805/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1540693555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc86fb8b8294_13209295 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
