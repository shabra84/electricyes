<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:07
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmheaderaccount/views/templates/hook/displayNav2/tmheaderaccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc085b029726_09364746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e1682c9ace918b864bfd82c2e0ba49a7b03e788' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmheaderaccount/views/templates/hook/displayNav2/tmheaderaccount.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tmheaderaccount-content.tpl' => 2,
    'file:../default/tmheaderaccount-content.tpl' => 2,
  ),
),false)) {
function content_5ddc085b029726_09364746 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tmHeaderAccountNav2" class="nav-element<?php if ($_smarty_tpl->tpl_vars['configs']->value['TMHEADERACCOUNT_DISPLAY_TYPE'] == 'dropdown') {?> dropdown<?php }?>">
  <div class="header_user_info user-info expand-more"<?php if ($_smarty_tpl->tpl_vars['configs']->value['TMHEADERACCOUNT_DISPLAY_TYPE'] == 'dropdown') {?> data-toggle="dropdown"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
      <i class="fl-outicons-smiley3"></i>
    <?php } else { ?>
      <i class="fl-outicons-user189"></i>
    <?php }?>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['configs']->value['TMHEADERACCOUNT_DISPLAY_TYPE'] == 'dropdown') {?>
    <?php if (file_exists("./tmheaderaccount-content.tpl")) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:./tmheaderaccount-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender("file:../default/tmheaderaccount-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
  <?php } else { ?>
    <?php if (file_exists("./tmheaderaccount-content.tpl")) {?>
      <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./tmheaderaccount-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('content', $_prefixVariable1);?>
    <?php } else { ?>
      <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:../default/tmheaderaccount-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('content', $_prefixVariable2);?>
    <?php }?>
  <?php }?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo '<script'; ?>
>
    TMHEADERACCOUNT_CONTENT = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content']->value,'javascript' ));?>
";
  <?php echo '</script'; ?>
>
<?php }
}
}
