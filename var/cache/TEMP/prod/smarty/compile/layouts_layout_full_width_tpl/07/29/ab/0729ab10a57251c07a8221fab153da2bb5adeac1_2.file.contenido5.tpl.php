<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:32
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/electro/contenido5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc087429b817_76472145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0729ab10a57251c07a8221fab153da2bb5adeac1' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/electro/contenido5.tpl',
      1 => 1569824280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc087429b817_76472145 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Creates a container for the splash screen -->
    <div id="splash"
        style="position:absolute;top:0px;left:0px;width:100%;height:100%;background:white;z-index:1;">
        <center id="splash" style="padding-top:230px;">
            <img src="editors/images/loading.gif">
        </center>
    </div>
    
    <!-- Creates a container for the sidebar -->
    <div id="toolbarContainer"
        style="display: none; position:absolute;white-space:nowrap;overflow:hidden;top:0px;left:0px;max-height:24px;height:36px;right:0px;padding:6px;">
    </div>

    <!-- Creates a container for the toolboox -->
    <div id="sidebarContainer2"
        style="position:absolute;overflow:hidden;top:36px;left:0px;bottom:36px;max-width:52px;width:56px;padding-top:10px;padding-left:4px; display: none;">
    </div>


    <!-- Creates a container for the graph -->
    <!--    
    <div id="graphContainer"
        style="position:absolute;overflow:hidden;width:641px;height:481px;cursor:default;">
    </div>
    -->

    <div id="graphContainer"
        style=" position:absolute;overflow:auto;top:5px;left:60px;bottom:85px;right:60px;cursor:default;">
    </div>

    <!--
    <div id="graphContainer"
        style="overflow:hidden;width:641px;height:481px;cursor:default;">
    </div>
    -->

    <!-- Creates a container for the outline -->
    <div id="outlineContainer"
        style="position:absolute;overflow:hidden;top:36px;right:0px;width:200px;height:140px;background:transparent;border-style:solid;border-color:black; display: none">
    </div>
        
    <!-- Creates a container for the sidebar -->
    <div id="statusContainer"
        style="text-align:right;position:absolute;overflow:hidden;bottom:0px;left:0px;max-height:24px;height:36px;right:0px;color:white;padding:6px;">
        <div style="font-size:10pt;float:left;">
           
        </div>
    </div>

    

    <input type="hidden" name="linea_v" id="linea_v" value="0">
    <input type="hidden" name="linea_h" id="linea_h" value="0">    
    <input type="hidden" name="presa" id="presa" value="0">    

    <!-- Contenido de abajo -->
    <?php echo $_smarty_tpl->tpl_vars['footer_form_vars']->value;?>

    <!--
    <input type="hidden" name="fo_1" id="fo_1" value="">    
    <input type="hidden" name="fo_2" id="fo_2" value="">        
    <input type="hidden" name="fo_3" id="fo_3" value="">        
    <input type="hidden" name="fo_4" id="fo_4" value="">        
    <input type="hidden" name="fo_5" id="fo_5" value="">        
    <input type="hidden" name="fo_6" id="fo_6" value="">        
    <input type="hidden" name="fo_7" id="fo_7" value="">        
    <input type="hidden" name="fo_8" id="fo_8" value="">        
    <input type="hidden" name="fo_9" id="fo_9" value="">        
    <input type="hidden" name="fo_10" id="fo_10" value="">        
    <input type="hidden" name="fo_11" id="fo_11" value="">        
    <input type="hidden" name="fo_12" id="fo_12" value="">        
    <input type="hidden" name="fo_13" id="fo_13" value="">        
    -->

 <?php }
}
