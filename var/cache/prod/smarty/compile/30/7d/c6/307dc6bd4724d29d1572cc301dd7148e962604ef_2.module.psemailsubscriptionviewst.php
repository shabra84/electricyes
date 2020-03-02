<?php
/* Smarty version 3.1.32, created on 2019-11-25 18:21:57
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc0db5eaf6c2_48094314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1540837465,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc0db5eaf6c2_48094314 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="block_newsletter">

    <h3 class="h5 hidden-sm-down">Síguenos</h3>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer-bottom" method="post">

      <div class="input-wrap">

        <input

          name="email"

          class="form-control"

          type="text"

          value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"

          placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"

          aria-labelledby="block-newsletter-label"

        >

        <input

          class="material-icons"

          name="submitNewsletter"

          type="submit"

          value="&#xE5C8;"

        >

      </div>

      <input type="hidden" name="action" value="0">

      <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>

        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>

      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>

        <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">

          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>


        </p>

      <?php }?>

    </form>

    <div class="social">
      <a href="#"><img src="../img/social/facebook.png" alt=""></a>
      <a href="#"><img src="../img/social/linkedin.png" alt=""></a>
      <a href="#"><img src="../img/social/instagram.png" alt=""></a>
      <a href="#"><img src="../img/social/twitter.png" alt=""></a>
      <a href="#"><img src="../img/social/whatsapp.png" alt=""></a>
    </div>

    <img class="payment-methods" src="../img/footer-money.jpg" alt="">

</div>

<?php }
}
