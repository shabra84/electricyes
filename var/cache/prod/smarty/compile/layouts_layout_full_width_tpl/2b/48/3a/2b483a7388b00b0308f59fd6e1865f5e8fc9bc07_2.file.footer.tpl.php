<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:22:08
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0dc055c973_33448295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b483a7388b00b0308f59fd6e1865f5e8fc9bc07' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/_partials/footer.tpl',
      1 => 1540833869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0dc055c973_33448295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-before-container">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4760105195ddc0dc055a7f3_30483250', 'hook_footer_before');
?>


</div>

<div id="footer-bottom" class="footer-container">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-lg-9 footer-L">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8218494005ddc0dc055b257_40555262', 'hook_footer');
?>


      </div>

      <div class="col-xs-12 col-lg-3 footer-R">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43836175ddc0dc055bbb9_39873443', 'hook_footer_after');
?>


      </div>

    </div>

  </div>

  <div class="copyright-block">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14662956125ddc0dc055c4e6_54448085', 'copyright_link');
?>


  </div>

</div>

<?php }
/* {block 'hook_footer_before'} */
class Block_4760105195ddc0dc055a7f3_30483250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_4760105195ddc0dc055a7f3_30483250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>


  <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_8218494005ddc0dc055b257_40555262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_8218494005ddc0dc055b257_40555262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>


        <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_43836175ddc0dc055bbb9_39873443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_43836175ddc0dc055bbb9_39873443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>


        <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_14662956125ddc0dc055c4e6_54448085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_14662956125ddc0dc055c4e6_54448085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <div class="container">

        Copyright 2018 | ELECTICYES S.L | Todos los derechos reservados | Diseñada por <a href="https://www.linkedin.com/company/kreativeimagen/">KreativeImagen</a>

      </div>

    <?php
}
}
/* {/block 'copyright_link'} */
}
