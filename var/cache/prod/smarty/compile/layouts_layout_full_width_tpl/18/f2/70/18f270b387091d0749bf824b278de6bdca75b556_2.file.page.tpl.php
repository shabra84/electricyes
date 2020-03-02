<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:22:08
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0dc04dc486_95960429',
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
function content_5ddc0dc04dc486_95960429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20380342475ddc0dc04d8f54_78064680', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12907915105ddc0dc04d9884_96421412 extends Smarty_Internal_Block
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
class Block_8383883675ddc0dc04d9353_41010642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12907915105ddc0dc04d9884_96421412', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12005371925ddc0dc04daad2_89742503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12816065995ddc0dc04db018_98918643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9243419695ddc0dc04da711_96617215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12005371925ddc0dc04daad2_89742503', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12816065995ddc0dc04db018_98918643', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6030139095ddc0dc04dbb97_50120294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4462429255ddc0dc04db807_99413105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6030139095ddc0dc04dbb97_50120294', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20380342475ddc0dc04d8f54_78064680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20380342475ddc0dc04d8f54_78064680',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8383883675ddc0dc04d9353_41010642',
  ),
  'page_title' => 
  array (
    0 => 'Block_12907915105ddc0dc04d9884_96421412',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9243419695ddc0dc04da711_96617215',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12005371925ddc0dc04daad2_89742503',
  ),
  'page_content' => 
  array (
    0 => 'Block_12816065995ddc0dc04db018_98918643',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4462429255ddc0dc04db807_99413105',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6030139095ddc0dc04dbb97_50120294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8383883675ddc0dc04d9353_41010642', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9243419695ddc0dc04da711_96617215', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4462429255ddc0dc04db807_99413105', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
