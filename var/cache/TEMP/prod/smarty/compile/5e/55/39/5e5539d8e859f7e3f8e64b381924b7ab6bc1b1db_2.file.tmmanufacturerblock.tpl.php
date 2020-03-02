<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:00:25
  from '/home/nuevaelectricyes/public_html/modules/tmmanufacturerblock/views/templates/hook/tmmanufacturerblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc08a95ea382_49938434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e5539d8e859f7e3f8e64b381924b7ab6bc1b1db' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmmanufacturerblock/views/templates/hook/tmmanufacturerblock.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc08a95ea382_49938434 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
  <div id="tm_manufacturers_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
 clearfix tm_manufacturers_block default">
    <ul class="manufacturers_items<?php if (!$_smarty_tpl->tpl_vars['display_caroucel']->value) {?> row<?php } else { ?> clearfix<?php }?>">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer', false, NULL, 'manufacturers', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_manufacturers']->value['iteration']++;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_manufacturers']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_manufacturers']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['nb_display']->value) {?>
          <li class="manufacturer_item<?php if (!$_smarty_tpl->tpl_vars['display_caroucel']->value) {?> col-xs-6 col-sm-3<?php } else { ?> caroucel_item<?php }?>">
            <?php if (isset($_smarty_tpl->tpl_vars['display_name']->value) && $_smarty_tpl->tpl_vars['display_name']->value) {?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'tmmanufacturerblock'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['display_image']->value) && $_smarty_tpl->tpl_vars['display_image']->value) {?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'tmmanufacturerblock'),$_smarty_tpl ) );?>
">
                <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_manu_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_type']->value, ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
              </a>
            <?php }?>
          </li>
        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }
}
}
