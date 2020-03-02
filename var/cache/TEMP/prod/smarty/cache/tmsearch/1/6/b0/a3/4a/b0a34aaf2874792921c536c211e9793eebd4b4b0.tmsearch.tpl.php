<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:06
  from '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmsearch/views/templates/hook/tmsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc085aeda618_53538455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9890af11d60b7cd69ba1df41e309df8440409488' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/modules/tmsearch/views/templates/hook/tmsearch.tpl',
      1 => 1540700049,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5ddc085aeda618_53538455 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tmsearch" class="nav-element">
	<span class="expand-more" data-toggle="dropdown"><i class="fl-outicons-magnifying-glass34"></i></span>
	<form id="tmsearchbox" method="get" action="https://electricyes.es/tmsearch" >
				<div class="selector">
			<select name="search_categories" class="form-control form-control-select">
									<option  value="2">No hay productos encontrados</option>
									<option  value="10">--Alternadores</option>
									<option  value="11">--Generadores</option>
									<option  value="12">--Potenciometros</option>
									<option  value="13">--Cajones Eléctricos</option>
									<option  value="14">--Focos LED</option>
									<option  value="15">--Resistencias</option>
									<option  value="16">--Borneros</option>
									<option  value="17">--Conectores</option>
									<option  value="18">--Embarrados II</option>
									<option  value="19">--Embarrados III</option>
									<option  value="21">--Embarrados IV</option>
									<option  value="22">--Derivaciones Embarrados II</option>
									<option  value="23">--Derivaciones Embarrados III</option>
									<option  value="24">--Derivaciones Embarrados IV</option>
									<option  value="25">--Derivaciones Terminaciones IV</option>
									<option  value="26">--Puntos de Interrupcion II</option>
									<option  value="27">--Puntos de Interrupcion III</option>
									<option  value="28">--Puntos de Interrupcion IV</option>
									<option  value="32">--Interruptores</option>
									<option  value="33">--Repartidor</option>
									<option  value="35">--Prensaestopas</option>
									<option  value="37">--Armario</option>
									<option  value="38">--Accesorios</option>
									<option  value="39">--Mangueras</option>
							</select>
		</div>
		<input class="tm_search_query form-control" type="text" id="tm_search_query" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="tm_submit_search" class="button-search">
			<i class="fl-outicons-magnifying-glass34"></i>
		</button>
	</form>
</div><?php }
}
