<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:21
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc086908fd61_49736048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b35140a473077ecc77d9896d22daa18cca064735' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/index.tpl',
      1 => 1543459862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc086908fd61_49736048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8425722065ddc086908dff1_94133980', 'page_content_container');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20812827625ddc086908e4d0_23617743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7791453605ddc086908eee3_27379847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>


          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_16283497955ddc086908eb46_38806883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7791453605ddc086908eee3_27379847', 'hook_home', $this->tplIndex);
?>


        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8425722065ddc086908dff1_94133980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_8425722065ddc086908dff1_94133980',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20812827625ddc086908e4d0_23617743',
  ),
  'page_content' => 
  array (
    0 => 'Block_16283497955ddc086908eb46_38806883',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7791453605ddc086908eee3_27379847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <section id="content" class="page-home">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20812827625ddc086908e4d0_23617743', 'page_content_top', $this->tplIndex);
?>




        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16283497955ddc086908eb46_38806883', 'page_content', $this->tplIndex);
?>


      </section>
      
      <!-- Added By Daniel 10/25/2018 -->
      <div class="ds_leftfixed_btn">
        <a href="content/6-circuito">
          <div>
            <h5>Sistema de diseño online</h5>
            <span>Comienza tu diseño</span>
          </div>
        </a>
      </div>

    <?php
}
}
/* {/block 'page_content_container'} */
}
