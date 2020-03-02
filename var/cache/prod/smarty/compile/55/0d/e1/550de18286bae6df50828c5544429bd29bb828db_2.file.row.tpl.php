<?php
/* Smarty version 3.1.32, created on 2019-11-25 19:09:43
  from '/home/nuevaelectricyes/public_html/modules/tmsearch/views/templates/hook/_items/row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc18e7e21308_69640490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550de18286bae6df50828c5544429bd29bb828db' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmsearch/views/templates/hook/_items/row.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc18e7e21308_69640490 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['product']->value) && $_smarty_tpl->tpl_vars['product']->value) {?>
  <div class="tmsearch-inner-row" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['tmsearchsettings']->value['tmsearch_image']) {?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['reference'] && $_smarty_tpl->tpl_vars['tmsearchsettings']->value['tmsearch_reference']) {?><div class="reference"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']) {?>
      <div class="quantity">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'], ENT_QUOTES, 'UTF-8');?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items','mod'=>'tmsearch'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item','mod'=>'tmsearch'),$_smarty_tpl ) );
}?>
      </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['available_now']) {?><div class="availability"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_now'], ENT_QUOTES, 'UTF-8');?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['available_later']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_later'], ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['name']) {?><span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tmsearchsettings']->value['tmsearch_price']) {?>
      <div class="price<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']) {?> new-price<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['description_short'] && $_smarty_tpl->tpl_vars['tmsearchsettings']->value['tmsearch_description']) {?><div class="description-short"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'] && $_smarty_tpl->tpl_vars['tmsearchsettings']->value['tmsearch_manufacturer']) {?><div class="manufacturer-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['supplier_name'] && $_smarty_tpl->tpl_vars['tmsearchsettings']->value['display_supplier']) {?><div class="supplier-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['supplier_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
  </div>
<?php }
}
}
