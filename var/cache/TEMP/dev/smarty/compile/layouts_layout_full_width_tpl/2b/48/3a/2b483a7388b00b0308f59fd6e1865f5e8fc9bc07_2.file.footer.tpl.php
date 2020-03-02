<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:50
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d91332e44a9e1_89882466',
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
function content_5d91332e44a9e1_89882466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-before-container">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_328720425d91332e448725_22820821', 'hook_footer_before');
?>


</div>

<div id="footer-bottom" class="footer-container">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-lg-9 footer-L">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6737574085d91332e4491c2_97283963', 'hook_footer');
?>


      </div>

      <div class="col-xs-12 col-lg-3 footer-R">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1120120995d91332e449b64_07138857', 'hook_footer_after');
?>


      </div>

    </div>

  </div>

  <div class="copyright-block">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68315885d91332e44a541_18910619', 'copyright_link');
?>


  </div>

</div>

<?php }
/* {block 'hook_footer_before'} */
class Block_328720425d91332e448725_22820821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_328720425d91332e448725_22820821',
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
class Block_6737574085d91332e4491c2_97283963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_6737574085d91332e4491c2_97283963',
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
class Block_1120120995d91332e449b64_07138857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_1120120995d91332e449b64_07138857',
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
class Block_68315885d91332e44a541_18910619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_68315885d91332e44a541_18910619',
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
