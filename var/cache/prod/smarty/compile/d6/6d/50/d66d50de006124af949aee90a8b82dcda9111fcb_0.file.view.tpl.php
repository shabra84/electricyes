<?php
/* Smarty version 3.1.32, created on 2019-11-25 19:14:15
  from '/home/nuevaelectricyes/public_html/admin805/themes/default/template/controllers/payment_preferences/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc19f7cc1b25_80666076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd66d50de006124af949aee90a8b82dcda9111fcb' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/admin805/themes/default/template/controllers/payment_preferences/helpers/view/view.tpl',
      1 => 1540693554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/payment_preferences/restrictions.tpl' => 1,
  ),
),false)) {
function content_5ddc19f7cc1b25_80666076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1017147295ddc19f7cbb7e4_91174809', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1017147295ddc19f7cbb7e4_91174809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1017147295ddc19f7cbb7e4_91174809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!$_smarty_tpl->tpl_vars['shop_context']->value) {?>
		<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have more than one shop and must select one to configure payment.','d'=>'Admin.Payment.Notification'),$_smarty_tpl ) );?>
</div>
	<?php } else { ?>
		<div class="alert alert-info">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This is where you decide what payment modules are available for different variations like your customers\' currency, group, and country.','d'=>'Admin.Payment.Help'),$_smarty_tpl ) );?>

			<br />
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A check mark indicates you want the payment module available.','d'=>'Admin.Payment.Help'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If it is not checked then this means that the payment module is disabled.','d'=>'Admin.Payment.Help'),$_smarty_tpl ) );?>

			<br />
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please make sure to click Save for each section.','d'=>'Admin.Payment.Help'),$_smarty_tpl ) );?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['display_restrictions']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
				<?php $_smarty_tpl->_subTemplateRender('file:controllers/payment_preferences/restrictions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No payment module installed','d'=>'Admin.Payment.Notification'),$_smarty_tpl ) );?>
</div>
		<?php }?>
	<?php }
}
}
/* {/block "override_tpl"} */
}
