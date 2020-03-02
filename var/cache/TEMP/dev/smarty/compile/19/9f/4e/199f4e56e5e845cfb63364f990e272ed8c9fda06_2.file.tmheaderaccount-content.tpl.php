<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:50
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmheaderaccount/views/templates/hook/default/tmheaderaccount-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d91332e35b062_04002464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '199f4e56e5e845cfb63364f990e272ed8c9fda06' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmheaderaccount/views/templates/hook/default/tmheaderaccount-content.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/form.tpl' => 2,
  ),
),false)) {
function content_5d91332e35b062_04002464 (Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="header-login-content<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?> is-logged<?php }?> dropdown-menu">
  <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <li <?php if ($_smarty_tpl->tpl_vars['hook']->value == 'displayNav2') {?>class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configs']->value['TMHEADERACCOUNT_DISPLAY_STYLE'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <ul>
      <li class="user-data">
        <?php if ($_smarty_tpl->tpl_vars['configs']->value['TMHEADERACCOUNT_USE_AVATAR']) {?>
          <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['avatar']->value, ENT_QUOTES, 'UTF-8');?>
" alt=""<?php if ($_smarty_tpl->tpl_vars['hook']->value == 'displayNav') {?> width="<?php if ($_smarty_tpl->tpl_vars['configs']->value['TMHEADERACCOUNT_DISPLAY_STYLE'] == "twocolumns") {?>150<?php } else { ?>90<?php }?>"<?php }?>>
        <?php }?>
        <p><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['firstname']->value, ENT_QUOTES, 'UTF-8');?>
</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastname']->value, ENT_QUOTES, 'UTF-8');?>
</span></p>
      </li>
      <li>
        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

        </a>
      </li>
      <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
        <li>
          <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My returns','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My merchandise returns','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

          </a>
        </li>
      <?php }?>
      <li>
        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My credit slips','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My credit slips','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

        </a>
      </li>
      <li>
        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

        </a>
      </li>
      <li>
        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage my personal information','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My personal info','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

        </a>
      </li>
      <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
        <li>
          <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

          </a>
        </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['f_status']->value) {?>
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
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['g_status']->value) {?>
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
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['vk_status']->value) {?>
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
      <?php }?>

    </ul>
    <p class="logout">
      <a class="btn btn-primary" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('index'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
?mylogout" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
" rel="nofollow">
        <i class="fa fa-unlock left"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

      </a>
    </p>
  </li>
  <?php } else { ?>
  <li class="login-content">
    <form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
      <div class="form_content clearfix">
        <?php $_smarty_tpl->_assignInScope('formFields', $_smarty_tpl->tpl_vars['login_form']->value['formFields']);?>
        <?php $_smarty_tpl->_subTemplateRender("file:./_partials/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <p class="submit">
          <button type="submit" name="HeaderSubmitLogin" class="btn btn-primary">
            <i class="fa fa-lock left"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

          </button>
        </p>
        <p>
          <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="create btn btn-secondary">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

          </a>
        </p>
        <p>
          <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('password','true'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="forgot-password">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

          </a>
        </p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderLoginButtons"),$_smarty_tpl ) );?>

      </div>
    </form>
  </li>
  <li class="create-account-content hidden">
    <div class="alert alert-danger" style="display:none;"></div>
    <form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" class="std">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'HOOK_CREATE_ACCOUNT_TOP'),$_smarty_tpl ) );?>

      <div class="account_creation">
        <div class="clearfix">
          <?php $_smarty_tpl->_assignInScope('formFields', $_smarty_tpl->tpl_vars['register_form']->value['formFields']);?>
          <?php $_smarty_tpl->_subTemplateRender("file:./_partials/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
      </div>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value, ENT_QUOTES, 'UTF-8');?>

      <div class="submit clearfix">
        <input type="hidden" name="email_create" value="1"/>
        <input type="hidden" name="is_new_customer" value="1"/>
        <input type="hidden" class="hidden" name="back" value="my-account"/>
        <p class="submit">
          <button type="submit" name="submitAccount" class="btn btn-primary">
            <span>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

            </span>
          </button>
        </p>
        <p>
          <a href="#" class="btn btn-secondary signin"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
</span></a>
        </p>
      </div>
    </form>
  </li>
  <li class="forgot-password-content hidden">
    <form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_uri']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" class="std">
      <p class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter the email address you used to register. We will then send you a new password. ','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
</p>
      <fieldset>
        <div class="form-group">
          <div class="alert alert-success" style="display:none;"></div>
          <div class="alert alert-danger" style="display:none;"></div>
          <label for="email-forgot"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
</label>
          <input class="form-control" type="email" name="email" id="email-forgot" value="<?php if (isset($_POST['email'])) {
echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['email'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');
}?>"/>
        </div>
        <p class="submit">
          <button type="submit" class="btn btn-primary">
            <span>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retrieve Password','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>

            </span>
          </button>
        </p>
        <p>
          <a href="#" class="btn btn-secondary signin"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'tmheaderaccount'),$_smarty_tpl ) );?>
</span></a>
        </p>
      </fieldset>
    </form>
  </li>
    <?php echo '<script'; ?>
>
    <?php if (isset($_POST['id_state']) && $_POST['id_state']) {?>idSelectedState = "<?php echo htmlspecialchars(intval($_POST['id_state']), ENT_QUOTES, 'UTF-8');?>
";<?php } elseif (isset($_smarty_tpl->tpl_vars['address']->value->id_state) && $_smarty_tpl->tpl_vars['address']->value->id_state) {?>idSelectedState = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['address']->value->id_state), ENT_QUOTES, 'UTF-8');?>
";<?php } else { ?>idSelectedState = false;<?php }
if (isset($_POST['id_state_invoice']) && isset($_POST['id_state_invoice']) && $_POST['id_state_invoice']) {?>idSelectedStateInvoice = "<?php echo htmlspecialchars(intval($_POST['id_state_invoice']), ENT_QUOTES, 'UTF-8');?>
";<?php } else { ?>idSelectedStateInvoice = false;<?php }
if (isset($_POST['id_country']) && $_POST['id_country']) {?>idSelectedCountry = "<?php echo htmlspecialchars(intval($_POST['id_country']), ENT_QUOTES, 'UTF-8');?>
";<?php } elseif (isset($_smarty_tpl->tpl_vars['address']->value->id_country) && $_smarty_tpl->tpl_vars['address']->value->id_country) {?>idSelectedCountry = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['address']->value->id_country), ENT_QUOTES, 'UTF-8');?>
";<?php } else { ?>idSelectedCountry = false;<?php }
if (isset($_POST['id_country_invoice']) && isset($_POST['id_country_invoice']) && $_POST['id_country_invoice']) {?>idSelectedCountryInvoic = "<?php echo htmlspecialchars(intval($_POST['id_country_invoice']), ENT_QUOTES, 'UTF-8');?>
";<?php } else { ?>idSelectedCountryInvoic = false;<?php }
if (isset($_smarty_tpl->tpl_vars['countries']->value)) {?>countries = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['countries']->value ));?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value) && $_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value) {?>vatnumber_ajax_call = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value, ENT_QUOTES, 'UTF-8');?>
";<?php }
if (isset($_smarty_tpl->tpl_vars['email_create']->value) && $_smarty_tpl->tpl_vars['email_create']->value) {?>vatnumber_ajax_call = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['email_create']->value )), ENT_QUOTES, 'UTF-8');?>
";<?php } else { ?>vatnumber_ajax_call = false;<?php }?>
  <?php }?>
    <?php echo '</script'; ?>
>
</ul><?php }
}
