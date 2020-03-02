<?php
/* Smarty version 3.1.32, created on 2019-11-28 22:41:49
  from 'module:pkcompareviewstemplatesfr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de03f1de2e996_05169770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7569c6664ba3ed9fe3608e689cc05f6742688ee1' => 
    array (
      0 => 'module:pkcompareviewstemplatesfr',
      1 => 1540717696,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de03f1de2e996_05169770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10341172745de03f1de00694_68945330', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'product_availability'} */
class Block_14441204755de03f1de28190_82612564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								            <span class="product-availability hidden">
								              <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
								                <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
								                  <i class="material-icons product-available"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</i>
								                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
								                  <i class="material-icons product-last-items"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Items','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</i>
								                <?php } else { ?>
								                  <i class="material-icons product-unavailable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unavailable','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</i>
								                <?php }?>
								              <?php }?>
								            </span>
								          <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_quantity'} */
class Block_10127242335de03f1de26e43_27949614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								      <div class="product-quantity">
								          <button class="btn btn-primary add-to-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" data-button-action="add-to-cart" type="submit" <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0) {?>disabled<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
								          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14441204755de03f1de28190_82612564', 'product_availability', $this->tplIndex);
?>

								      </div>
								    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_minimal_quantity'} */
class Block_1191971645de03f1de2b007_87909162 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								      <p class="product-minimal-quantity hidden">
								        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
								          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','mod'=>'pk_compare','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

								        <?php }?>
								      </p>
								    <?php
}
}
/* {/block 'product_minimal_quantity'} */
/* {block "page_content"} */
class Block_10341172745de03f1de00694_68945330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_10341172745de03f1de00694_68945330',
  ),
  'product_quantity' => 
  array (
    0 => 'Block_10127242335de03f1de26e43_27949614',
  ),
  'product_availability' => 
  array (
    0 => 'Block_14441204755de03f1de28190_82612564',
  ),
  'product_minimal_quantity' => 
  array (
    0 => 'Block_1191971645de03f1de2b007_87909162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/nuevaelectricyes/public_html/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>

<!--noindex-->
<svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs><symbol id="si-cmp-cross" viewBox="0 0 11 11"><path d="M0.228,10.745c0.296,0.297,0.777,0.297,1.073,0l4.202-4.202l4.201,4.202 c0.297,0.297,0.777,0.297,1.073,0c0.297-0.297,0.297-0.776,0-1.073L6.576,5.471l4.201-4.203c0.297-0.295,0.297-0.777,0-1.074 c-0.296-0.295-0.776-0.295-1.073,0L5.503,4.397L1.301,0.194c-0.296-0.295-0.777-0.295-1.073,0c-0.296,0.297-0.296,0.779,0,1.074 L4.43,5.471L0.228,9.672C-0.068,9.969-0.068,10.448,0.228,10.745z"/></symbol></defs>
</svg><!--/noindex-->

  <?php if (isset($_smarty_tpl->tpl_vars['hasProduct']->value) && $_smarty_tpl->tpl_vars['hasProduct']->value) {?>

		<table id="product_comparison" class="table table-bordered compare-form num-<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['products']->value), ENT_QUOTES, 'UTF-8');?>
" data-ajax="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('pk_compare','compare'), ENT_QUOTES, 'UTF-8');?>
">
			<tr>
				<td class="td_empty compare_extra_information">
					<h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</h6>
				</td>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
				<td class="ajax_block_product wide-space relative comparison_infos product-block product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-image" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"  data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
					</a>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price']) && $_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['on_sale']) {?>
						<div class="sale-box">
							<span class="sale-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale','mod'=>'pk_compare'),$_smarty_tpl ) );?>
!</span>
						</div>
						<?php }?>
					<?php }?>

					<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>

				</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</tr>

			<tr>
				<td><h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</h6></td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<td class="product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
					<div class="comparison_availability_statut">
						<?php if (!(($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0 && !$_smarty_tpl->tpl_vars['product']->value['available_later']) || ($_smarty_tpl->tpl_vars['product']->value['quantity'] != 0 && !$_smarty_tpl->tpl_vars['product']->value['available_now']) || !$_smarty_tpl->tpl_vars['product']->value['available_for_order'])) {?>
							<span class="availability_value"<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0) {?> class="warning-inline"<?php }?>>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is no longer in stock','mod'=>'pk_compare'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_now'], ENT_QUOTES, 'UTF-8');?>

								<?php }?>
							</span>
						<?php }?>
					</div>
					</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>

			<tr>
				<td><h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</h6></td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<td class="product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price']) && $_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
					<div class="prices-container">

						<div class="product-price-and-shipping">

			              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>

			                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

			                <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
			                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
			                <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
			                <?php }?>

			              <?php }?>

			              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

			              <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
			              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

			              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>


			            </div>

					</div> <!-- end prices-container -->
					<?php }?>
					</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>

			<tr class="cmp-description">
				<td><h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</h6></td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<td class="wide-space product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
						<?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

					</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>

			<?php if ((isset($_smarty_tpl->tpl_vars['pkts']->value['pm_stars']) && $_smarty_tpl->tpl_vars['pkts']->value['pm_stars'] == true) || !isset($_smarty_tpl->tpl_vars['pkts']->value['pm_stars'])) {?>
			<tr>
				<td><h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</h6></td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<td class="product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'displayProductListReviews', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayProductListReviews')) {?>
						<div class="hook-reviews">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

						</div>
					<?php }?>
					</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['ordered_features']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordered_features']->value, 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
					<tr>
						<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

						<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 feature-name">
							<h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6>
						</td>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'for_products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
							<?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value['id']);?>
							<?php $_smarty_tpl->_assignInScope('feature_id', $_smarty_tpl->tpl_vars['feature']->value['id_feature']);?>
							<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value])) {?>
								<?php $_smarty_tpl->_assignInScope('tab', $_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value]);?>
								<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 comparison_infos product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value]))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value], ENT_QUOTES, 'UTF-8');
}?></td>
							<?php } else { ?>
								<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 comparison_infos product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"></td>
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<tr>
					<td></td>
					<td colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['products']->value), ENT_QUOTES, 'UTF-8');?>
" class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No features to compare','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</td>
				</tr>
			<?php }?>
			<tr>
				<td></td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<td class="product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
 wide-space">
						<div class="button-container">
							<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
					            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
					            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">

					            <div class="product-add-to-cart">

								  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>

								    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10127242335de03f1de26e43_27949614', 'product_quantity', $this->tplIndex);
?>


								    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1191971645de03f1de2b007_87909162', 'product_minimal_quantity', $this->tplIndex);
?>


								  <?php }?>
								</div>
					        </form>
						</div>
						<div class="cmp-remove" data-pid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
							<svg class="svgic"><use xlink:href="#si-cmp-cross"></use></svg>
						</div>
					</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'extraProductComparison','list_ids_product'=>$_smarty_tpl->tpl_vars['ids']->value),$_smarty_tpl ) );?>

	</table> <!-- end products_block -->

<?php } else { ?>

	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products selected for comparison','mod'=>'pk_compare'),$_smarty_tpl ) );?>
</p>

<?php }?>

<?php
}
}
/* {/block "page_content"} */
}
