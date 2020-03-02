<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:22:08
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0dc04ed2b6_56784988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '298b83891011bbafdca394a7ee156aebb6295366' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/layouts/layout-both-columns.tpl',
      1 => 1540761771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5ddc0dc04ed2b6_56784988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>

<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">



  <head>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19458423175ddc0dc04e2248_76521378', 'head');
?>


  </head>



  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_342840485ddc0dc04e38b9_50464497', 'hook_after_body_opening_tag');
?>




    <main>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16821419885ddc0dc04e4436_52123652', 'product_activation');
?>




      <header id="header">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11292004765ddc0dc04e4e65_11740077', 'header');
?>


      </header>



      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10199036965ddc0dc04e58f9_91978762', 'notifications');
?>




      <section id="wrapper">

        <div class="container">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1548319115ddc0dc04e62b7_62078414', 'breadcrumb');
?>


          <div class="row">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19929188975ddc0dc04e6e57_02964471', "left_column");
?>




            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19537849615ddc0dc04e8817_53925785', "content_wrapper");
?>




            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6859840365ddc0dc04e96f6_36947364', "right_column");
?>


          </div>

        </div>

      </section>



      <footer id="footer">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15308424675ddc0dc04eaff3_29037686', "footer");
?>


      </footer>



    </main>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1498969825ddc0dc04ebb11_03027309', 'javascript_bottom');
?>




    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18010329255ddc0dc04ec959_36513549', 'hook_before_body_closing_tag');
?>


  </body>



</html>

<?php }
/* {block 'head'} */
class Block_19458423175ddc0dc04e2248_76521378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19458423175ddc0dc04e2248_76521378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_342840485ddc0dc04e38b9_50464497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_342840485ddc0dc04e38b9_50464497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>


    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_16821419885ddc0dc04e4436_52123652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_16821419885ddc0dc04e4436_52123652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_11292004765ddc0dc04e4e65_11740077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_11292004765ddc0dc04e4e65_11740077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_10199036965ddc0dc04e58f9_91978762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_10199036965ddc0dc04e58f9_91978762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_1548319115ddc0dc04e62b7_62078414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1548319115ddc0dc04e62b7_62078414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_19929188975ddc0dc04e6e57_02964471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_19929188975ddc0dc04e6e57_02964471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


              <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">

                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>


                <?php } else { ?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>


                <?php }?>

              </div>

            <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_9030863115ddc0dc04e8ce7_42679760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                  <p>Hello world! This is HTML5 Boilerplate.</p>

                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_19537849615ddc0dc04e8817_53925785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_19537849615ddc0dc04e8817_53925785',
  ),
  'content' => 
  array (
    0 => 'Block_9030863115ddc0dc04e8ce7_42679760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


              <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9030863115ddc0dc04e8ce7_42679760', "content", $this->tplIndex);
?>


              </div>

            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_6859840365ddc0dc04e96f6_36947364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_6859840365ddc0dc04e96f6_36947364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


              <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">

                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>


                <?php } else { ?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>


                <?php }?>

              </div>

            <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_15308424675ddc0dc04eaff3_29037686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15308424675ddc0dc04eaff3_29037686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_1498969825ddc0dc04ebb11_03027309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_1498969825ddc0dc04ebb11_03027309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>

    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_18010329255ddc0dc04ec959_36513549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_18010329255ddc0dc04ec959_36513549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>


    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
