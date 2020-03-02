<?php
/* Smarty version 3.1.32, created on 2019-11-26 17:16:48
  from '/home/nuevaelectricyes/public_html/admin805/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddd4ff032d961_38281015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c90160031916078155c93eabce6baab5f13eb209' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/admin805/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1540693554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd4ff032d961_38281015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13406748715ddd4ff032cc28_18579792', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_13406748715ddd4ff032cc28_18579792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_13406748715ddd4ff032cc28_18579792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
