<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:07
  from '/home/nuevaelectricyes/public_html/modules/tmmosaicproducts/views/templates/hook/layouts/tmmp_row_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc085b139ef4_05058849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac019fd820b554299e0811cf854bda9e4a9e7ade' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmmosaicproducts/views/templates/hook/layouts/tmmp_row_1.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc085b139ef4_05058849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="block-container-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_name']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="block-container-row block-container-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_name']->value, ENT_QUOTES, 'UTF-8');?>
">
  <ul class="clearfix <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_type']->value, ENT_QUOTES, 'UTF-8');?>
 row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row_content']->value, 'items', false, 'k', 'loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['items']->value) {
?>
      <li class="col-xs-12">
        <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
          <?php if (isset($_smarty_tpl->tpl_vars['item_types']->value[$_smarty_tpl->tpl_vars['k']->value])) {?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['partial_path']->value[$_smarty_tpl->tpl_vars['item_types']->value[$_smarty_tpl->tpl_vars['k']->value]], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['item_datas']->value[$_smarty_tpl->tpl_vars['k']->value]), 0, true);
?>
          <?php }?>
        <?php }?>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php }
}
