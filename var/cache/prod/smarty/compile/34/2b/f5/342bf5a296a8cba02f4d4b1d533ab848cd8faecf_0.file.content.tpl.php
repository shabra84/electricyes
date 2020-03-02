<?php
/* Smarty version 3.1.32, created on 2019-11-25 19:12:15
  from '/home/nuevaelectricyes/public_html/admin805/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc197f260248_91373034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '342bf5a296a8cba02f4d4b1d533ab848cd8faecf' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/admin805/themes/default/template/content.tpl',
      1 => 1540693554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc197f260248_91373034 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
