<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:50
  from '/home/nuevaelectricyes/public_html/modules/tmdaydeal/views/templates/hook/tmdaydeal-script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d91332e906402_26082735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '785894af7a0b8d1943eda8cde69c37b22a4988f7' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmdaydeal/views/templates/hook/tmdaydeal-script.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d91332e906402_26082735 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var tmdd_msg_days = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'tmdaydeal','js'=>1),$_smarty_tpl ) );?>
";
    var tmdd_msg_hr = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hr','mod'=>'tmdaydeal','js'=>1),$_smarty_tpl ) );?>
";
    var tmdd_msg_min = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'min','mod'=>'tmdaydeal','js'=>1),$_smarty_tpl ) );?>
";
    var tmdd_msg_sec = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sec','mod'=>'tmdaydeal','js'=>1),$_smarty_tpl ) );?>
";
    $("[data-countdown]").each(function() {
        var $this = $(this), finalDate = $(this).data("countdown");
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<span><span>%D</span>'+tmdd_msg_days+'</span><span><span>%H</span>'+tmdd_msg_hr+'</span><span><span>%M</span>'+tmdd_msg_min+'</span><span><span>%S</span>'+tmdd_msg_sec+'</span>'));
        });
    });
<?php echo '</script'; ?>
><?php }
}
