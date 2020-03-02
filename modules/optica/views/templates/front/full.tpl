{*
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to https://www.prestashop.com for more information.
* $product|@print_r
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2019 PrestaShop SA
    * @license https://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {assign var=texto value=$texto|unserialize}
    {assign var=texto2 value=$texto2|unserialize}
    {assign var=texto3 value=$texto3|unserialize}




	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery.idTabs.modified.js"></script>

	
<div class="opticaFull">
    <ul class="idTabs">
			
			<li><a class="selected" id="idTabs_select" href="#idTabs">{$texto.titulo}</a></li>
			
			<li><a id="idTabs2_select" href="#idTabs2" class="">{$texto2.titulo}</a></li>
			
			<li><a id="idTabs3_select" href="#idTabs3" class="">{$texto3.titulo}</a></li>

		</ul>

<div class="customization_block bgcolor bordercolor">	

<div id="idTabs" class="">
<br>	
<table width="480px" cellpadding="5px" class="customfield">
<tbody><tr><td colspan="3"><h3>{$texto.subtitulo}</h3><br></td></tr>
<tr>
<td><input type="radio" id="prescription" name="prescription"  checked="true" value="Single Vision"> <span>{$texto.monofocal}</span></td>
<td></td>
<td></td>
</tr>
<tr>
<td colspan="3">
<script>
$(document).ready(function()
{

function findCombination()
{

}

var productPriceTaxExcluded = {$product.price_tax_exc};
var lenscoatingchange ="";
$('#ADD_L').hide();
$('#ADD_R').hide();
$('#ADD_MSG').hide();
$('#ADD_HEAD').hide();
$('#Standard').show();


//$("input:checkbox#selectall").attr('checked',true);

 $('#group_8').val(55);
 //alert(productPriceTaxExcluded );
 var productPriceTaxExcludes = "$"+productPriceTaxExcluded+".00";
 var initial_price ="$169.00"; 
 //alert("prodprice"+initial_price);
 $('#our_price_display').text(productPriceTaxExcludes);
 $('#our_price_display_popup').text(productPriceTaxExcludes);
 $('#our_price_display_tab1').text(productPriceTaxExcludes);
 $('#our_price_display_tab2').text(productPriceTaxExcludes);
 $('#our_price_display_tab3').text(productPriceTaxExcludes);
 //findCombination();
 $('#wrapResetImages').show('slow');



$('#clickme').click(function() {
  $('#reading_presciption').toggle('slow', function() {
    // Animation complete.
	
  });
  });
$('input:radio[name=prescription]').change(function() {
var prescription = $('input:radio[name=prescription]:checked').val()
	//alert(prescription);
	if(prescription=='Single Vision')
	{
	 $('#ADD_L').hide();
	 $('#ADD_R').hide();
	 $('#ADD_MSG').hide();
	 $('#ADD_HEAD').hide();
	}
	else if(prescription=='Progressives and Bifocals' || prescription=='Reading')
	{
	 $('#ADD_L').show();
	 $('#ADD_R').show();
	 $('#ADD_MSG').show();
	 $('#ADD_HEAD').show();
	}
	
  }); 
  
 
   
  //Change lensoption while selected the Radio Buttion
  
  $('input:radio[name=lensoption]').change(function() {
  	console.log("aqui vamos");
    $('a#idTabs3_select').get(0).click();
    /*

  var lenoptionchange = $('input:radio[name=lensoption]:checked').val();
  $('#group_7').val(lenoptionchange);
  //findCombination();
  $('#wrapResetImages').show('slow');
  var lenscoating_already_selected=$('input:radio[name=lenscoating]:checked').val();
  
  var lensoption = $('input:radio[name=lensoption]:checked').val();
  console.log("lensoption -->"+lensoption);
	if(lensoption==74||lensoption==75||lensoption==76)
	{
	var r=confirm("Are you sure you need LINED BIFOCALS ?");
	 if (r==true)
	  {
	  if(lenscoating_already_selected!=1&&lenscoating_already_selected!=2&&lenscoating_already_selected!=3)
	  {
	  $(".lenscoating").attr('checked', 52);
	  $('#group_8').val(52);
	  findCombination();
	  $('#wrapResetImages').show('slow');
	  }
	  $('a#idTabs3_select').get(0).click();
	  }
	}
	else
	{
	 if(lenscoating_already_selected!=1&&lenscoating_already_selected!=2&&lenscoating_already_selected!=3)
	  {
	  $(".lenscoating").attr('checked', 52);
	  $('#group_8').val(52);
	  findCombination();
	  $('#wrapResetImages').show('slow');
	  }
	  $('#wrapResetImages').show('slow');
	   $('a#idTabs3_select').get(0).click();
	}
	*/
  });
  
  
  /*
  $('input:radio[name=lenstype]').change(function() {
  var lenstype = $('input:radio[name=lenstype]:checked').val();
  if(lenstype=="Standard Clear Lenses")
  {
  $('#Standard').show();
  $('#Photochromic').hide();
  $('#Sunglasses').hide();
  $('#lensoptionmsg').hide();

  }
  else if(lenstype=="Photochromic Lenses")
  {
  $('#Standard').hide();
  $('#Photochromic').show();
  $('#Sunglasses').hide();
  $('#lensoptionmsg').hide();

  }
  else if(lenstype=="Sunglasses Lenses")
  {
  $('#Standard').hide();
  $('#Photochromic').hide();
  $('#Sunglasses').show();
  $('#lensoptionmsg').hide();

  }
  
  });
  */
  $('input:radio[name=prescription]').change(function() {
  $('input:radio[name=lensoption]').attr("checked",false);
  var prescription = $('input:radio[name=prescription]:checked').val();
  if(prescription=="Single Vision")
  {
  $('#Standard').show();
  $('#Photochromic').hide();
  $('#Sunglasses').hide();
  $('#lensoptionmsg').hide();
 
  }
  else if(prescription=="Progressives and Bifocals")
  {
  $('#Standard').hide();
  $('#Photochromic').show();
  $('#Sunglasses').hide();
  $('#lensoptionmsg').hide();
 
  }
  else if(prescription=="Reading")
  {
  $('#Standard').hide();
  $('#Photochromic').hide();
  $('#Sunglasses').show();
  $('#lensoptionmsg').hide();

  }
  
  });
	
	
	

  // add multiple select / deselect functionality
$("#selectall").change(function () {
$(".lenscoating").attr('checked', this.checked);
});

// if all checkbox are selected, check the selectall checkbox
// and viceversa
$(".lenscoating").change(function(){

if($(".lenscoating").length == $(".lenscoating:checked").length) {
$("#selectall").attr("checked", "checked");
} else {
$("#selectall").removeAttr("checked");
}
});


 $('input:radio[name=lenscoating]').change(function() {
  var lenscoatingchange = $('input:radio[name=lenscoating]:checked').val();
  var lenscoatingchange ="";
 var lenscoating="";
 lenscoatingchange= $('input:radio[name=lenscoating]:checked').val();
  if(lenscoatingchange=='1')
  {
  $('#group_8').val(48);
  }
  else if(lenscoatingchange=='2')
  {
   $('#group_8').val(52);
  }
  else
  {
   $('#group_8').val(55);
  }
  
 
  findCombination();
  $('#wrapResetImages').show('slow');
  });
/*
$('input:checkbox[name=lenscoating], input:checkbox#selectall').change(function() {
 
  var lenscoatingchange ="";
  $checkedCheckboxes = $("input:checkbox[name=lenscoating]:checked");
  var i=0;
  $checkedCheckboxes.each(function () {
  lenscoatingchange +=  $(this).val() +",";
   });
	//alert(lenscoatingchange);
  if(lenscoatingchange=='1,2,3,')
  {
  $('#group_8').val(54);
  
  }
  else if(lenscoatingchange=='1,3,')
  {
   $('#group_8').val(52);
  }
  else if(lenscoatingchange=='1,2,')
  {
   $('#group_8').val(51);
  }
  else if(lenscoatingchange=='2,3,')
  {
   $('#group_8').val(53);
  }
  else if(lenscoatingchange=='1,')
  {
   $('#group_8').val(48);
  }
  else if(lenscoatingchange=='2,')
  {
   $('#group_8').val(49);
  }
  else if(lenscoatingchange=='3,')
  {
   $('#group_8').val(50);
  }
  else
  {
   $('#group_8').val(55);
  }
  
  findCombination();
  $('#wrapResetImages').show('slow');
  });
*/
//Tab Next/Prev
/*
 $('#tab_1_next').click(function() {
	$('a#idTabs1_select').get(0).click();
 });
  $('#tab_2_prev').click(function() {
	$('a#idTabs_select').get(0).click();
 });
  $('#tab_2_next').click(function() {
	$('a#idTabs2_select').get(0).click();
 });*/
 
 $('#tab_1_next').click(function() {
 //	console.log("22222");
	$('a#idTabs2_select').get(0).click();
 });
   $('#tab_3_prev').click(function() {
	$('a#idTabs_select').get(0).click();
 });
  $('#tab_3_next').click(function() {
  //	console.log("Xxxxxxxxxxxxxx");
	$('a#idTabs3_select').get(0).click();
 });
  $('#tab_4_prev').click(function() {
	$('a#idTabs2_select').get(0).click();
 });
 
 
   
 //popup Summary Details

 $('#inline').click(function() {
 console.log("INLINE");
 

  $('#sum_sphr').text($("#SPH_R option:selected").text());
  $('#sum_sphl').text($("#SPH_L option:selected").text());

  $('#sum_axisr').text($("#AXIS_R option:selected").text());
  $('#sum_axisl').text($("#AXIS_L option:selected").text());
  $('#sum_cylr').text($("#CYL_R option:selected").text());
  $('#sum_cyll').text($("#CYL_L option:selected").text());
  
  $('#sum_pd').text($("#PD option:selected").text());
  


 var lenscoatingchange ="";
 var lenscoating="";


  var url ="{url entity='module' name='optica' controller='ajaxfunc' params = []}";
  var pid = 64;
$.ajax({
    url : url,
    type : "POST",
    data : { action :'addtocart', customdata : 'xxxxxxx', qty : 1, pid : pid },

    success : function(response) {
      if(response.message == true) {
        console.log("yeaaaaa");
        $('#addtocart_form').submit();
      }
    }
  });


 /*
 lenscoatingchange= $('input:radio[name=lenscoating]:checked').val();
  if(lenscoatingchange=='1')
  {
  lenscoating="Anti scratch , U.V. Coating";
  }
  else if(lenscoatingchange=='2')
  {
  lenscoating="Multilayered Anti Glare , Anti scratch , U.V. Coating";
  }
  else
  {
  lenscoating="Non Coating";
  }
 /* $checkedCheckboxes = $("input:checkbox[name=lenscoating]:checked");
  var i=0;
  $checkedCheckboxes.each(function () {
  lenscoatingchange +=  $(this).val() +",";
   });
	//alert(lenscoatingchange);
  if(lenscoatingchange=='1,2,3,')
  {
  lenscoating="Premium Anti-Reflective & UV Protective & Scratch Resistant";
  }
  else if(lenscoatingchange=='1,3,')
  {
  lenscoating="Premium Anti-Reflective & Scratch Resistant";
  }
  else if(lenscoatingchange=='1,2,')
  {
  lenscoating="Premium Anti-Reflective & UV Protective";
  }
  else if(lenscoatingchange=='2,3,')
  {
  lenscoating="UV Protective & Scratch Resistant";
  }
  else if(lenscoatingchange=='1,')
  {
  lenscoating="Premium Anti-Reflective";
  }
  else if(lenscoatingchange=='2,')
  {
  lenscoating="UV Protective";
  }
  else if(lenscoatingchange=='3,')
  {
  lenscoating="Scratch Resistant";
  }
  else
  {
  lenscoating="Non Coating";
  }*/
  
/*
  var lensoption =$('input:radio[name=lensoption]:checked').val();
  if(lensoption=='74')
  {
  lensoption="Bifocals - Bifocals with lines";
  }
  else if(lensoption=='76')
  {
  lensoption="Bifocals - Sunglass lined bifocals";
  }
  else if(lensoption=='75')
  {
  lensoption="Bifocals - Transition lined bifocals";
  }
  else if(lensoption=='77')
  {
  lensoption="Progressives - Light weight Progressive lenses";
  }
  else if(lensoption=='78')
  {
  lensoption="Progressives - Transition progressives";
  }
  else if(lensoption=='79')
  {
  lensoption="Progressives - Ultra thin  progressive lenses";
  }
  else if(lensoption=='88')
  {
  lensoption="Progressives - Sunglass Progressive";
  }
  else if(lensoption=='86')
  {
  lensoption="Reading - Sunglass lenses Brown or Grey";
  }
  else if(lensoption=='80')
  {
  lensoption="Reading - Thin lenses";
  }
  else if(lensoption=='82')
  {
  lensoption="Reading - Transition lenses";
  }
  else if(lensoption=='81')
  {
  lensoption="Reading - Ultra thin lenses";
  }
  else if(lensoption=='84')
  {
  lensoption="Single - Sunglass lenses Brown or Grey";
  }
  else if(lensoption=='64')
  {
  lensoption="Single - Thin lenses";
  }
  else if(lensoption=='66')
  {
  lensoption="Single - Transition lenses";
  }
  else if(lensoption=='65')
  {
  lensoption="Single - Ultra thin lenses";
  }
  else
  {
  lensoption="Non Mentioned";
  }
 
   
	//var lenstype =$('input:radio[name=lenstype]:checked').val();
	var PD =$('#PD option:selected').val();
	var ADD_R =$('#ADD_R option:selected').val();
	var ADD_L =$('#ADD_L option:selected').val();
	var AXIS_R =$('#AXIS_R option:selected').val();
	var AXIS_L =$('#AXIS_L option:selected').val();
	var CYL_R =$('#CYL_R option:selected').val();
	var CYL_L =$('#CYL_L option:selected').val();
	var SPH_R =$('#SPH_R option:selected').val();
	var SPH_L =$('#SPH_L option:selected').val();
	var prescription =$('input:radio[name=prescription]:checked').val();
	var quantity_wanted =$('#quantity_wanted').val();
	
	//lenstype=(lenstype)?lenstype:'Not Mentioned';
	lensoption=(lensoption)?lensoption:'Not Mentioned';
	PD=(PD)?PD:'Not Mentioned';
	ADD_R=(ADD_R)?ADD_R:'Not Mentioned';
	ADD_L=(ADD_L)?ADD_L:'Not Mentioned';
	AXIS_R=(AXIS_R)?AXIS_R:'Not Mentioned';
	AXIS_L=(AXIS_L)?AXIS_L:'Not Mentioned';
	CYL_R=(CYL_R)?CYL_R:'Not Mentioned';
	CYL_L=(CYL_L)?CYL_L:'Not Mentioned';
	SPH_R=(SPH_R)?SPH_R:'Not Mentioned';
	SPH_L=(SPH_L)?SPH_L:'Not Mentioned';
	prescription=(prescription)?prescription:'Not Mentioned';
	lenscoating=(lenscoating)?lenscoating:'Not Mentioned';
	quantity_wanted=(quantity_wanted)?quantity_wanted:'Not Mentioned';
	
	//$('#sum_lenstype').text(lenstype);
	$('#sum_option').text(lensoption);
	$('#sum_pd').text(PD);
	$('#sum_addr').text(ADD_R);
	$('#sum_addl').text(ADD_L);
	$('#sum_axisr').text(AXIS_R);
	$('#sum_axisl').text(AXIS_L);
	$('#sum_cylr').text(CYL_R);
	$('#sum_cyll').text(CYL_L);
	$('#sum_sphr').text(SPH_R);
	$('#sum_sphl').text(SPH_L);
	$('#sum_purpose').text(prescription);
	$('#sum_coating').text(lenscoating);
	$('#sum_qty').text(quantity_wanted);
	*/
 });
 
	 
});

</script>
<p>
{$texto.descripcion} <span id="clickme"><a href="" onclick="return false;">{$texto.linkReceta}?</a></span> 
</p>
<div id="reading_presciption" style="display: none;">
<br>
<img id="book" width="420px" src="{$img1}" alt="">

</div></td>
</tr>
<tr><td colspan="3" cellpadding="5px">
<br>
<table width="100%">
<tbody><tr><td><h3>{$texto.ojo}</h3></td><td><h3>{$texto.sph}</h3></td><td><h3>{$texto.cyl}</h3></td><td><h3>{$texto.axis}</h3></td><td><h3 id="ADD_HEAD" style="display: block;">ADD</h3><br></td></tr>
<tr><td><h3>{$texto.odDerecha}</h3></td>
<td>
<select name="SPH_R" id="SPH_R" style="width: 80px;">
<option value="" selected="selected">Nada</option>
<option value="-6.00">-6.00</option>
<option value="-5.75">-5.75</option>
<option value="-5.50">-5.50</option>
<option value="-5.25">-5.25</option>
<option value="-5.00">-5.00</option>
<option value="-4.75">-4.75</option>
<option value="-4.50">-4.50</option>
<option value="-4.25">-4.25</option>
<option value="-4.00">-4.00</option>
<option value="-3.75">-3.75</option>
<option value="-3.50">-3.50</option>
<option value="-3.25">-3.25</option>
<option value="-3.00">-3.00</option>
<option value="-2.75">-2.75</option>
<option value="-2.50">-2.50</option>
<option value="-2.25">-2.25</option>
<option value="-2.00">-2.00</option>
<option value="-1.75">-1.75</option>
<option value="-1.50">-1.50</option>
<option value="-1.25">-1.25</option>
<option value="-1.00">-1.00</option>
<option value="-0.75">-0.75</option>
<option value="-0.50">-0.50</option>
<option value="-0.25">-0.25</option>
<option value="0.00">0.00 (Plano)</option>
<option value="+0.25">+0.25</option>
<option value="+0.50">+0.50</option>
<option value="+0.75">+0.75</option>
<option value="+1.00">+1.00</option>
<option value="+1.25">+1.25</option>
<option value="+1.50">+1.50</option>
<option value="+1.75">+1.75</option>
<option value="+2.00">+2.00</option>
<option value="+2.25">+2.25</option>
<option value="+2.50">+2.50</option>
<option value="+2.75">+2.75</option>
<option value="+3.00">+3.00</option>
<option value="+3.25">+3.25</option>
<option value="+3.50">+3.50</option>
<option value="+3.75">+3.75</option>
<option value="+4.00">+4.00</option>
<option value="+4.25">+4.25</option>
<option value="+4.50">+4.50</option>
<option value="+4.75">+4.75</option>
<option value="+5.00">+5.00</option>
<option value="+5.25">+5.25</option>
<option value="+5.50">+5.50</option>
<option value="+5.75">+5.75</option>
<option value="+6.00">+6.00</option>
</select>
</td>

<td>
<select name="CYL_R" id="CYL_R">
<option value="" selected="selected">Nada</option>
<option value="-3.75">-3.75</option>
<option value="-3.50">-3.50</option>
<option value="-3.25">-3.25</option>
<option value="-3.00">-3.00</option>
<option value="-2.75">-2.75</option>
<option value="-2.50">-2.50</option>
<option value="-2.25">-2.25</option>
<option value="-2.00">-2.00</option>
<option value="-1.75">-1.75</option>
<option value="-1.50">-1.50</option>
<option value="-1.25">-1.25</option>
<option value="-1.00">-1.00</option>
<option value="-0.75">-0.75</option>
<option value="-0.50">-0.50</option>
<option value="-0.25">-0.25</option>
<option value="+0.25">+0.25</option>
<option value="+0.50">+0.50</option>
<option value="+0.75">+0.75</option>
<option value="+1.00">+1.00</option>
<option value="+1.25">+1.25</option>
<option value="+1.50">+1.50</option>
<option value="+1.75">+1.75</option>
<option value="+2.00">+2.00</option>
<option value="+2.25">+2.25</option>
<option value="+2.50">+2.50</option>
<option value="+2.75">+2.75</option>
<option value="+3.00">+3.00</option>
<option value="+3.25">+3.25</option>
<option value="+3.50">+3.50</option>
<option value="+3.75">+3.75</option>
</select>
</td>

<td>
<select name="AXIS_R" id="AXIS_R">
<option value="" selected="selected">Nada</option>
{for $foo=1 to 180}
<option value="{$foo}">{$foo}</option>
{/for}
</select>
</td>

<td>
<select name="ADD_R" id="ADD_R" style="display: inline-block;">
<option value="" selected="selected">Nada</option>
<option value="+0.75">+0.75</option>
<option value="+1.00">+1.00</option>
<option value="+1.25">+1.25</option>
<option value="+1.50">+1.50</option>
<option value="+1.75">+1.75</option>
<option value="+2.00">+2.00</option>
<option value="+2.25">+2.25</option>
<option value="+2.50">+2.50</option>
<option value="+2.75">+2.75</option>
<option value="+3.00">+3.00</option>
<option value="+3.25">+3.25</option>
<option value="+3.50">+3.50</option>
</select>
</td>

</tr>
<tr><td><h3>{$texto.odIzquierda}</h3></td>
<td>
<select name="SPH_L" id="SPH_L" style="width: 80px;">
<option value="" selected="selected">Nada</option>
<option value="-6.00">-6.00</option>
<option value="-5.75">-5.75</option>
<option value="-5.50">-5.50</option>
<option value="-5.25">-5.25</option>
<option value="-5.00">-5.00</option>
<option value="-4.75">-4.75</option>
<option value="-4.50">-4.50</option>
<option value="-4.25">-4.25</option>
<option value="-4.00">-4.00</option>
<option value="-3.75">-3.75</option>
<option value="-3.50">-3.50</option>
<option value="-3.25">-3.25</option>
<option value="-3.00">-3.00</option>
<option value="-2.75">-2.75</option>
<option value="-2.50">-2.50</option>
<option value="-2.25">-2.25</option>
<option value="-2.00">-2.00</option>
<option value="-1.75">-1.75</option>
<option value="-1.50">-1.50</option>
<option value="-1.25">-1.25</option>
<option value="-1.00">-1.00</option>
<option value="-0.75">-0.75</option>
<option value="-0.50">-0.50</option>
<option value="-0.25">-0.25</option>
<option value="0.00">0.00 (Plano)</option>
<option value="+0.25">+0.25</option>
<option value="+0.50">+0.50</option>
<option value="+0.75">+0.75</option>
<option value="+1.00">+1.00</option>
<option value="+1.25">+1.25</option>
<option value="+1.50">+1.50</option>
<option value="+1.75">+1.75</option>
<option value="+2.00">+2.00</option>
<option value="+2.25">+2.25</option>
<option value="+2.50">+2.50</option>
<option value="+2.75">+2.75</option>
<option value="+3.00">+3.00</option>
<option value="+3.25">+3.25</option>
<option value="+3.50">+3.50</option>
<option value="+3.75">+3.75</option>
<option value="+4.00">+4.00</option>
<option value="+4.25">+4.25</option>
<option value="+4.50">+4.50</option>
<option value="+4.75">+4.75</option>
<option value="+5.00">+5.00</option>
<option value="+5.25">+5.25</option>
<option value="+5.50">+5.50</option>
<option value="+5.75">+5.75</option>
<option value="+6.00">+6.00</option>
</select>
</td>

<td>
<select name="CYL_L" id="CYL_L">
<option value="" selected="selected">Nada</option>
<option value="-3.75">-3.75</option>
<option value="-3.50">-3.50</option>
<option value="-3.25">-3.25</option>
<option value="-3.00">-3.00</option>
<option value="-2.75">-2.75</option>
<option value="-2.50">-2.50</option>
<option value="-2.25">-2.25</option>
<option value="-2.00">-2.00</option>
<option value="-1.75">-1.75</option>
<option value="-1.50">-1.50</option>
<option value="-1.25">-1.25</option>
<option value="-1.00">-1.00</option>
<option value="-0.75">-0.75</option>
<option value="-0.50">-0.50</option>
<option value="-0.25">-0.25</option>
<option value="+0.25">+0.25</option>
<option value="+0.50">+0.50</option>
<option value="+0.75">+0.75</option>
<option value="+1.00">+1.00</option>
<option value="+1.25">+1.25</option>
<option value="+1.50">+1.50</option>
<option value="+1.75">+1.75</option>
<option value="+2.00">+2.00</option>
<option value="+2.25">+2.25</option>
<option value="+2.50">+2.50</option>
<option value="+2.75">+2.75</option>
<option value="+3.00">+3.00</option>
<option value="+3.25">+3.25</option>
<option value="+3.50">+3.50</option>
<option value="+3.75">+3.75</option>
</select>
</td>

<td>
<select name="AXIS_L" id="AXIS_L">
<option value="" selected="selected">Nada</option>
{for $foo=1 to 180}
<option value="{$foo}">{$foo}</option>
{/for}

</select>
</td>

<td>
<!--
<select name="ADD_L" id="ADD_L" style="display: inline-block;">
<option value="" selected="selected">Nada</option>
<option value="+0.75">+0.75</option>
<option value="+1.00">+1.00</option>
<option value="+1.25">+1.25</option>
<option value="+1.50">+1.50</option>
<option value="+1.75">+1.75</option>
<option value="+2.00">+2.00</option>
<option value="+2.25">+2.25</option>
<option value="+2.50">+2.50</option>
<option value="+2.75">+2.75</option>
<option value="+3.00">+3.00</option>
<option value="+3.25">+3.25</option>
<option value="+3.50">+3.50</option>
</select>
-->
</td>

</tr>
<tr>
<td width="36%" colspan="2">
<p class="small">{$texto.des2}</p>
</td>
<td width="36%" colspan="2">
<p class="small">{$texto.des3}</p>
</td>
<td width="24%">
<p class="small" id="ADD_MSG" style="display: block;">xxxx</p>
</td>
</tr>
</tbody></table>
<br>
</td>
</tr>

<tr><td colspan="3"><h3 style="display:inline;">{$texto.dp}</h3>
<select name="PD" id="PD" style="margin-top: -5px;">
<option value="">Nada</option>
<option value="46.0">46.0</option>
<option value="46.5">46.5</option>
<option value="47.0">47.0</option>
<option value="47.5">47.5</option>
<option value="48.0">48.0</option>
<option value="48.5">48.5</option>
<option value="49.0">49.0</option>
<option value="49.5">49.5</option>
<option value="50.0">50.0</option>
<option value="50.5">50.5</option>
<option value="51.0">51.0</option>
<option value="51.5">51.5</option>
<option value="52.0">52.0</option>
<option value="52.5">52.5</option>
<option value="53.0">53.0</option>
<option value="53.5">53.5</option>
<option value="54.0">54.0</option>
<option value="54.5">54.5</option>
<option value="55.0">55.0</option>
<option value="55.5">55.5</option>
<option value="56.0">56.0</option>
<option value="56.5">56.5</option>
<option value="57.0">57.0</option>
<option value="57.5">57.5</option>
<option value="58.0">58.0</option>
<option value="58.5">58.5</option>
<option value="59.0">59.0</option>
<option value="59.5">59.5</option>
<option value="60.0">60.0</option>
<option value="60.5">60.5</option>
<option value="61.0">61.0</option>
<option value="61.5">61.5</option>
<option value="62.0">62.0</option>
<option value="62.5">62.5</option>
<option value="63.0" selected="selected">63.0</option>
<option value="63.5">63.5</option>
<option value="64.0">64.0</option>
<option value="64.5">64.5</option>
<option value="65.0">65.0</option>
<option value="65.5">65.5</option>
<option value="66.0">66.0</option>
<option value="66.5">66.5</option>
<option value="67.0">67.0</option>
<option value="67.5">67.5</option>
<option value="68.0">68.0</option>
<option value="68.5">68.5</option>
<option value="69.0">69.0</option>
<option value="69.5">69.5</option>
<option value="70.0">70.0</option>
<option value="70.5">70.5</option>
<option value="71.0">71.0</option>
<option value="71.5">71.5</option>
<option value="72.0">72.0</option>
<option value="72.5">72.5</option>
<option value="73.0">73.0</option>
<option value="73.5">73.5</option>
<option value="74.0">74.0</option>
<option value="74.5">74.5</option>
<option value="75.0">75.0</option>
</select>
<br></td></tr>

<tr>
<td colspan="3">
<script>
$(document).ready(function()
{
$('#clickme1').click(function() {
  $('#reading_presciption1').toggle('slow', function() {
    // Animation complete.
  });
});
});
</script>
<p>
{$texto.des3} <span id="clickme1"><a href="" onclick="return false;">{$texto.des4}</a></span> 
</p>
<div id="reading_presciption1" style="display: none;">
<br>
<img id="book" width="420px" src="{$img2}" alt="">
</div>
</td>
</tr>
</tbody></table><br><br><br>
<table width="480px" class="nextprev">
<tbody><tr>
<td width="33%" align="left">
</td>
<td width="33%" align="center">
<span class="our_price_display" style="padding-top: 5px;margin:0 0 0 28px; color: #424242;font-size: 14px;font-weight:bold;">{$texto.precio} 
<span id="our_price_display_tab1" class="price" style="color: #424242;font-size: 14px;font-weight:bold;">$169.00</span>
</span>
</td>
<td width="33%" align="right">
<a class="button_mini" id="tab_1_next">{$texto.siguiente}</a>
</td>
</tr>
</tbody></table>
</div>
<!--
<div id="idTabs1">
<br>	
<table width="480px" height="" cellpadding="5px" class="customfield">
<tr><td colspan="3"><h3>Choose Your Lens Type</h3><br></td></tr>
<tr>
<td><input type="radio" id="lenstype" name="lenstype" value="Standard Clear Lenses"> <span>Standard Clear Lenses</span></td>
<td><input type="radio" id="lenstype" name="lenstype" value="Photochromic Lenses"> <span>Photochromic Lenses</span></td>
<td><input type="radio" id="lenstype" name="lenstype" value="Sunglasses Lenses"> <span>Sunglasses Lenses</span></td>
</tr>
<tr>
<td width="33%">
<p class="small">Select this option for standard clear lenses designed for distance or reading glasses.</p>
</td>
<td width="33%">
<p class="small">Lenses (like Transitions) that adapt to light and darken outdoors while remaining clear indoors and at night.</p>
</td>
<td width="33%">
<p class="small">Select this option for tinted polarized lenses that will transform your glasses into sunglasses.</p>
</td>
</tr>
</table><br><br><br>
<table width="450px" class="nextprev">
<tr>
<td width="50%" align="left">
<a class="button_mini" id="tab_2_prev">Previous</a>
</td>
<td width="50%" align="right">
<a class="button_mini" id="tab_2_next">Next</a>
</td>
</tr>
</table>
</div>-->


<div id="idTabs2" class="block_hidden_only_for_screen">
<br>	
<!--<div id="lensoptionmsg">
<h3>Please select the "HOW WILL YOU USE YOUR GLASSES?" First</h3>
</div> -->
<table width="480px" height="" cellpadding="5px" class="customfield" id="Standard" style="display: none;">
<tbody><tr><td colspan="2"><h3>{$texto2.subtitulo}</h3><br></td></tr>
<tr><td colspan="2"><h3>{$texto.monofocal}</h3><br></td></tr>

{$list2 nofilter}


</tbody>
</table>

<br><br><br>
<table width="480px" class="nextprev">
<tbody><tr>
<td width="33%" align="left">
<a class="button_mini" id="tab_3_prev">{$texto.anterior}</a>
</td>
<td width="33%" align="center">
<span class="our_price_display" style="padding-top: 5px;margin:0 0 0 28px; color: #424242;font-size: 14px;font-weight:bold;">{$texto.precio} 
<span id="our_price_display_tab2" class="price" style="color: #424242;font-size: 14px;font-weight:bold;">$169.00</span>
</span>
</td>
<td width="33%" align="right">
<a class="button_mini" id="tab_3_next">{$texto.siguiente}</a>
</td>
</tr>
</tbody></table>
</div>


<div id="idTabs3" class="block_hidden_only_for_screen">
<br>	
<table width="450px" height="" cellpadding="5px" class="customfield">
<tbody>
<tr>
<td colspan="2"><h3>{$texto3.subtitulo}</h3><br>
</td>
</tr>

{$list3 nofilter}


</tbody></table><br><br><br>
<table width="480px" class="nextprev">
<tbody><tr>
<td width="33%" align="left">
<a class="button_mini" id="tab_4_prev">{$texto.anterior}</a>
</td>
<td width="33%" align="center">
<span class="our_price_display" style="padding-top: 5px;margin:0 0 0 28px; color: #424242;font-size: 14px;font-weight:bold;">{$texto.precio} 
<span id="our_price_display_tab3" class="price" style="color: #424242;font-size: 14px;font-weight:bold;">$169.00</span>
</span>
</td>
<td width="33%" align="right">
<a id="inline" data-toggle="modal" data-target="#exampleModal" href="#data" rel="popupsum" class="thickbox bordercolor shown button_mini" title="Order Summary">Finalizar</a>




</td>
</tr>
</tbody></table>
<script type="text/javascript">
$(document).ready(function()
{
  var tab2Price=0;  
  var tab3Price=0;  
  $( "#SPH_R" ).change(function() {
    calculatePrice();
  });
  $( "#SPH_L" ).change(function() {
    calculatePrice();
  });
  $( "#CYL_R" ).change(function() {
    calculatePrice();
  });
  $( "#CYL_L" ).change(function() {
    calculatePrice();
  });

  $(".radioTab2").click(function(){
    tab2Price=$(this).attr("price");
    $("#sum_option").text($(this).attr("prod"));
    calculatePrice();
  })

  $(".radioTab3").click(function(){
    tab3Price=$(this).attr("price");
    $("#sum_coating").text($(this).attr("prod"));
    calculatePrice();
  })


  function calculatePrice()
  {
    var precioTotal = 0;

    var sph = $( "#SPH_R" ).val().replace("+", "").replace("-", "");
      if(sph)
      {
        if(sph<=2)
          precioTotal+={$texto.escala1};
        if( (sph>2)&&(sph<=4))
          precioTotal+={$texto.escala2};
        if(sph>4)
          precioTotal+={$texto.escala3};
      }


      sph = $( "#SPH_L" ).val().replace("+", "").replace("-", "");
      if(sph)
      {

        if(sph<=2)
          precioTotal+={$texto.escala1};
        if( (sph>2)&&(sph<=4))
          precioTotal+={$texto.escala2};
        if(sph>4)
          precioTotal+={$texto.escala3};
      }


    var cyl = $( "#CYL_R" ).val().replace("+", "").replace("-", "");
      if(cyl)
      {
        if(cyl<=2)
          precioTotal+={$texto.escala4};
        if( cyl>2)
          precioTotal+={$texto.escala5};
      }      

      cyl = $( "#CYL_L" ).val().replace("+", "").replace("-", "");
      if(cyl)
      {
        if(cyl<=2)
          precioTotal+={$texto.escala4};
        if( cyl>2)
          precioTotal+={$texto.escala5};
      }

      precioTotal+=parseFloat(tab2Price);
      precioTotal+=parseFloat(tab3Price);




      $(".price").html("$"+precioTotal);
  }

});
/*
$(document).ready(function()
{
	//Make Selected Radio button according to the Default selected Lensoption,Lens Coating dropdown
	var lenoption_dropdown = $('#group_7').val();
	var lencoating_dropdown = $('#group_8').val();
   
	$('input:radio[name=lensoption][value='+lenoption_dropdown+']').attr("checked","checked");
	
	if(lencoating_dropdown==55)
	$('input:radio[name=lenscoating][value=3]').attr("checked","checked");
	if(lencoating_dropdown==48)
	$('input:radio[name=lenscoating][value=1]').attr("checked","checked");
	if(lencoating_dropdown==52)
	$('input:radio[name=lenscoating][value=2]').attr("checked","checked");
   
	var single_option = ["84", "64", "66", "65"];
	var progressives_option = ["74", "76", "75", "77", "88", "78", "79"];
	var readding_option = ["86", "80", "82", "81"];
	
	var single_select = single_option.indexOf(lenoption_dropdown);
	var progressives_select = progressives_option.indexOf(lenoption_dropdown);
	var readding_select = readding_option.indexOf(lenoption_dropdown);
	
	if(single_select>=0)
	{
	$('#Standard').show();
	$('#Photochromic').hide();
	$('#Sunglasses').hide();
	$('#lensoptionmsg').hide();
	$('input:radio[name=prescription]:nth(0)').attr("checked","checked");
	}
	else if(progressives_select>=0)
	{
	$('#Standard').hide();
	$('#Photochromic').show();
	$('#Sunglasses').hide();
	$('#lensoptionmsg').hide();
	$('input:radio[name=prescription]:nth(1)').attr("checked","checked");
	 $('#ADD_L').show();
	 $('#ADD_R').show();
	 $('#ADD_MSG').show();
	 $('#ADD_HEAD').show();
	}
	else if(readding_select>=0)
	{
	$('#Standard').hide();
	$('#Photochromic').hide();
	$('#Sunglasses').show();
	$('#lensoptionmsg').hide();
	$('input:radio[name=prescription]:nth(2)').attr("checked","checked");
	 $('#ADD_L').show();
	 $('#ADD_R').show();
	 $('#ADD_MSG').show();
	 $('#ADD_HEAD').show();
	}
	
	
	
   //alert(lencoating_dropdown);
});
*/
</script>
</div>
</div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Resumen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div >
<div id="data">
<table class="popup_sum">
<tbody><tr>
<td width="150px">{$texto.monofocal} </td>
<td><span id="sum_purpose"></span></td>
</tr>
<tr>
<td colspan="2">
<table width="100%">
<tbody><tr><td><h3>{$texto.ojo}</h3></td><td><h3>{$texto.sph}</h3></td><td><h3>{$texto.cyl}</h3></td><td><h3>{$texto.axis}</h3></td></tr>
<tr><td><h3>{$texto.odDerecha}</h3></td>
<td>
<span id="sum_sphr">Not Mentioned</span>
</td>
<td>
<span id="sum_cylr">Not Mentioned</span>
</td>
<td>
<span id="sum_axisr">Not Mentioned</span>
</td>
</tr>
<tr><td><h3>{$texto.odIzquierda}</h3></td>
<td>
<span id="sum_sphl">Not Mentioned</span>
</td>
<td>
<span id="sum_cyll">Not Mentioned</span>
</td>
<td>
<span id="sum_axisl">Not Mentioned</span>
</td>
</tr>
</tbody></table>

</td>
</tr>

<tr>
<td>{$texto.dp} </td>
<td><span id="sum_pd">Not Mentioned</span></td>
</tr>
<!--<tr>
<td>LENS TYPE: </td>
<td><span id="sum_lenstype">Not Mentioned</span></td>
</tr>-->
<tr>
<td>{$texto2.titulo} </td>
<td><span id="sum_option">Not Mentioned</span></td>
</tr>
<tr>
<td>{$texto3.titulo} </td>
<td><span id="sum_coating">Not Mentioned</span></td>
</tr>
<tr>
<td>Cantidad: </td>
<td><span id="sum_qty">1</span></td>
</tr>
</tbody></table>

<div class="bordercolor">

<span class="our_price_display" style="margin:10px 246px 10px 20px; color: #424242;font-size: 14px;font-weight:bold;">{$texto.precio}
<span id="our_price_display_popup" class="price" style="color: #424242;font-size: 14px;font-weight:bold;"></span>
</span>
<a class="exclusive" href="javascript:document.getElementById('add2cartbtn').click();">Agregar al Carrito</a>
</div>

</div>
</div>






      </div>
      <div class="modal-footer">
      <!--
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        -->
      </div>
    </div>
  </div>
</div>

<script>
  var url ="{url entity='module' name='appcustomizer' controller='ajaxfunc' params = []}";
  var pid = 64;
$.ajax({
    url : url+'&action=savecustomdataAction',
    type : "POST",
    data : { customdata : 'xxxxxxx', qty : 1, pid : pid },

    success : function(response) {
      if(response.message == true) {
        console.log("yeaaaaa");
        $('#addtocart_form').submit();
      }
    }
  });
</script>
<form name="addtocart" id="addtocart_form" method="POST" action="{$urls.pages.cart}">
<input type="hidden" name="id_product" id="product_id" value="{Tools::getValue('pid')}" />
  <input type="hidden" name="token" value="{$static_token}">

// Your Code Here...

 <input type="submit" id="addtocart" class="cart-btn" value="Add To Cart" /> 

 xxxxxxxxx