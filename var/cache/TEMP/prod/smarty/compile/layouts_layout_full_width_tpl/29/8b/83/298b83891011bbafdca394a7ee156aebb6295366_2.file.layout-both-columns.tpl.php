<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:21
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc08690a9119_37591206',
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
function content_5ddc08690a9119_37591206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>

<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">



  <head>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3572122025ddc086909e665_31382154', 'head');
?>


  </head>



  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20604266465ddc086909fce6_49306613', 'hook_after_body_opening_tag');
?>




    <main>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10310211845ddc08690a0818_21964608', 'product_activation');
?>




      <header id="header">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15505788295ddc08690a11e1_57697418', 'header');
?>


      </header>



      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20534909695ddc08690a1b58_95811732', 'notifications');
?>




      <section id="wrapper">

        <div class="container">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9547820815ddc08690a24d3_59606217', 'breadcrumb');
?>


          <div class="row">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20444082785ddc08690a2fe5_61866869', "left_column");
?>




            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_454546345ddc08690a4930_37789343', "content_wrapper");
?>




            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15137943055ddc08690a5745_07206117', "right_column");
?>


          </div>

        </div>

      </section>



      <footer id="footer">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21269191485ddc08690a6f33_84003047', "footer");
?>


      </footer>



    </main>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19223914035ddc08690a7a61_01756859', 'javascript_bottom');
?>




    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18868577475ddc08690a8869_94093154', 'hook_before_body_closing_tag');
?>


  </body>



</html>

<?php }
/* {block 'head'} */
class Block_3572122025ddc086909e665_31382154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3572122025ddc086909e665_31382154',
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
class Block_20604266465ddc086909fce6_49306613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_20604266465ddc086909fce6_49306613',
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
class Block_10310211845ddc08690a0818_21964608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_10310211845ddc08690a0818_21964608',
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
class Block_15505788295ddc08690a11e1_57697418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_15505788295ddc08690a11e1_57697418',
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
class Block_20534909695ddc08690a1b58_95811732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_20534909695ddc08690a1b58_95811732',
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
class Block_9547820815ddc08690a24d3_59606217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_9547820815ddc08690a24d3_59606217',
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
class Block_20444082785ddc08690a2fe5_61866869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_20444082785ddc08690a2fe5_61866869',
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
class Block_11619199475ddc08690a4e14_80891773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                  <p>Hello world! This is HTML5 Boilerplate.</p>

                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_454546345ddc08690a4930_37789343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_454546345ddc08690a4930_37789343',
  ),
  'content' => 
  array (
    0 => 'Block_11619199475ddc08690a4e14_80891773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


              <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11619199475ddc08690a4e14_80891773', "content", $this->tplIndex);
?>


              </div>

            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_15137943055ddc08690a5745_07206117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_15137943055ddc08690a5745_07206117',
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
class Block_21269191485ddc08690a6f33_84003047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21269191485ddc08690a6f33_84003047',
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
class Block_19223914035ddc08690a7a61_01756859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_19223914035ddc08690a7a61_01756859',
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
class Block_18868577475ddc08690a8869_94093154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_18868577475ddc08690a8869_94093154',
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
