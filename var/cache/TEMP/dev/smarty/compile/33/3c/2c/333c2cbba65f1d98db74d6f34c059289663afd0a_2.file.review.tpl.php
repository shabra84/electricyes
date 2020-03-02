<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:55
  from '/home/nuevaelectricyes/public_html/modules/onepagecheckoutps/views/templates/front/review.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9133335d5861_72636995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333c2cbba65f1d98db74d6f34c059289663afd0a' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/onepagecheckoutps/views/templates/front/review.tpl',
      1 => 1540768245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./review_product_line_awp.tpl' => 2,
    'file:./review_product_line.tpl' => 2,
  ),
),false)) {
function content_5d9133335d5861_72636995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6748843965d9133335b2a05_43749887', 'step_review');
}
/* {block 'step_review'} */
class Block_6748843965d9133335b2a05_43749887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step_review' => 
  array (
    0 => 'Block_6748843965d9133335b2a05_43749887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['minimal_purchase']->value)) {?>
        <div class="alert alert-warning">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['minimal_purchase']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_REMAINING_FREE_SHIPPING']) {?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['amount'] > 0 && !isset($_smarty_tpl->tpl_vars['virtualCart']->value) && $_smarty_tpl->tpl_vars['free_ship']->value) {?>
            <div id="remaining_amount_free_shipping" class="alert alert-info text-center">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remaining amount to be added to your cart in order to obtain free shipping','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
:
                <span id="free_shipping"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['free_ship']->value, ENT_QUOTES, 'UTF-8');?>
</b></span>
            </div>
        <?php }?>
    <?php }?>

    <div id="header-order-detail-content" class="row hidden-md-down">
        <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_UNIT_PRICE']) {?>4<?php } else { ?>6<?php }?> offset-xs-1 offset-1">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_UNIT_PRICE']) {?>
            <div class="col-md-3 text-md-center">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

            </div>
        <?php }?>
        <div class="col-md-2 text-md-center">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

        </div>
        <div class="col-md-2 text-md-right">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

        </div>
    </div>
    <div id="order-detail-content" class="cart-detailed-totals">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sortby' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['products'],'name' )), 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_0_saved = $_smarty_tpl->tpl_vars['product'];
?>
            <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
            <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
            <?php $_smarty_tpl->_assignInScope('quantityDisplayed', 0);?>
            <?php $_smarty_tpl->_assignInScope('odd', $_smarty_tpl->tpl_vars['product']->iteration%2);?>
            <?php $_smarty_tpl->_assignInScope('ignoreProductLast', isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]));?>

            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['productmega'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['productmega'], 'mega', false, NULL, 'productMegas', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mega']->value) {
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['attributewizardpro']->value)) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:./review_product_line_awp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CONFIGS'=>$_smarty_tpl->tpl_vars['CONFIGS']->value,'productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first,'mega'=>$_smarty_tpl->tpl_vars['mega']->value), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("file:./review_product_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CONFIGS'=>$_smarty_tpl->tpl_vars['CONFIGS']->value,'productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first,'mega'=>$_smarty_tpl->tpl_vars['mega']->value), 0, true);
?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php if (isset($_smarty_tpl->tpl_vars['attributewizardpro']->value)) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./review_product_line_awp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CONFIGS'=>$_smarty_tpl->tpl_vars['CONFIGS']->value,'productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first), 0, true);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./review_product_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CONFIGS'=>$_smarty_tpl->tpl_vars['CONFIGS']->value,'productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first), 0, true);
?>
                <?php }?>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="order_total_items">
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
?>
                    <div class="row middle item_total cart_discount" id="cart_discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['id_cart_rule'], ENT_QUOTES, 'UTF-8');?>
">
                        <div class="col-xs-8 col-8 col-md-10 text-md-right">
                            <span class="cart_discount_name text-md-right">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
:
                            </span>
                        </div>
                        <div class="col-xs-4 col-4 col-md-2 cart_discount_price">
                            <span class="price-discount price">
                                <i class="fa-pts fa-pts-trash-o cart_quantity_delete pull-left" data-id-cart-rule="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['id_cart_rule'], ENT_QUOTES, 'UTF-8');?>
"></i>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>

                            </span>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_TOTAL_PRODUCT'] && $_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']) {?>
                <div class="row middle item_total cart_total_price cart_total_product">
                    <div class="col-xs-8 col-8 col-md-10">
                        <span class="text-md-right">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['label'], ENT_QUOTES, 'UTF-8');?>
:
                        </span>
                    </div>
                    <div class="col-xs-4 col-4 col-md-2">
                        <span class="price" id="total_product">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>

                        </span>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_TOTAL_DISCOUNT'] && $_smarty_tpl->tpl_vars['cart']->value['subtotals']['discounts']) {?>
                <div class="row middle item_total cart_total_voucher">
                    <div class="col-xs-8 col-8 col-md-10">
                        <span class="text-md-right">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['discounts']['label'], ENT_QUOTES, 'UTF-8');?>
:
                        </span>
                    </div>
                    <div class="col-xs-4 col-4 col-md-2">
                        <span class="price-discount price" id="total_discount">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['discounts']['value'], ENT_QUOTES, 'UTF-8');?>

                        </span>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_TOTAL_SHIPPING'] && $_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']) {?>
                <div class="row middle item_total cart_total_delivery">
                    <div class="col-xs-8 col-8 col-md-10">
                        <span class="text-md-right">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['label'], ENT_QUOTES, 'UTF-8');?>
:
                        </span>
                    </div>
                    <div class="col-xs-4 col-4 col-md-2">
                        <span class="price" id="total_shipping">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['value'], ENT_QUOTES, 'UTF-8');?>

                        </span>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_TOTAL_WITHOUT_TAX'] && isset($_smarty_tpl->tpl_vars['cart']->value['totals']['total_excluding_tax']) && $_smarty_tpl->tpl_vars['cart']->value['totals']['total_excluding_tax']) {?>
                <div class="row middle item_total cart_total_without_tax">
                    <div class="col-xs-8 col-8 col-md-10">
                        <span class="text-md-right">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_excluding_tax']['label'], ENT_QUOTES, 'UTF-8');?>
:
                        </span>
                    </div>
                    <div class="col-xs-4 col-4 col-md-2 text-md-right">
                        <span class="price" id="total_tax">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_excluding_tax']['value'], ENT_QUOTES, 'UTF-8');?>

                        </span>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_TOTAL_TAX'] && $_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']) {?>
                <div class="row middle item_total cart_total_tax">
                    <div class="col-xs-8 col-8 col-md-10">
                        <span class="text-md-right">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
:
                        </span>
                    </div>
                    <div class="col-xs-4 col-4 col-md-2 text-md-right">
                        <span class="price" id="total_tax">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>

                        </span>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_TOTAL_WRAPPING'] && isset($_smarty_tpl->tpl_vars['cart']->value['subtotals']['gift_wrapping'])) {?>
                <div class="row middle item_total cart_total_price total_price">
                    <div class="col-xs-8 col-8 col-md-10">
                        <span class="text-md-right">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['gift_wrapping']['label'], ENT_QUOTES, 'UTF-8');?>
:
                        </span>
                    </div>
                    <div class="col-xs-4 col-4 col-md-2">
                        <span class="price" id="total_price">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['gift_wrapping']['value'], ENT_QUOTES, 'UTF-8');?>

                        </span>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_TOTAL_PRICE'] && $_smarty_tpl->tpl_vars['cart']->value['totals']['total']) {?>
                <div class="row middle item_total cart_total_price total_price">
                    <div class="col-xs-8 col-8 col-md-10">
                        <span class="text-md-right">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
:
                        </span>
                    </div>
                    <div class="col-xs-4 col-4 col-md-2">
                        <span class="price" id="total_price">
                            <?php if (isset($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value']) && $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value']) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_cart']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </span>
                    </div>
                </div>
            <?php }?>

            <div class="row middle item_total extra_fee_tax cart_total_price end-xs hidden">
                <div class="col-xs-8 col-8 col-md-10 text-right">
                    <span class="bold text-right" id="extra_fee_tax_label"></span>
                </div>
                <div class="col-xs-4 col-4 col-md-2 text-right">
                    <span class="price" id="extra_fee_tax_price"></span>
                </div>
            </div>
            <div class="row middle item_total extra_fee cart_total_price end-xs hidden">
                <div class="col-xs-8 col-8 col-md-10 text-right">
                    <span class="bold text-right" id="extra_fee_label"></span>
                </div>
                <div class="col-xs-4 col-4 col-md-2 text-right">
                    <span class="price" id="extra_fee_price"></span>
                </div>
            </div>
            <div class="row middle item_total cart_total_price total_price extra_fee end-xs hidden">
                <div class="col-xs-8 col-8 col-md-10 text-right">
                    <span class="bold text-right" id="extra_fee_total_price_label"></span>
                </div>
                <div class="col-xs-4 col-4 col-md-2 text-right">
                    <span class="price" id="extra_fee_total_price"></span>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_VOUCHER_BOX'] && $_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
                <div class="cart_total_price" id="list-voucher-allowed">
                    <div class="row">
                        <div class="col-xs-12 col-12 col-md-6">
                            <a class="collapse-button promo-code-button collapsed" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you have a promotional code?','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

                            </a>
                            <div class="promo-code collapse" id="promo-code" aria-expanded="true" style="">
                                <input type="text" class="promo-input" id="discount_name" name="discount_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo code','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
"/>
                                <button id="submitAddDiscount" class="btn btn-primary btn-sm">
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
</span>
                                </button>
                            </div>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?>
                            <div class="col-xs-12 col-12 col-md-6">
                                <div id="display_cart_vouchers">
                                    <p>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

                                    </p>
                                    <ul class="js-discount">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['discounts'], 'discount');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
?>
                                            <li class="cart-summary-line">
                                                <i class="fa-pts fa-pts-caret-right"></i>
                                                <span class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                            </li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'step_review'} */
}
