<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:50
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d91332e27e7a8_74200458',
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
function content_5d91332e27e7a8_74200458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>

<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">



  <head>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_763011605d91332e272886_50604459', 'head');
?>


  </head>



  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6017679935d91332e2749b1_28507455', 'hook_after_body_opening_tag');
?>




    <main>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15578628135d91332e275369_21752045', 'product_activation');
?>




      <header id="header">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14046891765d91332e275ca2_01818847', 'header');
?>


      </header>



      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104560535d91332e276592_11427794', 'notifications');
?>




      <section id="wrapper">

        <div class="container">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13737834675d91332e276e89_20521574', 'breadcrumb');
?>


          <div class="row">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5946320345d91332e2786c0_49324665', "left_column");
?>




            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13303761095d91332e27a0c8_55920318', "content_wrapper");
?>




            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10705410695d91332e27ae60_09346960', "right_column");
?>


          </div>

        </div>

      </section>



      <footer id="footer">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2853284965d91332e27c691_66983968', "footer");
?>


      </footer>



    </main>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_365069445d91332e27d270_12843501', 'javascript_bottom');
?>




    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_659639475d91332e27df85_75750545', 'hook_before_body_closing_tag');
?>


  </body>



</html>

<?php }
/* {block 'head'} */
class Block_763011605d91332e272886_50604459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_763011605d91332e272886_50604459',
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
class Block_6017679935d91332e2749b1_28507455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_6017679935d91332e2749b1_28507455',
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
class Block_15578628135d91332e275369_21752045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_15578628135d91332e275369_21752045',
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
class Block_14046891765d91332e275ca2_01818847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_14046891765d91332e275ca2_01818847',
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
class Block_104560535d91332e276592_11427794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_104560535d91332e276592_11427794',
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
class Block_13737834675d91332e276e89_20521574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_13737834675d91332e276e89_20521574',
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
class Block_5946320345d91332e2786c0_49324665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_5946320345d91332e2786c0_49324665',
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
class Block_2224195835d91332e27a576_15640015 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                  <p>Hello world! This is HTML5 Boilerplate.</p>

                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_13303761095d91332e27a0c8_55920318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_13303761095d91332e27a0c8_55920318',
  ),
  'content' => 
  array (
    0 => 'Block_2224195835d91332e27a576_15640015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


              <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2224195835d91332e27a576_15640015', "content", $this->tplIndex);
?>


              </div>

            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_10705410695d91332e27ae60_09346960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_10705410695d91332e27ae60_09346960',
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
class Block_2853284965d91332e27c691_66983968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2853284965d91332e27c691_66983968',
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
class Block_365069445d91332e27d270_12843501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_365069445d91332e27d270_12843501',
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
class Block_659639475d91332e27df85_75750545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_659639475d91332e27df85_75750545',
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
