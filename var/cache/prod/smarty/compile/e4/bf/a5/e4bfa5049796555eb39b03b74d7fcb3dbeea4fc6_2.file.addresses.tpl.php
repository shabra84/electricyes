<?php
/* Smarty version 3.1.32, created on 2019-11-25 19:10:02
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/checkout/_partials/steps/addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc18fa5f6d27_95887377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4bfa5049796555eb39b03b74d7fcb3dbeea4fc6' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/checkout/_partials/steps/addresses.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/address-selector-block.tpl' => 2,
  ),
),false)) {
function content_5ddc18fa5f6d27_95887377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10145449775ddc18fa5eb9a7_10509325', 'step_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/_partials/steps/checkout-step.tpl');
}
/* {block 'step_content'} */
class Block_10145449775ddc18fa5eb9a7_10509325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step_content' => 
  array (
    0 => 'Block_10145449775ddc18fa5eb9a7_10509325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">
    <form
      method="POST"
      action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >

      <?php if (!$_smarty_tpl->tpl_vars['use_same_address']->value) {?>
        <h2 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h2>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value && !$_smarty_tpl->tpl_vars['cart']->value['is_virtual']) {?>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The selected address will be used both as your personal address (for invoice) and as your delivery address.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

        </p>
      <?php } elseif ($_smarty_tpl->tpl_vars['use_same_address']->value && $_smarty_tpl->tpl_vars['cart']->value['is_virtual']) {?>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The selected address will be used as your personal address (for invoice).','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

        </p>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['show_delivery_address_form']->value) {?>
        <div id="delivery-address">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/_partials/address-form.tpl','ui'=>$_smarty_tpl->tpl_vars['address_form']->value,'use_same_address'=>$_smarty_tpl->tpl_vars['use_same_address']->value,'type'=>"delivery",'form_has_continue_button'=>$_smarty_tpl->tpl_vars['form_has_continue_button']->value),$_smarty_tpl ) );?>

        </div>
      <?php } elseif (count($_smarty_tpl->tpl_vars['customer']->value['addresses']) > 0) {?>
        <div id="delivery-addresses" class="address-selector js-address-selector">
          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/address-selector-block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addresses'=>$_smarty_tpl->tpl_vars['customer']->value['addresses'],'name'=>"id_address_delivery",'selected'=>$_smarty_tpl->tpl_vars['id_address_delivery']->value,'type'=>"delivery",'interactive'=>!$_smarty_tpl->tpl_vars['show_delivery_address_form']->value && !$_smarty_tpl->tpl_vars['show_invoice_address_form']->value), 0, false);
?>
        </div>

        <p class="add-address">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_address_delivery_url']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE145;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'add new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
        </p>

        <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value && !$_smarty_tpl->tpl_vars['cart']->value['is_virtual']) {?>
          <p>
            <a data-link-action="different-invoice-address" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['use_different_address_url']->value, ENT_QUOTES, 'UTF-8');?>
">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Billing address differs from shipping address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

            </a>
          </p>
        <?php }?>

      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['use_same_address']->value) {?>

        <h2 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Invoice Address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h2>

        <?php if ($_smarty_tpl->tpl_vars['show_invoice_address_form']->value) {?>
          <div id="invoice-address">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/_partials/address-form.tpl','ui'=>$_smarty_tpl->tpl_vars['address_form']->value,'use_same_address'=>$_smarty_tpl->tpl_vars['use_same_address']->value,'type'=>"invoice",'form_has_continue_button'=>$_smarty_tpl->tpl_vars['form_has_continue_button']->value),$_smarty_tpl ) );?>

          </div>
        <?php } else { ?>
          <div id="invoice-addresses" class="address-selector js-address-selector">
            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/address-selector-block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addresses'=>$_smarty_tpl->tpl_vars['customer']->value['addresses'],'name'=>"id_address_invoice",'selected'=>$_smarty_tpl->tpl_vars['id_address_invoice']->value,'type'=>"invoice",'interactive'=>!$_smarty_tpl->tpl_vars['show_delivery_address_form']->value && !$_smarty_tpl->tpl_vars['show_invoice_address_form']->value), 0, true);
?>
          </div>

          <p class="add-address">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_address_invoice_url']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE145;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'add new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
          </p>
        <?php }?>

      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
        <div class="clearfix">
          <button type="submit" class="btn btn-primary continue float-xs-right" name="confirm-addresses" value="1">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>

    </form>
  </div>
<?php
}
}
/* {/block 'step_content'} */
}
