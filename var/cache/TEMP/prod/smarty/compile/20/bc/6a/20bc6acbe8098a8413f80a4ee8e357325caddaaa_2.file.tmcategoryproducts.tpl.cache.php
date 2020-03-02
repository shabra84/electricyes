<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:21
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmcategoryproducts/views/templates/hook/tmcategoryproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0869086c52_73514560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20bc6acbe8098a8413f80a4ee8e357325caddaaa' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmcategoryproducts/views/templates/hook/tmcategoryproducts.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5ddc0869086c52_73514560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19901460175ddc0869079a63_36421383';
?>

<?php if (isset($_smarty_tpl->tpl_vars['blocks']->value) && $_smarty_tpl->tpl_vars['blocks']->value) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, NULL, 'block', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']++;
?>
    <?php $_smarty_tpl->_assignInScope('block_identificator', "_".((string)$_smarty_tpl->tpl_vars['block']->value['id']));?>
    <section id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook_class']->value, ENT_QUOTES, 'UTF-8');?>
-block-category-<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
" class="featured-products clearfix category-block category-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook_class']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_block']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
      <h1 class="h5 products-section-title text-uppercase">
        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['block']->value['id']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
      </h1>
      <?php if (isset($_smarty_tpl->tpl_vars['block']->value['products']) && $_smarty_tpl->tpl_vars['block']->value['products']) {?>
        <div class="products">
          <?php $_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['block']->value['products']);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php } else { ?>
        <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products in this category.','mod'=>'tmcategoryproducts'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    </section>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
