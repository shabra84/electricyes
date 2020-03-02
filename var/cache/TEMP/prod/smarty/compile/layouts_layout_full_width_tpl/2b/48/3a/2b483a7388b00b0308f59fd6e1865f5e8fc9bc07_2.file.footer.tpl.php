<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:21
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc086911e0a3_78368295',
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
function content_5ddc086911e0a3_78368295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-before-container">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1954061645ddc086911bfd7_25490991', 'hook_footer_before');
?>


</div>

<div id="footer-bottom" class="footer-container">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-lg-9 footer-L">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15566498135ddc086911ca41_91703444', 'hook_footer');
?>


      </div>

      <div class="col-xs-12 col-lg-3 footer-R">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19672503125ddc086911d351_05589075', 'hook_footer_after');
?>


      </div>

    </div>

  </div>

  <div class="copyright-block">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9272412105ddc086911dc38_45350050', 'copyright_link');
?>


  </div>

</div>

<?php }
/* {block 'hook_footer_before'} */
class Block_1954061645ddc086911bfd7_25490991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_1954061645ddc086911bfd7_25490991',
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
class Block_15566498135ddc086911ca41_91703444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_15566498135ddc086911ca41_91703444',
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
class Block_19672503125ddc086911d351_05589075 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_19672503125ddc086911d351_05589075',
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
class Block_9272412105ddc086911dc38_45350050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_9272412105ddc086911dc38_45350050',
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
