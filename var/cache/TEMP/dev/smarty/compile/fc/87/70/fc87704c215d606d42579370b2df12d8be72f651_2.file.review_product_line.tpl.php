<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:55
  from '/home/nuevaelectricyes/public_html/modules/onepagecheckoutps/views/templates/front/review_product_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d913333643403_78306199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc87704c215d606d42579370b2df12d8be72f651' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/onepagecheckoutps/views/templates/front/review_product_line.tpl',
      1 => 1540798693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d913333643403_78306199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row <?php if (isset($_smarty_tpl->tpl_vars['productLast']->value) && $_smarty_tpl->tpl_vars['productLast']->value && (!isset($_smarty_tpl->tpl_vars['ignoreProductLast']->value) || !$_smarty_tpl->tpl_vars['ignoreProductLast']->value)) {?>last_item<?php } elseif (isset($_smarty_tpl->tpl_vars['productFirst']->value) && $_smarty_tpl->tpl_vars['productFirst']->value) {?>first_item<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]) && $_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0) {?>alternate_item<?php }?> cart_item address_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
"
     id="product_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_0_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');
if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
    <div class="col-lg-1 col-md-3 col-xs-3 col-3 text-md-center image_product">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="img-fluid media-object" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
        </a>
        <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_ZOOM_IMAGE_PRODUCT']) {?>
            <div class="image_zoom">
                <img class="media-object" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        <?php }?>
    </div>
    <div class="col-md-9 col-lg-<?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_UNIT_PRICE']) {?>3<?php } else { ?>5<?php }?> col-xs-9 col-9 cart_description">
        <p class="s_title_block">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['reference'] && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_REFERENCE']) {?>
                    <span class="product_reference">
                        (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ref.','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
)
                    </span>
                <?php }?>
            </a>
        </p>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes']) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {?>
            <span class="product_attributes">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <div class="product-line-info">
                        <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
                        <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </span>
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
            <span>
                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customization','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
:</strong>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value > 0) {?>, <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </span>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['mega']->value)) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['mega']->value['extraAttrLong'])) {
echo $_smarty_tpl->tpl_vars['mega']->value['extraAttrLong'];
}?>
            <br/>
            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['measure'], ENT_QUOTES, 'UTF-8');?>
</strong>
            <?php if (isset($_smarty_tpl->tpl_vars['mega']->value['personalization']) && $_smarty_tpl->tpl_vars['mega']->value['personalization'] != '') {?>
                <br/><div class="mp-personalization"><?php echo $_smarty_tpl->tpl_vars['mega']->value['personalization'];?>
</div>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0 && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_WEIGHT']) {?>
            <br/>
            <span class="product_weight">
                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
&nbsp;:&nbsp;</strong>
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf("%.3f",$_smarty_tpl->tpl_vars['product']->value['weight']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value, ENT_QUOTES, 'UTF-8');?>

            </span>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['ps_stock_management']->value && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_AVAILABILITY']) {?>
            <div class="cart_avail">
                <span class="badge <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>badge-success product-available<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>badge-warning product-last-items<?php } else { ?>badge-danger product-unavailable<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later']) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_later'], ENT_QUOTES, 'UTF-8');?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > $_smarty_tpl->tpl_vars['product']->value['quantity_available']) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later']) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_later'], ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        <?php } else { ?>
                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now']) && $_smarty_tpl->tpl_vars['product']->value['available_now']) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_now'], ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        <?php }?>
                    <?php }?>
                </span>
                <?php if (!$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}?>
            </div>
        <?php }?>
    </div>

    <div class="hidden-sm-up row clear"></div>

    <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_UNIT_PRICE']) {?>
        <div class="col-xs-3 col-3 text-md-right hidden-sm-up">
            <label><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
:</b></label>
        </div>
        <div class="col-lg-2 col-md-9 col-xs-9 col-9 text-md-center text-xs-left text-sm-left">
            <span class="" id="product_price_7_34_0">
                <span class="price special-price"><?php if (isset($_smarty_tpl->tpl_vars['mega']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['spricewt'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');
}?></span>
                <br>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['price'] != $_smarty_tpl->tpl_vars['product']->value['regular_price']) {?>
                    <span class="old-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] == 'amount' && $_smarty_tpl->tpl_vars['product']->value['discount_amount'] != '') {?>
                    <span class="price-percent-reduction small">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount'], ENT_QUOTES, 'UTF-8');?>
)</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] == 'percentage' && $_smarty_tpl->tpl_vars['product']->value['discount_percentage'] != '') {?>
                    <span class="price-percent-reduction small">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
)</span>
                <?php }?>
            </span>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
        </div>
    <?php }?>

    <div class="hidden-sm-up row clear"></div>

    <div class="col-xs-3 col-3 text-md-right hidden-sm-up">
        <label><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
:</b></label>
    </div>
    <div class="col-lg-4 col-md-9 col-xs-9 col-9 text-md-center">
        <div class="input-group bootstrap-touchspin">
            <?php if (isset($_smarty_tpl->tpl_vars['mega']->value)) {?>
                <span class="cart-line-product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } else { ?>
                <span class="input-group">
                    <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                       -
                    </button>
                </span>
                <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                <input
                    class="cart-line-product-quantity"
                    data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['mega']->value)) {?>&id_megacart=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['id_megacart'], ENT_QUOTES, 'UTF-8');
}?>"
                    data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['mega']->value)) {?>&id_megacart=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['id_megacart'], ENT_QUOTES, 'UTF-8');
}?>"
                    data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['mega']->value)) {?>&id_megacart=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['id_megacart'], ENT_QUOTES, 'UTF-8');
}?>"
                    data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (isset($_smarty_tpl->tpl_vars['mega']->value)) {?>data-mega-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['id_megacart'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    type="text"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                    name="product-quantity-spin"
                >
                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                <span class="input-group">
                    <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                        +
                    </button>
                </span>
            <?php }?>
            
        </div>

        <a
            class                       = "remove-from-cart"
            rel                         = "nofollow"
            href                        = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['mega']->value)) {?>&id_megacart=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['id_megacart'], ENT_QUOTES, 'UTF-8');
}?>"
            data-link-action            = "delete-from-cart"
            data-id-product             = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
            data-id-product-attribute   = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
            data-id-customization       = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
        >
            <i class="fa-pts fa-pts-trash-o fa-pts-1x"></i>
        </a>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    </div>

    <div class="hidden-sm-up row clear"></div>

    <div class="col-xs-3 col-3 text-md-right hidden-sm-up">
        <label><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
:</b></label>
    </div>
    <div class="col-lg-2 col-md-9 col-xs-9 col-9 text-md-right text-xs-left text-sm-left">
        <span class="product-price pull-right"><?php if (isset($_smarty_tpl->tpl_vars['mega']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['mega']->value['stotalwt'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');
}?></span>
    </div>
</div><?php }
}
