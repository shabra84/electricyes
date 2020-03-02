<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:00:25
  from '/home/nuevaelectricyes/public_html/modules/tmmegamenu/views/templates/hook/displaytop/tmmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc08a9559278_71078278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '329f65a52396575eca4fba89c5ac5f6f6855f99a' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmmegamenu/views/templates/hook/displaytop/tmmegamenu.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc08a9559278_71078278 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['menu']->value) && $_smarty_tpl->tpl_vars['menu']->value) {?>
  <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8');?>
_menu top-level tmmegamenu_item default-menu top-global">
    <div class="menu-title tmmegamenu_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','mod'=>'tmmegamenu'),$_smarty_tpl ) );?>
</div>
    <ul class="menu clearfix top-level-menu tmmegamenu_item">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'item', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['specific_class'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['is_simple']) {?> simple<?php }?> top-level-menu-li tmmegamenu_item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['unique_code'], ENT_QUOTES, 'UTF-8');?>
">
          <?php if ($_smarty_tpl->tpl_vars['item']->value['url']) {?>
            <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['unique_code'], ENT_QUOTES, 'UTF-8');?>
 top-level-menu-li-a tmmegamenu_item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <?php } else { ?>
            <span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['unique_code'], ENT_QUOTES, 'UTF-8');?>
 top-level-menu-li-span tmmegamenu_item">
          <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['title']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8');
}?>
              <?php if ($_smarty_tpl->tpl_vars['item']->value['badge']) {?>
                <span class="menu_badge <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['unique_code'], ENT_QUOTES, 'UTF-8');?>
 top-level-badge tmmegamenu_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['badge'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['item']->value['url']) {?>
            </a>
          <?php } else { ?>
            </span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['item']->value['is_simple']) {?>
            <ul class="is-simplemenu tmmegamenu_item first-level-menu <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['unique_code'], ENT_QUOTES, 'UTF-8');?>
">
              <?php echo $_smarty_tpl->tpl_vars['item']->value['submenu'];?>

            </ul>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['item']->value['is_mega']) {?>
            <div class="is-megamenu tmmegamenu_item first-level-menu <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['unique_code'], ENT_QUOTES, 'UTF-8');?>
">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['submenu'], 'row', false, 'id_row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_row']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                <div id="megamenu-row-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_row']->value, ENT_QUOTES, 'UTF-8');?>
" class="megamenu-row row megamenu-row-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_row']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <?php if (isset($_smarty_tpl->tpl_vars['row']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'col');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
?>
                      <div id="column-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_row']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value['col'], ENT_QUOTES, 'UTF-8');?>
" class="megamenu-col megamenu-col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_row']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value['col'], ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value['class'], ENT_QUOTES, 'UTF-8');?>
">
                        <ul class="content">
                          <?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>

                        </ul>
                      </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <?php }?>
                </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
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
}
