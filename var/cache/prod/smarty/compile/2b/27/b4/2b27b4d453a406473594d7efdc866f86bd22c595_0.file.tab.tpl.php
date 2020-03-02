<?php
/* Smarty version 3.1.32, created on 2019-11-25 23:55:03
  from '/home/nuevaelectricyes/public_html/modules/tmproductcustomtab/views/templates/admin/tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc5bc756ffb0_22624028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b27b4d453a406473594d7efdc866f86bd22c595' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmproductcustomtab/views/templates/admin/tab.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc5bc756ffb0_22624028 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-8">
    <fieldset class="form-group">
      <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab Heading','mod'=>'tmproductcustomtab'),$_smarty_tpl ) );?>
</label>
      <div class="translations tabbable">
        <div class="translationsFields tab-content ">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
            <div class="translationsFields-form_step1_name_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['default_language']->value['id_lang'] == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?> tab-pane translation-label-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>
">
              <input id="id<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" type="text" class="form-control" name="name_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" value="" />
              <input type="hidden" class="class<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" />
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </fieldset>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <fieldset class="form-group">
      <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab Description','mod'=>'tmproductcustomtab'),$_smarty_tpl ) );?>
</label>
      <div class="translations tabbable tab-content">
        <div class="translationsFields tab-content bordered">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
            <div class="translationsFields-form_step1_description_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['default_language']->value['id_lang'] == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?> tab-pane translation-label-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>
">
              <textarea name="description_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" class="autoload_rte form-control"></textarea>
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </fieldset>
  </div>
</div>

<a class="add_item btn btn-primary save uppercase">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Item','mod'=>'tmproductcustomtab'),$_smarty_tpl ) );?>

</a>

<?php echo '<script'; ?>
 type="text/javascript">
  shopCount = []
<?php echo '</script'; ?>
>

<?php if (isset($_smarty_tpl->tpl_vars['tab']->value) && $_smarty_tpl->tpl_vars['tab']->value) {?>
  <h2 class="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab List','mod'=>'tmproductcustomtab'),$_smarty_tpl ) );?>
</h2>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value, 'tabs', false, 'index', 'tab', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['tabs']->value) {
?>
    <?php echo '<script'; ?>
 type="text/javascript">shopCount.push(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
)<?php echo '</script'; ?>
>
    <div class="translations tabbable">
      <div id="tab-list-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
" class="translationsFields tab-content tab-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 't', false, NULL, 'new_tab', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
          <div id="tab_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value['id_tab'],'html','UTF-8' ));?>
" class="tab-item  <?php if ($_smarty_tpl->tpl_vars['default_language']->value['id_lang'] == $_smarty_tpl->tpl_vars['t']->value['id_lang']) {?>active<?php }?> tab-pane translation-label-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value['iso_code'],'htmlall','UTF-8' ));?>
">
            <div class="row">
              <?php if ($_smarty_tpl->tpl_vars['t']->value['selected_products'] != $_smarty_tpl->tpl_vars['id_product']->value) {?>
                <div class="alert alert-warning">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After editing of the tab it will change for the entire product category','mod'=>'tmproductcustomtab'),$_smarty_tpl ) );?>

                </div>
              <?php }?>
              <div class="col-lg-8">
                <span style="display: none" class="sort-order"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value['sort_order'],'html','UTF-8' ));?>
</span>
                <div class="form-group">
                  <input type="text" name="tab_name" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['t']->value['tab_name']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value['tab_name'],'html','UTF-8' ));
}?>"  autocomplete="off" />
                </div>
                <div class="form-group tab-content bordered">
                  <textarea class="autoload_rte form-control" name="tab_description" autocomplete="off"><?php if ($_smarty_tpl->tpl_vars['t']->value['tab_description']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value['tab_description'],'html','UTF-8' ));
}?></textarea>
                </div>
              </div>
              <div class="col-lg-2 controls">
                <a class="update_item btn btn-primary save uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update tab','mod'=>'tmproductcustomtab'),$_smarty_tpl ) );?>
</a>
                <a class="remove_item btn btn-primary save uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove tab','mod'=>'tmproductcustomtab'),$_smarty_tpl ) );?>
</a>
              </div>
              <input type="hidden" name="id_lang" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value['id_lang'],'html','UTF-8' ));?>
" />
              <input type="hidden" name="id_tab" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value['id_tab'],'html','UTF-8' ));?>
" />
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php echo '<script'; ?>
 type="text/javascript">
  theme_url_custom_tab = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme_url']->value,"javascript","UTF-8" ));?>
';
<?php echo '</script'; ?>
><?php }
}
