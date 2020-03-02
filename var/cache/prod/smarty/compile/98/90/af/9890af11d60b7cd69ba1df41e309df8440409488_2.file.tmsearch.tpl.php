<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:21:57
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmsearch/views/templates/hook/tmsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0db5cf3ea2_21450666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9890af11d60b7cd69ba1df41e309df8440409488' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmsearch/views/templates/hook/tmsearch.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0db5cf3ea2_21450666 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tmsearch" class="nav-element">
	<span class="expand-more" data-toggle="dropdown"><i class="fl-outicons-magnifying-glass34"></i></span>
	<form id="tmsearchbox" method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Tmsearch::getTMSearchLink('tmsearch'),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
		<?php if (!Configuration::get('PS_REWRITING_SETTINGS')) {?>
			<input type="hidden" name="fc" value="module" />
			<input type="hidden" name="controller" value="tmsearch" />
			<input type="hidden" name="module" value="tmsearch" />
		<?php }?>
		<div class="selector">
			<select name="search_categories" class="form-control form-control-select">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
					<option <?php if (isset($_smarty_tpl->tpl_vars['active_category']->value) && $_smarty_tpl->tpl_vars['active_category']->value == $_smarty_tpl->tpl_vars['category']->value['id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == 2) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'tmsearch'),$_smarty_tpl ) );
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<input class="tm_search_query form-control" type="text" id="tm_search_query" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'tmsearch'),$_smarty_tpl ) );?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)) {
echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');
}?>" />
		<button type="submit" name="tm_submit_search" class="button-search">
			<i class="fl-outicons-magnifying-glass34"></i>
		</button>
	</form>
</div><?php }
}
