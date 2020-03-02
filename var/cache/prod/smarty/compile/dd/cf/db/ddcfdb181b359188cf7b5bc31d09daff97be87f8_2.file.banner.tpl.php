<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:21:57
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmmosaicproducts/views/templates/hook/layouts/_partials/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0db5e6adf1_44068940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddcfdb181b359188cf7b5bc31d09daff97be87f8' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmmosaicproducts/views/templates/hook/layouts/_partials/banner.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0db5e6adf1_44068940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('banner', $_smarty_tpl->tpl_vars['data']->value);?>
<div class="tmmp-frontend-banner tmmp-frontend-banner-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->id, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['banner']->value->specific_class) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->specific_class, ENT_QUOTES, 'UTF-8');
}?>">
  <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->title, ENT_QUOTES, 'UTF-8');?>
</h3>
  <?php if ($_smarty_tpl->tpl_vars['banner']->value->url) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->url, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->title, ENT_QUOTES, 'UTF-8');?>
" class="tilter tilter--2">
  <?php }?>
    <div class="bannerBox">
      <?php if ($_smarty_tpl->tpl_vars['banner']->value->image_path) {?>
        <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tmmp_image_path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->image_path, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->title, ENT_QUOTES, 'UTF-8');?>
" />
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['banner']->value->description) {?>
        <div class="tmmp-banner-description tilter__figure">
          <?php echo $_smarty_tpl->tpl_vars['banner']->value->description;?>

        </div>
      <?php }?>
    </div>
  <?php if ($_smarty_tpl->tpl_vars['banner']->value->url) {?>
    </a>
  <?php }?>
</div><?php }
}
