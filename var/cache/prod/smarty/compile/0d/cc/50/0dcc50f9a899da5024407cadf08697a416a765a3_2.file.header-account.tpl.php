<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:21:57
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmheaderaccount/views/templates/hook/header-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0db5de9c04_38825979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dcc50f9a899da5024407cadf08697a416a765a3' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmheaderaccount/views/templates/hook/header-account.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0db5de9c04_38825979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('back_page', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('index'),'html','UTF-8' )));
if ($_smarty_tpl->tpl_vars['f_status']->value || $_smarty_tpl->tpl_vars['g_status']->value || $_smarty_tpl->tpl_vars['vk_status']->value) {?>
  <div class="clearfix social-login-buttons">
    <?php if ($_smarty_tpl->tpl_vars['f_status']->value) {?>
      <div class="<?php if ($_smarty_tpl->tpl_vars['g_status']->value && $_smarty_tpl->tpl_vars['vk_status']->value) {?>three-elements<?php } elseif ($_smarty_tpl->tpl_vars['g_status']->value || $_smarty_tpl->tpl_vars['vk_status']->value) {?>two-elements<?php } else { ?>one-element<?php }?>">
        <a class="btn btn-md btn-login-facebook" <?php if (isset($_smarty_tpl->tpl_vars['back']->value) && $_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','facebooklogin',array(),true), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','facebooklogin',array('back'=>$_smarty_tpl->tpl_vars['back_page']->value),true), ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login with Your Facebook Account','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
">
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook Login','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
</span>
        </a>
      </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['g_status']->value) {?>
      <div class="<?php if ($_smarty_tpl->tpl_vars['f_status']->value && $_smarty_tpl->tpl_vars['vk_status']->value) {?>three-elements<?php } elseif ($_smarty_tpl->tpl_vars['f_status']->value || $_smarty_tpl->tpl_vars['vk_status']->value) {?>two-elements<?php } else { ?>one-element<?php }?>">
        <a class="btn btn-md btn-login-google" <?php if (isset($_smarty_tpl->tpl_vars['back']->value) && $_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back_page']->value),true), ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login with Your Google Account','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
">
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Login','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
</span>
        </a>
      </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['vk_status']->value) {?>
      <div class="<?php if ($_smarty_tpl->tpl_vars['g_status']->value && $_smarty_tpl->tpl_vars['f_status']->value) {?>three-elements<?php } elseif ($_smarty_tpl->tpl_vars['g_status']->value || $_smarty_tpl->tpl_vars['f_status']->value) {?>two-elements<?php } else { ?>one-element<?php }?>">
        <a class="btn btn-md btn-login-vk" <?php if (isset($_smarty_tpl->tpl_vars['back']->value) && $_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','vklogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmheaderaccount','vklogin',array('back'=>$_smarty_tpl->tpl_vars['back_page']->value),true), ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login with Your VK Account','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
">
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VK Login','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
</span>
        </a>
      </div>
    <?php }?>
  </div>
<?php }
}
}
