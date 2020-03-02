<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:56:40
  from '/home/nuevaelectricyes/public_html/modules/tmproductcustomtab/views/templates/hook/tmproductcustomtab_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc15d829e643_05586982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '187da1969ec90362cd31eda79a329f4364625d8c' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmproductcustomtab/views/templates/hook/tmproductcustomtab_nav.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc15d829e643_05586982 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['items']->value) && $_smarty_tpl->tpl_vars['items']->value) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, NULL, 'item', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['name']) && $_smarty_tpl->tpl_vars['item']->value['name']) {?>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tab-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['id_tab'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
