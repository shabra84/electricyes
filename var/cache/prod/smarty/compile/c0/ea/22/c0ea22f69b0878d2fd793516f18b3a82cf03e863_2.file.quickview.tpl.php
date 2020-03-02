<?php
/* Smarty version 3.1.32, created on 2020-02-05 00:37:33
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/catalog/_partials/quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3a003ddd2a97_05494900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ea22f69b0878d2fd793516f18b3a82cf03e863' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/catalog/_partials/quickview.tpl',
      1 => 1540796187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5e3a003ddd2a97_05494900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">

  <div class="modal-dialog" role="document">

   <div class="modal-content">

     <div class="modal-header">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">

         <span aria-hidden="true">&times;</span>

       </button>

     </div>

     <div class="modal-body">

      <div class="row">

        <div class="col-md-5 col-sm-5 hidden-xs-down">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18559121995e3a003dd82f43_56664599', 'product_cover_thumbnails');
?>


        </div>

        <div class="col-md-7 col-sm-7">

          <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15895087115e3a003ddc8888_94659191', 'product_prices');
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2906743185e3a003ddc9472_60264677', 'product_description_short');
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2454169965e3a003ddca0a6_30020873', 'product_buy');
?>

          <div class="product-additional-info">

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14752582475e3a003ddd1f95_27360210', 'product_reviews');
?>

          </div>

        </div>

      </div>

     </div>

   </div>

 </div>

</div>

<?php }
/* {block 'product_cover_thumbnails'} */
class Block_18559121995e3a003dd82f43_56664599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_18559121995e3a003dd82f43_56664599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'product_prices'} */
class Block_15895087115e3a003ddc8888_94659191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_15895087115e3a003ddc8888_94659191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_2906743185e3a003ddc9472_60264677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_2906743185e3a003ddc9472_60264677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>

          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_3206532405e3a003ddcb672_77853842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_5213760945e3a003ddcbfc4_37777390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_18266748295e3a003ddcc8c7_08762906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                  <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" hidden>

                <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_2454169965e3a003ddca0a6_30020873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_2454169965e3a003ddca0a6_30020873',
  ),
  'product_variants' => 
  array (
    0 => 'Block_3206532405e3a003ddcb672_77853842',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_5213760945e3a003ddcbfc4_37777390',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_18266748295e3a003ddcc8c7_08762906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <div class="product-actions">

              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">

                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">

                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">

                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3206532405e3a003ddcb672_77853842', 'product_variants', $this->tplIndex);
?>




                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5213760945e3a003ddcbfc4_37777390', 'product_add_to_cart', $this->tplIndex);
?>




                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18266748295e3a003ddcc8c7_08762906', 'product_refresh', $this->tplIndex);
?>


            </form>

          </div>

        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_reviews'} */
class Block_14752582475e3a003ddd1f95_27360210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reviews' => 
  array (
    0 => 'Block_14752582475e3a003ddd1f95_27360210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


            <?php
}
}
/* {/block 'product_reviews'} */
}
