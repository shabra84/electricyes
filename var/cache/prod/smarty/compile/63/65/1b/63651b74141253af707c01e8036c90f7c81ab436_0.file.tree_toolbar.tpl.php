<?php
/* Smarty version 3.1.32, created on 2019-11-26 02:59:23
  from '/home/nuevaelectricyes/public_html/admin805/themes/default/template/helpers/tree/tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc86fb8ad912_14930183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63651b74141253af707c01e8036c90f7c81ab436' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/admin805/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1540693555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc86fb8ad912_14930183 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
