<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:21:57
  from 'module:pkfavoritesviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0db5ea96b8_78422225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e022a2d6a92ebc1ab936634504dd81a9deea153' => 
    array (
      0 => 'module:pkfavoritesviewstemplates',
      1 => 1540717599,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0db5ea96b8_78422225 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="favorites-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('pk_favorites','account'), ENT_QUOTES, 'UTF-8');?>
">
  <span class="link-item">
    <svg class="svgic smooth500"><use xlink:href="#si-like-stroke"></use></svg>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My favorite products','mod'=>'pk_favorites'),$_smarty_tpl ) );?>
</span>
  </span>
</a><?php }
}
