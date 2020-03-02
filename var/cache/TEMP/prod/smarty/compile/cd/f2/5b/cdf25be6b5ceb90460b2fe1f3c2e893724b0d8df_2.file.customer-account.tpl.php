<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:06
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmheaderaccount/views/templates/hook/customer-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc085af3ba14_67462187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf25be6b5ceb90460b2fe1f3c2e893724b0d8df' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmheaderaccount/views/templates/hook/customer-account.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc085af3ba14_67462187 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['f_status']->value) {?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','facebooklink',array(),true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook Login Manager','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <span class="link-item">
        <i class="fl-outicons-facebook7"></i>
        <?php if (!$_smarty_tpl->tpl_vars['facebook_id']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect With Facebook','mod'=>'tmheaderaccount'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook Login Manager','mod'=>'tmheaderaccount'),$_smarty_tpl ) );
}?>
      </span>
  </a>
<?php }
if ($_smarty_tpl->tpl_vars['g_status']->value) {?>
  <a <?php if (isset($_smarty_tpl->tpl_vars['back']->value) && $_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','googlelogin',array(),true), ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Login Manager','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <span class="link-item">
        <i class="fl-outicons-twitter4"></i>
        <?php if (!$_smarty_tpl->tpl_vars['google_id']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect With Google','mod'=>'tmheaderaccount'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Login Manager','mod'=>'tmheaderaccount'),$_smarty_tpl ) );
}?>
      </span>
  </a>
<?php }
if ($_smarty_tpl->tpl_vars['vk_status']->value) {?>
  <a <?php if (isset($_smarty_tpl->tpl_vars['back']->value) && $_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','vklogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','vklogin',array(),true), ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VK Login Manager','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <span class="link-item">
        <i class="fl-outicons-google4"></i>
        <?php if (!$_smarty_tpl->tpl_vars['vkcom_id']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect With VK','mod'=>'tmheaderaccount'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VK Login Manager','mod'=>'tmheaderaccount'),$_smarty_tpl ) );
}?>
      </span>
  </a>
<?php }
}
}
