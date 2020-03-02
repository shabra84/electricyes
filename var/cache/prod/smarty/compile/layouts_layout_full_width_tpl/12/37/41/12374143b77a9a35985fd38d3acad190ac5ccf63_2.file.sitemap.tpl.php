<?php
/* Smarty version 3.1.32, created on 2019-11-27 23:51:53
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/cms/sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddefe0967f4c6_68786746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12374143b77a9a35985fd38d3acad190ac5ccf63' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/cms/sitemap.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cms/_partials/sitemap-nested-list.tpl' => 4,
  ),
),false)) {
function content_5ddefe0967f4c6_68786746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12289887695ddefe0967a1d5_94903196', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12031288115ddefe0967b9e4_66816212', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_12289887695ddefe0967a1d5_94903196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_12289887695ddefe0967a1d5_94903196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <span class="sitemap-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_12031288115ddefe0967b9e4_66816212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12031288115ddefe0967b9e4_66816212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container-fluid">

    <div id="sitemap-tree" class="row sitemap col-xs-12">
        <div class="col-md-12">
          <h1 class="custom-toggle collapsed" data-toggle="collapse" data-target="#col_offers" aria-expanded="false"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['our_offers']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
          <div class="collapse" id="col_offers"><?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['links']->value['offers']), 0, false);
?></div>
        </div>
        <div class="col-md-12">
          <h1 class="custom-toggle collapsed" data-toggle="collapse" data-target="#col_categories" aria-expanded="false"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
          <div class="collapse" id="col_categories"><?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['links']->value['categories']), 0, true);
?></div>
        </div>
        <div class="col-md-12">
          <h1 class="custom-toggle collapsed" data-toggle="collapse" data-target="#col_user_account" aria-expanded="false"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['your_account']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
          <div class="collapse" id="col_user_account"><?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['links']->value['user_account']), 0, true);
?></div>
        </div>
        <div class="col-md-12">
          <h1 class="custom-toggle collapsed" data-toggle="collapse" data-target="#col_pages" aria-expanded="false"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pages']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
          <div class="collapse" id="col_pages"><?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['links']->value['pages']), 0, true);
?></div>
        </div>
    </div>
  </div>
<?php
}
}
/* {/block 'page_content_container'} */
}
