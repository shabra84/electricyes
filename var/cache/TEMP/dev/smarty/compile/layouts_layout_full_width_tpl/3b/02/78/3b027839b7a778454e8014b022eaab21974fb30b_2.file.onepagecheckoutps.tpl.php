<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:50
  from '/home/nuevaelectricyes/public_html/modules/onepagecheckoutps/views/templates/front/onepagecheckoutps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d91332e235777_57089885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b027839b7a778454e8014b022eaab21974fb30b' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/onepagecheckoutps/views/templates/front/onepagecheckoutps.tpl',
      1 => 1540768245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d91332e235777_57089885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1291501895d91332e221337_50477581', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_1291501895d91332e221337_50477581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1291501895d91332e221337_50477581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php echo $_smarty_tpl->tpl_vars['onepagecheckoutps']->value->includeTpl('theme.tpl',array('CONFIGS'=>$_smarty_tpl->tpl_vars['OnePageCheckoutPS']->value['CONFIGS']));?>


        <div id="onepagecheckoutps" class="js-current-step <?php if ($_smarty_tpl->tpl_vars['register_customer']->value) {?>rc<?php }?>">
            <input type="hidden" id="logged" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['customer']->value['is_logged']), ENT_QUOTES, 'UTF-8');?>
" />

            <div class="loading_big">
                <div class="loader">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'emailVerificationOPC'),$_smarty_tpl ) );?>


            <?php if (!$_smarty_tpl->tpl_vars['register_customer']->value) {?>
                <div id="onepagecheckoutps_header" class="col-xs-12 col-12">
                    <div class="row">
                        <div id="div_onepagecheckoutps_info" class="<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>col-md-8<?php }?> col-sm-12 col-xs-12 col-12">
                            <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick Checkout','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
</h1>
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Complete the following fields to process your order.','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
</p>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
                            <div id="div_onepagecheckoutps_login" class="col-md-4 col-sm-12 col-xs-12 col-12">
                                <div class="text-md-right">
                                    <p>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
,&nbsp;
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">
                                            <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</b>
                                        </a>
                                        <br/>
                                        <button id="btn-logout" data-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log me out','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
" class="btn btn-primary btn-sm">
                                            <i class="fa-pts fa-pts-sign-out fa-pts-1x"></i>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

                                        </button>
                                    </p>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php }?>

            <div class="row">
                <?php echo $_smarty_tpl->tpl_vars['onepagecheckoutps']->value->includeTpl('custom_html/header.tpl',array());?>

            </div>

            <div id="onepagecheckoutps_contenedor" class="col-xs-12 col-12">
                <div id="onepagecheckoutps_forms" class="hidden"></div>
                <div id="opc_temporal" class="hidden"></div>

                <?php if (!$_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
                    <div id="opc_login" class="hidden" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
">
                        <div class="login-box">
                            <?php if (isset($_smarty_tpl->tpl_vars['opc_social_networks']->value) && ($_smarty_tpl->tpl_vars['opc_social_networks']->value->facebook->client_id != '' || $_smarty_tpl->tpl_vars['opc_social_networks']->value->google->client_id != '')) {?>
                                <section id="opc_social_networks">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opc_social_networks']->value, 'network', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['network']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['network']->value->client_id != '') {?>
                                            <button type="button" class="btn btn-sm btn-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="Fronted.openWindow('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('onepagecheckoutps','login',array('sv'=>$_smarty_tpl->tpl_vars['network']->value->network)), ENT_QUOTES, 'UTF-8');?>
', true)">
                                                <i class="fa-pts fa-pts-1x fa-pts-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['network']->value->class_icon, ENT_QUOTES, 'UTF-8');?>
"></i>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['network']->value->name_network, ENT_QUOTES, 'UTF-8');?>

                                            </button>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </section>
                                <br/>
                            <?php }?>
                            <form id="form_login" autocomplete="off">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa-pts fa-pts-envelope-o fa-pts-fw"></i></span>
                                    <input
                                        id="txt_login_email"
                                        class="form-control"
                                        type="text"
                                        placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
"
                                        data-validation="isEmail"
                                    />
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa-pts fa-pts-key fa-pts-fw"></i></span>
                                    <input
                                        id="txt_login_password"
                                        class="form-control"
                                        type="password"
                                        placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
"
                                        data-validation="length"
                                        data-validation-length="min5"
                                    />
                                </div>
                                <br/>
                                <div class="alert alert-warning  pts-nopadding hidden"></div>
                                <br/>
                                <button type="button" id="btn_login" class="btn btn-info btn-block">
                                    <i class="fa-pts fa-pts-lock fa-pts-lg"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

                                </button>

                                <p class="forget_password">
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
</a>
                                </p>
                            </form>
                        </div>
                    </div>
                <?php }?>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position_steps']->value, 'column');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
?>
                        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value['classes'], ENT_QUOTES, 'UTF-8');?>
">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['rows'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <?php echo $_smarty_tpl->tpl_vars['onepagecheckoutps']->value->includeTpl((('steps/').($_smarty_tpl->tpl_vars['row']->value['name_step'])).('.tpl'),array('register_customer'=>$_smarty_tpl->tpl_vars['register_customer']->value,'classes'=>$_smarty_tpl->tpl_vars['row']->value['classes'],'CONFIGS'=>$_smarty_tpl->tpl_vars['OnePageCheckoutPS']->value['CONFIGS'],'OnePageCheckoutPS'=>$_smarty_tpl->tpl_vars['OnePageCheckoutPS']->value));?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>

            <div class="row">
                <?php echo $_smarty_tpl->tpl_vars['onepagecheckoutps']->value->includeTpl('custom_html/footer.tpl',array());?>

            </div>

            <div id="payment-confirmation" class="hidden"><div class="ps-shown-by-js"><button class="button btn-primary" type="submit"></button></div></div>

            <div class="clear clearfix"></div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
