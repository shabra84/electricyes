<?php
/* Smarty version 3.1.32, created on 2019-11-25 19:23:10
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc1c0e794fd8_95603236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f270b387091d0749bf824b278de6bdca75b556' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/page.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc1c0e794fd8_95603236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9777581375ddc1c0e791c38_07697746', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_17440021285ddc1c0e792529_52863143 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_6598160465ddc1c0e792006_79750621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17440021285ddc1c0e792529_52863143', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1081251585ddc1c0e7935f2_69068578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18042487215ddc1c0e793b65_96308278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18867786495ddc1c0e793282_00350588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1081251585ddc1c0e7935f2_69068578', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18042487215ddc1c0e793b65_96308278', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4087822635ddc1c0e7945e0_01034926 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15958123725ddc1c0e7942b8_07270344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4087822635ddc1c0e7945e0_01034926', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9777581375ddc1c0e791c38_07697746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9777581375ddc1c0e791c38_07697746',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6598160465ddc1c0e792006_79750621',
  ),
  'page_title' => 
  array (
    0 => 'Block_17440021285ddc1c0e792529_52863143',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18867786495ddc1c0e793282_00350588',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1081251585ddc1c0e7935f2_69068578',
  ),
  'page_content' => 
  array (
    0 => 'Block_18042487215ddc1c0e793b65_96308278',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15958123725ddc1c0e7942b8_07270344',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4087822635ddc1c0e7945e0_01034926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6598160465ddc1c0e792006_79750621', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18867786495ddc1c0e793282_00350588', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15958123725ddc1c0e7942b8_07270344', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
