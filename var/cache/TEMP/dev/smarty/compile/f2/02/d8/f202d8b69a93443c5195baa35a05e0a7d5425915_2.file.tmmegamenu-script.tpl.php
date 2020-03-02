<?php
/* Smarty version 3.1.32, created on 2019-09-30 00:41:50
  from '/home/nuevaelectricyes/public_html/modules/tmmegamenu/views/templates/hook/tmmegamenu-script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d91332e478004_24362164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f202d8b69a93443c5195baa35a05e0a7d5425915' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/tmmegamenu/views/templates/hook/tmmegamenu-script.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d91332e478004_24362164 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maps']->value, 'map');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['map']->value) {
?>
    <?php if (isset($_smarty_tpl->tpl_vars['map']->value) && $_smarty_tpl->tpl_vars['map']->value && $_smarty_tpl->tpl_vars['map']->value['latitude'] && $_smarty_tpl->tpl_vars['map']->value['longitude']) {?>
      
        $(document).ready(function() {
          $('#tmmegamenu_map_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
').parents('.top-level-menu-li').one('mouseenter click', function() {
            setTimeout(function() {
              initMap<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
()
            }, 300)
          });
        });
        function initMap<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
() {
          var myLatLng<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
    = {
            lat : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
,
            lng : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
};
          var map_element<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
 = document.getElementById('tmmegamenu_map_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
');
          var image                                        = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['icon'], ENT_QUOTES, 'UTF-8');?>
';
          var map<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
         = new google.maps.Map(map_element<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
, {
            center                : myLatLng<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
,
            zoom                  : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['scale'], ENT_QUOTES, 'UTF-8');?>
,
            scrollwheel           : false,
            mapTypeControl        : false,
            streetViewControl     : false,
            draggable             : true,
            panControl            : false,
            mapTypeControlOptions : {
              style : google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
          });
          <?php if ($_smarty_tpl->tpl_vars['map']->value['icon']) {?>
          var marker<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
 = new google.maps.Marker({
            position : myLatLng<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
,
            map      : map<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
,
            icon     : image
          });
          <?php } else { ?>
          var marker<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
 = new google.maps.Marker({
            position : myLatLng<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
,
            map      : map<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map']->value['id_item'], ENT_QUOTES, 'UTF-8');?>
,
          });
          <?php }?>
        }
      
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
