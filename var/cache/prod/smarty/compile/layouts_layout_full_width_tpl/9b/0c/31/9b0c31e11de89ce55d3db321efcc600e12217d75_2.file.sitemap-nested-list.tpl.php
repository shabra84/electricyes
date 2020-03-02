<?php
/* Smarty version 3.1.32, created on 2019-11-27 23:51:53
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/cms/_partials/sitemap-nested-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddefe096b9b04_78527271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b0c31e11de89ce55d3db321efcc600e12217d75' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/cms/_partials/sitemap-nested-list.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cms/_partials/sitemap-nested-list.tpl' => 2,
  ),
),false)) {
function content_5ddefe096b9b04_78527271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3215631975ddefe096b2b82_31071181', 'sitemap_item');
?>

<?php }
/* {block 'sitemap_item'} */
class Block_3215631975ddefe096b2b82_31071181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sitemap_item' => 
  array (
    0 => 'Block_3215631975ddefe096b2b82_31071181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['is_nested']->value)) {?><span class="custom-toggle collapsed" data-toggle="collapse" data-target="#_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_col']->value, ENT_QUOTES, 'UTF-8');?>
" aria-expanded="false"><i class="material-icons el-1">&#xE313;</i><i class="material-icons el-2">&#xE316;</i></span><?php }?>
<ul <?php if (isset($_smarty_tpl->tpl_vars['is_nested']->value)) {?> id="_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_col']->value, ENT_QUOTES, 'UTF-8');?>
" class="nested collapse"<?php } else { ?> class="tree"<?php }?>>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
      <li>
        <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['children']) && count($_smarty_tpl->tpl_vars['link']->value['children']) > 0) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['link']->value['children'],'is_nested'=>true,'id_col'=>$_smarty_tpl->tpl_vars['link']->value['id']), 0, true);
?>
        <?php }?>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}
}
/* {/block 'sitemap_item'} */
}
