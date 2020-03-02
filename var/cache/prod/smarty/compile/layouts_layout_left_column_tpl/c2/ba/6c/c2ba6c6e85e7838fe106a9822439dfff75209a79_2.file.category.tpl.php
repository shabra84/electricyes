<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:21:57
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0db5c5a6b7_61310090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2ba6c6e85e7838fe106a9822439dfff75209a79' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/catalog/listing/category.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0db5c5a6b7_61310090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4500830025ddc0db5c56c72_41357797', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_4500830025ddc0db5c56c72_41357797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_4500830025ddc0db5c56c72_41357797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-category">
    <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
      <img class="img-fluid hidden-sm-down" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
      <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'product_list_header'} */
}
