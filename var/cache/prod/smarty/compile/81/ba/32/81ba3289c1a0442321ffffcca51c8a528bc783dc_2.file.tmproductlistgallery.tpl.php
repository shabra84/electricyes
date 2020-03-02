<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:22:21
  from '/home/nuevaelectricyes/public_html/modules/tmproductlistgallery/views/templates/hook/tmproductlistgallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0dcd1d3979_39639043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81ba3289c1a0442321ffffcca51c8a528bc783dc' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmproductlistgallery/views/templates/hook/tmproductlistgallery.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0dcd1d3979_39639043 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_display']) {?>
  <?php if (count($_smarty_tpl->tpl_vars['product_images']->value) > 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
      <?php $_smarty_tpl->_assignInScope('imageId', ((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
      <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
        <?php $_smarty_tpl->_assignInScope('imageTitle', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['legend'],'html','UTF-8' )));?>
      <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('imageTitle', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )));?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_type'] == 'rollover') {?>
        <?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] != 1) {?>
          <img class="img-fluid hover-image" src="<?php if (Configuration::get('PS_SSL_ENABLED')) {?>https://<?php } else { ?>http://<?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageId']->value,'home_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
          <?php break 1;?>
        <?php }?>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_type'] == 'slideshow') {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_images']->value, 'image', false, NULL, 'image', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration']++;
?>
          <?php $_smarty_tpl->_assignInScope('imageId', ((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
          <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
            <?php $_smarty_tpl->_assignInScope('imageTitle', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['legend'],'html','UTF-8' )));?>
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('imageTitle', $_smarty_tpl->tpl_vars['product']->value['name']);?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] != 1) {?>
            <img class="img-fluid" src="<?php if (Configuration::get('PS_SSL_ENABLED')) {?>https://<?php } else { ?>http://<?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageId']->value,'home_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_slider_controls']) {?>
        <p class="slideshow-controls"><em class="prev"></em><em class="next"></em></p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_slider_pager']) {?>
        <p class="slideshow-pager">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_images']->value, 'image', false, NULL, 'image', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration']++;
?>
            <em><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</em>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </p>
      <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_type'] == 'gallery') {?>
      <div class="gallery-wrapper">
        <ul class="gallery-thumb-list">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_images']->value, 'image', false, NULL, 'image', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration']++;
?>
            <?php $_smarty_tpl->_assignInScope('imageId', ((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
            <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
              <?php $_smarty_tpl->_assignInScope('imageTitle', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['legend'],'html','UTF-8' )));?>
            <?php } else { ?>
              <?php $_smarty_tpl->_assignInScope('imageTitle', $_smarty_tpl->tpl_vars['product']->value['name']);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('imageVisible', 100/$_smarty_tpl->tpl_vars['smarty_settings']->value['st_visible']);?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration'] : null) < $_smarty_tpl->tpl_vars['smarty_settings']->value['st_nb_items']+1) {?>
              <li id="thumb-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['id_image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="gallery-image-thumb<?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 1) {?> active<?php }
if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_gall_carousel'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['smarty_settings']->value['st_visible']) {?> clone-image<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageVisible']->value, ENT_QUOTES, 'UTF-8');?>
%;<?php if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_gall_carousel'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['smarty_settings']->value['st_visible']) {?> transform: translateX(<?php ob_start();
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['iteration'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
echo htmlspecialchars($_prefixVariable7-1, ENT_QUOTES, 'UTF-8');?>
00%)<?php }?>">
                <span data-href="<?php if (Configuration::get('PS_SSL_ENABLED')) {?>https://<?php } else { ?>http://<?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageId']->value,'home_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                  <img class="img-fluid" src="<?php if (Configuration::get('PS_SSL_ENABLED')) {?>https://<?php } else { ?>http://<?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageId']->value,'home_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" itemprop="image" />
                </span>
              </li>
            <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['smarty_settings']->value['st_gall_carousel'] && count($_smarty_tpl->tpl_vars['product_images']->value) > $_smarty_tpl->tpl_vars['smarty_settings']->value['st_visible']) {?>
          <p class="gallery-controls"><span class="prev"></span><span class="next"></span></p>
        <?php }?>
      </div>
    <?php }?>
  <?php }
}
}
}
