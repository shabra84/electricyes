<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:07
  from '/home/nuevaelectricyes/public_html/modules/tmmosaicproducts/views/templates/hook/tmmosaicproducts_start.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc085b125117_80941878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0cd0f9a7c7ecde80260375af2a10b6ee5993d59' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmmosaicproducts/views/templates/hook/tmmosaicproducts_start.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc085b125117_80941878 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block mosaic-block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookClass']->value, ENT_QUOTES, 'UTF-8');?>
">
  <h4 class="title_block">
    <?php if (isset($_smarty_tpl->tpl_vars['data']->value['custom_name_status']) && $_smarty_tpl->tpl_vars['data']->value['custom_name_status']) {?>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['custom_name'], ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['data']->value['id']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    <?php }?>
  </h4>
  <?php if ($_smarty_tpl->tpl_vars['data']->value['desc']) {?>
    <div class="description"><?php echo $_smarty_tpl->tpl_vars['data']->value['desc'];?>
</div>
  <?php }
}
}
