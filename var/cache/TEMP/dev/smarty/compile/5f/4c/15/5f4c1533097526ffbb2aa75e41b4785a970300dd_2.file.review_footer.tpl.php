<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:55
  from '/home/nuevaelectricyes/public_html/modules/onepagecheckoutps/views/templates/front/review_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d913333652813_57387593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f4c1533097526ffbb2aa75e41b4785a970300dd' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/onepagecheckoutps/views/templates/front/review_footer.tpl',
      1 => 1540768245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./custom_html/review.tpl' => 1,
  ),
),false)) {
function content_5d913333652813_57387593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="row clear clearfix"></div>

<div id="div_leave_message">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it below.','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
</p>
    <textarea name="message" id="message" class="form-control" rows="2"><?php if (isset($_smarty_tpl->tpl_vars['oldMessage']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['oldMessage']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></textarea>
</div>


<?php if (count($_smarty_tpl->tpl_vars['conditions_to_approve']->value) && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_ENABLE_TERMS_CONDITIONS']) {?>
    <div id="conditions-to-approve">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conditions_to_approve']->value, 'condition', false, 'condition_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['condition_name']->value => $_smarty_tpl->tpl_vars['condition']->value) {
?>
            <li>
                <label class="js-terms" for="conditions_to_approve[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_name']->value, ENT_QUOTES, 'UTF-8');?>
]">
                    <input  id    = "conditions_to_approve[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_name']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            name  = "conditions_to_approve[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_name']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            required
                            type  = "checkbox"
                            value = "1"
                            class = "ps-shown-by-js"
                    >
                    <?php echo $_smarty_tpl->tpl_vars['condition']->value;?>

                </label>
            </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }?>

<span id="container_float_review_point"></span>

<div id="container_float_review">
    <div id="buttons_footer_review" class="row">
        <div class="col-xs-12 col-12">
        <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_LINK_CONTINUE_SHOPPING']) {?>
            <button type="button" id="btn_continue_shopping" class="btn btn-link btn-sm pull-left"
                    <?php if (!empty($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_LINK_CONTINUE_SHOPPING'])) {?>data-link="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_LINK_CONTINUE_SHOPPING'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <i class="fa-pts fa-pts-chevron-left fa-pts-1x"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

            </button>
        <?php }?>
            <button type="button" id="btn_place_order" class="btn btn-primary btn-lg pull-right" >
                <i class="fa-pts fa-pts-shopping-cart fa-pts-1x"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

            </button>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_ENABLE_HOOK_SHOPPING_CART'] && !$_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_COMPATIBILITY_REVIEW']) {?>
    <div id="HOOK_SHOPPING_CART" class="row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6866357555d913333650bb8_68368602', 'hook_shopping_cart');
?>

    </div>
    <div id="hook_shopping_cart_footer">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

    </div>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1458546415d913333651ab6_88394859', 'display_reassurance');
?>


<div class="row">
    <?php $_smarty_tpl->_subTemplateRender('file:./custom_html/review.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
/* {block 'hook_shopping_cart'} */
class Block_6866357555d913333650bb8_68368602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_shopping_cart' => 
  array (
    0 => 'Block_6866357555d913333650bb8_68368602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'display_reassurance'} */
class Block_1458546415d913333651ab6_88394859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_reassurance' => 
  array (
    0 => 'Block_1458546415d913333651ab6_88394859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'display_reassurance'} */
}
