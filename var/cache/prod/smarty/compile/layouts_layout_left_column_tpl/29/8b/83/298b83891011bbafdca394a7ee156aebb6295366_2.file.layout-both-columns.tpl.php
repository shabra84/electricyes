<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:21:57
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0db5c7f552_29543427',
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
function content_5ddc0db5c7f552_29543427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>

<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">



  <head>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2153331945ddc0db5c6d8b0_30603115', 'head');
?>


  </head>



  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5365287105ddc0db5c6fd60_03414290', 'hook_after_body_opening_tag');
?>




    <main>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12510724915ddc0db5c70f86_19303082', 'product_activation');
?>




      <header id="header">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_763781485ddc0db5c71fe1_30913365', 'header');
?>


      </header>



      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19887622965ddc0db5c730b1_27552525', 'notifications');
?>




      <section id="wrapper">

        <div class="container">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12146449185ddc0db5c74113_35096803', 'breadcrumb');
?>


          <div class="row">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16065270965ddc0db5c75494_50341185', "left_column");
?>




            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16513841075ddc0db5c77bc5_10634122', "content_wrapper");
?>




            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20863782645ddc0db5c79350_35492201', "right_column");
?>


          </div>

        </div>

      </section>



      <footer id="footer">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20243274405ddc0db5c7bce6_74328133', "footer");
?>


      </footer>



    </main>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7811707135ddc0db5c7ceb8_93590915', 'javascript_bottom');
?>




    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21153237965ddc0db5c7e5f3_28828919', 'hook_before_body_closing_tag');
?>


  </body>



</html>

<?php }
/* {block 'head'} */
class Block_2153331945ddc0db5c6d8b0_30603115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2153331945ddc0db5c6d8b0_30603115',
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
class Block_5365287105ddc0db5c6fd60_03414290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_5365287105ddc0db5c6fd60_03414290',
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
class Block_12510724915ddc0db5c70f86_19303082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_12510724915ddc0db5c70f86_19303082',
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
class Block_763781485ddc0db5c71fe1_30913365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_763781485ddc0db5c71fe1_30913365',
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
class Block_19887622965ddc0db5c730b1_27552525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_19887622965ddc0db5c730b1_27552525',
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
class Block_12146449185ddc0db5c74113_35096803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_12146449185ddc0db5c74113_35096803',
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
class Block_16065270965ddc0db5c75494_50341185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_16065270965ddc0db5c75494_50341185',
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
class Block_4026738725ddc0db5c783f1_32654210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                  <p>Hello world! This is HTML5 Boilerplate.</p>

                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_16513841075ddc0db5c77bc5_10634122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_16513841075ddc0db5c77bc5_10634122',
  ),
  'content' => 
  array (
    0 => 'Block_4026738725ddc0db5c783f1_32654210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


              <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4026738725ddc0db5c783f1_32654210', "content", $this->tplIndex);
?>


              </div>

            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_20863782645ddc0db5c79350_35492201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_20863782645ddc0db5c79350_35492201',
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
class Block_20243274405ddc0db5c7bce6_74328133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20243274405ddc0db5c7bce6_74328133',
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
class Block_7811707135ddc0db5c7ceb8_93590915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_7811707135ddc0db5c7ceb8_93590915',
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
class Block_21153237965ddc0db5c7e5f3_28828919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_21153237965ddc0db5c7e5f3_28828919',
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
