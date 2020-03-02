<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:21
  from '/home/nuevaelectricyes/public_html/modules/tmmosaicproducts/views/templates/hook/layouts/_partials/video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc086910ad07_56276859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a88138c0fc598c90f2e5f3d4de450a9560a66d9c' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmmosaicproducts/views/templates/hook/layouts/_partials/video.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc086910ad07_56276859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('video', $_smarty_tpl->tpl_vars['data']->value);?>
<div class="tmmp-frontend-video tmmp-frontend-video-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->id, ENT_QUOTES, 'UTF-8');?>
">
  <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->title, ENT_QUOTES, 'UTF-8');?>
</h3>
  <?php if ($_smarty_tpl->tpl_vars['video']->value->type == 'youtube') {?>
    <div class="video-container">
      <iframe src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->url, ENT_QUOTES, 'UTF-8');?>
?enablejsapi=1&version=3&html5=1&controls=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->controls, ENT_QUOTES, 'UTF-8');?>
&autoplay=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->autoplay, ENT_QUOTES, 'UTF-8');?>
&loop=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->loop, ENT_QUOTES, 'UTF-8');?>
" frameborder="0"></iframe>
    </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['video']->value->type == 'vimeo') {?>
    <div class="video-container">
      <iframe src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->url, ENT_QUOTES, 'UTF-8');?>
?autoplay=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->autoplay, ENT_QUOTES, 'UTF-8');?>
&loop=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->loop, ENT_QUOTES, 'UTF-8');?>
" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['video']->value->type == 'custom') {?>
    <div class="video-container">
      <video id="custom_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_name']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="vjs-default-skin" <?php if ($_smarty_tpl->tpl_vars['video']->value->autoplay) {?>autoplay<?php }?> <?php if ($_smarty_tpl->tpl_vars['video']->value->loop) {?>loop<?php }?> <?php if ($_smarty_tpl->tpl_vars['video']->value->controls) {?>controls<?php }?> data-setup="{}">
        <?php if ($_smarty_tpl->tpl_vars['video']->value->format == 'mp4' || $_smarty_tpl->tpl_vars['video']->value->format == 'webm' || $_smarty_tpl->tpl_vars['video']->value->format == 'ogg') {?>
          <source src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->url, ENT_QUOTES, 'UTF-8');?>
 " type="video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->format, ENT_QUOTES, 'UTF-8');?>
" />
        <?php } else { ?>
          <source src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->url, ENT_QUOTES, 'UTF-8');?>
" type='video/mp4' />
        <?php }?>
        <p class="vjs-no-js"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To view this video please enable JavaScript, and consider upgrading to a web browser that','mod'=>'tmmosaicproducts'),$_smarty_tpl ) );?>

          <a href="//videojs.com/html5-video-support/" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'supports HTML5 video','mod'=>'tmmosaicproducts'),$_smarty_tpl ) );?>
</a>
        </p>
      </video>
    </div>
    <?php echo '<script'; ?>
>
      window.addEventListener('load', function () {
        _V_("custom_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_name']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value->id, ENT_QUOTES, 'UTF-8');?>
").ready(function() {
          var myPlayer    = this;
          var aspectRatio = 9 / 16;

          function resizeVideoJS() {
            var element = $(".tmmp-frontend-video");
            var width   = element.width();
            myPlayer.width(width).height(width * aspectRatio);
          }

          resizeVideoJS();
          $(window).resize(resizeVideoJS);
        });
      });
    <?php echo '</script'; ?>
>
  <?php }?>
</div>
<?php }
}
