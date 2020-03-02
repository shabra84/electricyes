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


<!--
<link href="https://www.niftyglasses.com/themes/theme392/css/global.css" rel="stylesheet" type="text/css" media="all" />
-->
	<!--	
	<link href="https://www.niftyglasses.com/css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" media="screen" />

	
	<link href="https://www.niftyglasses.com/modules/blockstore/blockstore.css" rel="stylesheet" type="text/css" media="all" />

	
	<link href="https://www.niftyglasses.com/css/jquery.autocomplete.css" rel="stylesheet" type="text/css" media="all" />

	

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	-->


	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery.idTabs.modified.js"></script>

<!--	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery.easing.1.3.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/tools.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery.fancybox-1.3.4.js"></script>

	

	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery.scrollTo-1.4.2-min.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery.serialScroll-1.2.2-min.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/themes/theme392/js/tools.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/themes/theme392/js/product.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/modules/blockcart/ajax-cart.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/themes/theme392/js/tools/treeManagement.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery.autocomplete.js"></script>

	
	<script type="text/javascript" src="https://www.niftyglasses.com/js/jquery/jquery.validate.creditcard2-1.0.1.js"></script>
-->
	
<div class="opticaFull">
    <ul class="idTabs">
			
			<li><a class="selected" id="idTabs_select" href="#idTabs">Prescription</a></li>
			
			<!--<li><a id="idTabs1_select" href="#idTabs1">Lens Type</a></li>-->
			
			<li><a id="idTabs2_select" href="#idTabs2" class="">Lens Options</a></li>
			
			<li><a id="idTabs3_select" href="#idTabs3" class="">Lens Coatings</a></li>

		</ul>

<div class="customization_block bgcolor bordercolor">	

<div id="idTabs" class="">
<br>	
<table width="480px" cellpadding="5px" class="customfield">
<tbody><tr><td colspan="3"><h3>How will you use your glasses?</h3><br></td></tr>
<tr>
<td><input type="radio" id="prescription" name="prescription" value="Single Vision"> <span>Single Vision</span></td>
<td><input type="radio" id="prescription" name="prescription" value="Progressives and Bifocals"> <span>Progressives and Bifocals 

</span></td>
<td><input type="radio" id="prescription" name="prescription" value="Reading"> <span>Reading</span></td>
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
 console.log("inicia2");
 $('#tab_1_next').click(function() {
 	console.log("22222");
	$('a#idTabs2_select').get(0).click();
 });
   $('#tab_3_prev').click(function() {
	$('a#idTabs_select').get(0).click();
 });
  $('#tab_3_next').click(function() {
  	console.log("Xxxxxxxxxxxxxx");
	$('a#idTabs3_select').get(0).click();
 });
  $('#tab_4_prev').click(function() {
	$('a#idTabs2_select').get(0).click();
 });
 
 
   
 //popup Summary Details

 $('#inline').click(function() {
 
 var lenscoatingchange ="";
 var lenscoating="";
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
	
 });
 
	 
});

</script>
<p>
Enter the details below as they appear on your prescription from your doctor. 
Note: Glasses prescription are different from contact lens prescription. <span id="clickme"><a href="" onclick="return false;">How do I read my prescription?</a></span> 
</p>
<div id="reading_presciption" style="display: none;">
<br>
<img id="book" width="420px" src="{$img1}" alt="">

</div></td>
</tr>
<tr><td colspan="3" cellpadding="5px">
<br>
<table width="100%">
<tbody><tr><td><h3>EYE</h3></td><td><h3>SPH</h3></td><td><h3>CYL</h3></td><td><h3>AXIS</h3></td><td><h3 id="ADD_HEAD" style="display: block;">ADD</h3><br></td></tr>
<tr><td><h3>OD (Right)</h3></td>
<td>
<select name="SPH_R" id="SPH_R" style="width: 80px;">
<option value="" selected="selected">None</option>
<option value="-12.00">-12.00</option>
<option value="-11.75">-11.75</option>
<option value="-11.50">-11.50</option>
<option value="-11.25">-11.25</option>
<option value="-11.00">-11.00</option>
<option value="-10.75">-10.75</option>
<option value="-10.50">-10.50</option>
<option value="-10.25">-10.25</option>
<option value="-10.00">-10.00</option>
<option value="-9.75">-9.75</option>
<option value="-9.50">-9.50</option>
<option value="-9.25">-9.25</option>
<option value="-9.00">-9.00</option>
<option value="-8.75">-8.75</option>
<option value="-8.50">-8.50</option>
<option value="-8.25">-8.25</option>
<option value="-8.00">-8.00</option>
<option value="-7.75">-7.75</option>
<option value="-7.50">-7.50</option>
<option value="-7.25">-7.25</option>
<option value="-7.00">-7.00</option>
<option value="-6.75">-6.75</option>
<option value="-6.50">-6.50</option>
<option value="-6.25">-6.25</option>
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
<option value="" selected="selected">None</option>
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
<option value="" selected="selected">None</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
<option value="84">84</option>
<option value="85">85</option>
<option value="86">86</option>
<option value="87">87</option>
<option value="88">88</option>
<option value="89">89</option>
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>
<option value="96">96</option>
<option value="97">97</option>
<option value="98">98</option>
<option value="99">99</option>
<option value="100">100</option>
<option value="101">101</option>
<option value="102">102</option>
<option value="103">103</option>
<option value="104">104</option>
<option value="105">105</option>
<option value="106">106</option>
<option value="107">107</option>
<option value="108">108</option>
<option value="109">109</option>
<option value="110">110</option>
<option value="111">111</option>
<option value="112">112</option>
<option value="113">113</option>
<option value="114">114</option>
<option value="115">115</option>
<option value="116">116</option>
<option value="117">117</option>
<option value="118">118</option>
<option value="119">119</option>
<option value="120">120</option>
<option value="121">121</option>
<option value="122">122</option>
<option value="123">123</option>
<option value="124">124</option>
<option value="125">125</option>
<option value="126">126</option>
<option value="127">127</option>
<option value="128">128</option>
<option value="129">129</option>
<option value="130">130</option>
<option value="131">131</option>
<option value="132">132</option>
<option value="133">133</option>
<option value="134">134</option>
<option value="135">135</option>
<option value="136">136</option>
<option value="137">137</option>
<option value="138">138</option>
<option value="139">139</option>
<option value="140">140</option>
<option value="141">141</option>
<option value="142">142</option>
<option value="143">143</option>
<option value="144">144</option>
<option value="145">145</option>
<option value="146">146</option>
<option value="147">147</option>
<option value="148">148</option>
<option value="149">149</option>
<option value="150">150</option>
<option value="151">151</option>
<option value="152">152</option>
<option value="153">153</option>
<option value="154">154</option>
<option value="155">155</option>
<option value="156">156</option>
<option value="157">157</option>
<option value="158">158</option>
<option value="159">159</option>
<option value="160">160</option>
<option value="161">161</option>
<option value="162">162</option>
<option value="163">163</option>
<option value="164">164</option>
<option value="165">165</option>
<option value="166">166</option>
<option value="167">167</option>
<option value="168">168</option>
<option value="169">169</option>
<option value="170">170</option>
<option value="171">171</option>
<option value="172">172</option>
<option value="173">173</option>
<option value="174">174</option>
<option value="175">175</option>
<option value="176">176</option>
<option value="177">177</option>
<option value="178">178</option>
<option value="179">179</option>
<option value="180">180</option>
</select>
</td>

<td>
<select name="ADD_R" id="ADD_R" style="display: inline-block;">
<option value="" selected="selected">None</option>
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
<tr><td><h3>OS (Left)</h3></td>
<td>
<select name="SPH_L" id="SPH_L" style="width: 80px;">
<option value="" selected="selected">None</option>
<option value="-12.00">-12.00</option>
<option value="-11.75">-11.75</option>
<option value="-11.50">-11.50</option>
<option value="-11.25">-11.25</option>
<option value="-11.00">-11.00</option>
<option value="-10.75">-10.75</option>
<option value="-10.50">-10.50</option>
<option value="-10.25">-10.25</option>
<option value="-10.00">-10.00</option>
<option value="-9.75">-9.75</option>
<option value="-9.50">-9.50</option>
<option value="-9.25">-9.25</option>
<option value="-9.00">-9.00</option>
<option value="-8.75">-8.75</option>
<option value="-8.50">-8.50</option>
<option value="-8.25">-8.25</option>
<option value="-8.00">-8.00</option>
<option value="-7.75">-7.75</option>
<option value="-7.50">-7.50</option>
<option value="-7.25">-7.25</option>
<option value="-7.00">-7.00</option>
<option value="-6.75">-6.75</option>
<option value="-6.50">-6.50</option>
<option value="-6.25">-6.25</option>
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
<option value="" selected="selected">None</option>
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
<option value="" selected="selected">None</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
<option value="84">84</option>
<option value="85">85</option>
<option value="86">86</option>
<option value="87">87</option>
<option value="88">88</option>
<option value="89">89</option>
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>
<option value="96">96</option>
<option value="97">97</option>
<option value="98">98</option>
<option value="99">99</option>
<option value="100">100</option>
<option value="101">101</option>
<option value="102">102</option>
<option value="103">103</option>
<option value="104">104</option>
<option value="105">105</option>
<option value="106">106</option>
<option value="107">107</option>
<option value="108">108</option>
<option value="109">109</option>
<option value="110">110</option>
<option value="111">111</option>
<option value="112">112</option>
<option value="113">113</option>
<option value="114">114</option>
<option value="115">115</option>
<option value="116">116</option>
<option value="117">117</option>
<option value="118">118</option>
<option value="119">119</option>
<option value="120">120</option>
<option value="121">121</option>
<option value="122">122</option>
<option value="123">123</option>
<option value="124">124</option>
<option value="125">125</option>
<option value="126">126</option>
<option value="127">127</option>
<option value="128">128</option>
<option value="129">129</option>
<option value="130">130</option>
<option value="131">131</option>
<option value="132">132</option>
<option value="133">133</option>
<option value="134">134</option>
<option value="135">135</option>
<option value="136">136</option>
<option value="137">137</option>
<option value="138">138</option>
<option value="139">139</option>
<option value="140">140</option>
<option value="141">141</option>
<option value="142">142</option>
<option value="143">143</option>
<option value="144">144</option>
<option value="145">145</option>
<option value="146">146</option>
<option value="147">147</option>
<option value="148">148</option>
<option value="149">149</option>
<option value="150">150</option>
<option value="151">151</option>
<option value="152">152</option>
<option value="153">153</option>
<option value="154">154</option>
<option value="155">155</option>
<option value="156">156</option>
<option value="157">157</option>
<option value="158">158</option>
<option value="159">159</option>
<option value="160">160</option>
<option value="161">161</option>
<option value="162">162</option>
<option value="163">163</option>
<option value="164">164</option>
<option value="165">165</option>
<option value="166">166</option>
<option value="167">167</option>
<option value="168">168</option>
<option value="169">169</option>
<option value="170">170</option>
<option value="171">171</option>
<option value="172">172</option>
<option value="173">173</option>
<option value="174">174</option>
<option value="175">175</option>
<option value="176">176</option>
<option value="177">177</option>
<option value="178">178</option>
<option value="179">179</option>
<option value="180">180</option>
</select>
</td>

<td>
<select name="ADD_L" id="ADD_L" style="display: inline-block;">
<option value="" selected="selected">None</option>
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
<tr>
<td width="36%" colspan="2">
<p class="small">Enter 0.00 for non-prescription lenses</p>
</td>
<td width="36%" colspan="2">
<p class="small">*Required for astigmatism (Leave blank if not on prescription)</p>
</td>
<td width="24%">
<p class="small" id="ADD_MSG" style="display: block;">Enter 0.00 for non-prescription lenses *Required for astigmatism (Leave blank if not on prescription)*Required for reading and progressives (Leave blank if not on prescription)</p>
</td>
</tr>
</tbody></table>
<br>
</td>
</tr>

<tr><td colspan="3"><h3 style="display:inline;">Pupillary Distance (PD)</h3>
<select name="PD" id="PD" style="margin-top: -5px;">
<option value="">None</option>
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
I can't find the PD on my prescription. <span id="clickme1"><a href="" onclick="return false;">How do I measure my PD?</a></span> 
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
<span class="our_price_display" style="padding-top: 5px;margin:0 0 0 28px; color: #424242;font-size: 14px;font-weight:bold;">Net Price: 
<span id="our_price_display_tab1" class="price" style="color: #424242;font-size: 14px;font-weight:bold;">$169.00</span>
</span>
</td>
<td width="33%" align="right">
<a class="button_mini" id="tab_1_next">Next</a>
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
<tbody><tr><td colspan="2"><h3>Select Your Clear Lenses</h3><br></td></tr>
<tr><td colspan="2"><h3>Single Vision</h3><br></td></tr>
<tr>
<!--"  disabled > <span  class="disabled_label" -->
<td><input type="radio" id="lensoption" name="lensoption" value="64"> <span>Thin lenses ($49)</span></td>
<td><input type="radio" id="lensoption" name="lensoption" value="65"> <span>Ultra thin lenses ($99)</span><p><br></p></td>
</tr>
<tr>
<td><input type="radio" id="lensoption" name="lensoption" value="66"> <span>Transition lenses ($99)</span></td>
<td><input type="radio" id="lensoption" name="lensoption" value="84"> <span>Sunglass lenses Brown or Grey ($99)</span></td>
<td></td>
</tr>
</tbody></table>
<table width="480px" height="" cellpadding="5px" class="customfield" id="Photochromic" style="display: none;">
<tbody><tr><td colspan="3"><h3>Select Your Clear Lenses</h3><br></td></tr>
<tr><td colspan="3"><h3>Progressives</h3><br></td></tr>
<tr>
<td><input type="radio" id="lensoption" name="lensoption" value="77"> <span>Light weight Progressive ($159)</span></td>
<td><input type="radio" id="lensoption" name="lensoption" value="78"> <span>Transition progressives ($179)</span><p><br></p></td>
</tr>
<tr>
<td><input type="radio" id="lensoption" name="lensoption" value="79"> <span>Ultra thin  progressive ($299)</span></td>
<td><input type="radio" id="lensoption" name="lensoption" value="88"> <span>Sunglass Progressive ($149)</span><p><br></p></td>
</tr>
<tr><td colspan="2"><h3>Bifocals</h3><br></td></tr>
<tr>
<td><input type="radio" id="lensoption" name="lensoption" value="74"> <span>Bifocals with lines ($99)</span></td>
<td><input type="radio" id="lensoption" name="lensoption" value="75"> <span>Transition lined bifocals ($119)</span><p><br></p></td>
</tr>
<tr>
<td><input type="radio" id="lensoption" name="lensoption" value="76"> <span>Sunglass lined bifocals ($149)</span></td>
<td></td>
</tr>
</tbody></table>
<table width="480px" height="" cellpadding="5px" class="customfield" id="Sunglasses" style="">
<tbody><tr><td colspan="2"><h3>Select Your Clear Lenses</h3><br></td></tr>
<tr><td colspan="2"><h3>Reading</h3><br></td></tr>
<tr>
<td><input type="radio" id="lensoption" name="lensoption" value="80"> <span>Thin lenses ($49)</span></td>
<td><input type="radio" id="lensoption" name="lensoption" value="81"> <span>Ultra thin lenses ($99)</span><p><br></p></td>
</tr>
<tr>
<td><input type="radio" id="lensoption" name="lensoption" value="82"> <span>Transition lenses ($99)</span></td>
<td><input type="radio" id="lensoption" name="lensoption" value="86"> <span>Sunglass lenses Brown or Grey ($99)</span></td>
<td></td>
</tr>
</tbody></table><br><br><br>
<table width="480px" class="nextprev">
<tbody><tr>
<td width="33%" align="left">
<a class="button_mini" id="tab_3_prev">Previous</a>
</td>
<td width="33%" align="center">
<span class="our_price_display" style="padding-top: 5px;margin:0 0 0 28px; color: #424242;font-size: 14px;font-weight:bold;">Net Price: 
<span id="our_price_display_tab2" class="price" style="color: #424242;font-size: 14px;font-weight:bold;">$169.00</span>
</span>
</td>
<td width="33%" align="right">
<a class="button_mini" id="tab_3_next">Next</a>
</td>
</tr>
</tbody></table>
</div>


<div id="idTabs3" class="block_hidden_only_for_screen">
<br>	
<table width="450px" height="" cellpadding="5px" class="customfield">
<tbody><tr><td colspan="2"><h3>Select Lens Coatings (optional)</h3><br></td></tr>
<tr><td colspan="2"><input type="radio" class="lenscoating" id="lenscoating" name="lenscoating" value="3"> <span>Non Coating</span></td>
</tr>
<tr>
<td colspan="2">
<p class="small" style="color:#ff0000;">
* Please Select option "Non Coating". If Coating not needed<br>
</p>
<p><br></p>
</td>
</tr>
<tr>
<td colspan="2"><input type="radio" class="lenscoating" id="lenscoating" name="lenscoating" value="1"> <span>Anti scratch, UV Coating ($19)</span><p><br></p></td>
</tr>
<tr>
<td colspan="2"><input type="radio" class="lenscoating" id="lenscoating" name="lenscoating" value="2"> <span>Multilayered Anti Glare, Anti scratch, UV Coating ($39)</span></td>
</tr>
<tr>
<td colspan="2">
<p class="small ">
Lense coating that improves night driving , protects the lenses against scratching , and improves the appearance of your glasses.<br>
</p>
<p><br></p>
</td>
</tr>


<!--<tr>
<td colspan="3"><br><br><input type="checkbox" id="selectall"> <span>Bundle all Three Coatings</span>
<p class="small">
Premium Anti-Reflective coating, UV Protective coating and Scratch Resistant coating all included
</p></td>
</tr>-->

</tbody></table><br><br><br>
<table width="480px" class="nextprev">
<tbody><tr>
<td width="33%" align="left">
<a class="button_mini" id="tab_4_prev">Previous</a>
</td>
<td width="33%" align="center">
<span class="our_price_display" style="padding-top: 5px;margin:0 0 0 28px; color: #424242;font-size: 14px;font-weight:bold;">Net Price: 
<span id="our_price_display_tab3" class="price" style="color: #424242;font-size: 14px;font-weight:bold;">$169.00</span>
</span>
</td>
<td width="33%" align="right">
<a id="inline" href="#data" rel="popupsum" class="thickbox bordercolor shown button_mini" title="Order Summary">Finish</a>
<div style="display:none">
<div id="data">
<table class="popup_sum">
<tbody><tr>
<td width="150px">GLASSES PURPOSE: </td>
<td><span id="sum_purpose">Not Mentioned</span></td>
</tr>
<tr>
<td colspan="2">
<table width="100%">
<tbody><tr><td><h3>EYE</h3></td><td><h3>SPH</h3></td><td><h3>CYL</h3></td><td><h3>AXIS</h3></td><td>ADD</td></tr>
<tr><td><h3>OD (Right)</h3></td>
<td>
<span id="sum_sphr">Not Mentioned</span>
</td>
<td>
<span id="sum_cylr">Not Mentioned</span>
</td>
<td>
<span id="sum_axisr">Not Mentioned</span>
</td>
<td>
<span id="sum_addr">Not Mentioned</span>
</td>
</tr>
<tr><td><h3>OS (Left)</h3></td>
<td>
<span id="sum_sphl">Not Mentioned</span>
</td>
<td>
<span id="sum_cyll">Not Mentioned</span>
</td>
<td>
<span id="sum_axisl">Not Mentioned</span>
</td>
<td>
<span id="sum_addl">Not Mentioned</span>
</td>
</tr>
</tbody></table>

</td>
</tr>

<tr>
<td>PUPILLARY DISTANCE: </td>
<td><span id="sum_pd">Not Mentioned</span></td>
</tr>
<!--<tr>
<td>LENS TYPE: </td>
<td><span id="sum_lenstype">Not Mentioned</span></td>
</tr>-->
<tr>
<td>LENS OPTIONS: </td>
<td><span id="sum_option">Not Mentioned</span></td>
</tr>
<tr>
<td>LENS COATINGS: </td>
<td><span id="sum_coating">Not Mentioned</span></td>
</tr>
<tr>
<td>QUANTITY: </td>
<td><span id="sum_qty">Not Mentioned</span></td>
</tr>
</tbody></table>

<div class="price bordercolor">
<span class="our_price_display" style="margin:10px 246px 10px 20px; color: #424242;font-size: 14px;font-weight:bold;">Net Price: 
<span id="our_price_display_popup" class="price" style="color: #424242;font-size: 14px;font-weight:bold;">$169.00</span>
</span>
<a class="exclusive" href="javascript:document.getElementById('add2cartbtn').click();">Add to cart</a>
</div>

</div>
</div>
</td>
</tr>
</tbody></table>
<script>
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