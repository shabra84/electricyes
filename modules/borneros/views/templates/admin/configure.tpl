{*
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2019 PrestaShop SA
    * @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    <style>
        #exTab1 .tab-content {
            color: white;
            background-color: #428bca;
            padding: 20px 15px;
        }

        .containerTab {
            width: 100% !important;
        }

        /* remove border radius for the tab */

        #exTab1 .nav-pills>li>a {
            border-radius: 0;
        }
        .bootstrap label{
        	text-align: left;
        	width: 100%;
        }
    </style>
    {assign var=texto value=$texto|unserialize}
    {assign var=texto2 value=$texto2|unserialize}
    {assign var=texto3 value=$texto3|unserialize}

    <!--
    <div class="panel">
        <h3><i class="icon icon-credit-card"></i> {l s='Borneros' mod='borneros'}</h3>
        <p>
            <strong>{l s='Here is my new generic module!' mod='borneros'}</strong><br />
            {l s='Thanks to PrestaShop, now I have a great module.' mod='borneros'}<br />
            {l s='I can configure it using the following configuration form.' mod='borneros'}
        </p>
        <br />
        <p>
            {l s='This module will boost your sales!' mod='borneros'}
        </p>
    </div>
    -->
    <!--
    <div class="panel">
        <h3><i class="icon icon-tags"></i> {l s='Documentation' mod='borneros'}</h3>
        <p>
            &raquo; {l s='You can get a PDF documentation to configure this module' mod='borneros'} :
            <ul>
                <li><a href="#" target="_blank">{l s='English' mod='borneros'}</a></li>
                <li><a href="#" target="_blank">{l s='French' mod='borneros'}</a></li>
            </ul>
        </p>
    </div>
    -->

    <div class="panel">
        <h3><i class="icon icon-tags"></i> {l s='Ajustes' mod='borneros'}</h3>

        <div id="exTab1" class="container containerTab">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#1a" data-toggle="tab">Soporte Final</a>
                </li>
                <li>
                    <a href="#2a" data-toggle="tab">Bornas</a>
                </li>
                <li>
                    <a href="#3a" data-toggle="tab">Tapa Bornas</a>
                </li>
            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                    <form class="text-center border border-light p-5" method="POST">
                        <input type="hidden" name="sub" value="1">
						<div class="form-group">
		                    <label for="form_name">Ancho </label>
		                    <input id="form_name" type="text" name="ancho1" class="form-control" placeholder="Ancho" required="required" value="{$texto.ancho1}">
		                </div>
                        <div class="form-group">
                            <label for="form_name">Alto</label>
                            <input id="form_name" type="text" name="alto1" class="form-control" placeholder="Alto" required="required" value="{$texto.alto1}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Profundo</label>
                            <input id="form_name" type="text" name="profundo1" class="form-control" placeholder="Profundo1" required="required" value="{$texto.profundo1}" >
                        </div>

		                <div class="row">
				            <div class="col-md-12">
					            <div class="col-md-12">
					                <input type="submit" class="btn btn-success btn-send" value="Guardar">
					            </div>
					        </div>
				        </div>


                    </form>
                </div>
                <div class="tab-pane" id="2a">
                        <form class="text-center border border-light p-5" method="POST">
                        <input type="hidden" name="sub" value="2">

                        <div class="form-group">
                            <label for="form_name">Cantidad de Bornas</label>
                            <input id="form_name" type="text" name="cantOpcion" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="{$texto2.cantOpcion}" >
                        </div>
                        {for $foo=1 to $texto2.cantOpcion}
                        {assign var="tmp" value="op_$foo"} 
                        {assign var="tmp2" value="xancho_$foo"} 
                        {assign var="tmp3" value="seccion_$foo"} 
                        {assign var="tmp4" value="xalto_$foo"} 
                        {assign var="tmp5" value="xprofundo_$foo"} 




                        <div class="form-group">
                            <label for="form_name">Titulo #{$foo}</label>
                            <input id="form_name" type="text" name="op_{$foo}" class="form-control" placeholder="Titulo #{$foo}" value="{$texto2.$tmp}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Ancho #{$foo}</label>
                        <input id="form_name" type="text" name="xancho_{$foo}" class="form-control" placeholder="Ancho #{$foo}" value="{$texto2.$tmp2}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Alto</label>
                            <input id="form_name" type="text" name="xalto_{$foo}" class="form-control" placeholder="Alto #{$foo}" value="{$texto2.$tmp4}" >
                            
                        </div>
                        <div class="form-group">
                            <label for="form_name">Profundo</label>
                            <input id="form_name" type="text" name="xprofundo_{$foo}" class="form-control" placeholder="Profundo {$foo}" value="{$texto2.$tmp5}">
                        </div>

                        <div class="form-group">
                            <label for="form_name">Seccion #{$foo}</label>
                            <select name="seccion_{$foo}" >
                                <option {if $texto2.$tmp3=="2.5" }  selected {/if} value="2.5">2.5</option>
                                <option {if $texto2.$tmp3=="4" }  selected {/if} value="4">4</option>
                                <option {if $texto2.$tmp3=="6" }  selected {/if} value="6">6</option>
                                <option {if $texto2.$tmp3=="10" }  selected {/if} value="10">10</option>
                                <option {if $texto2.$tmp3=="16" }  selected {/if} value="16">16</option>
                                <option {if $texto2.$tmp3=="25" }  selected {/if} value="25">25</option>
                                <option {if $texto2.$tmp3=="35" }  selected {/if} value="35">35</option>
                                <option {if $texto2.$tmp3=="50" }  selected {/if} value="50">50</option>
                                <option {if $texto2.$tmp3=="70" }  selected {/if} value="70">70</option>
                                <option {if $texto2.$tmp3=="95" }  selected {/if} value="95">95</option>
                                <option {if $texto2.$tmp3=="120" }  selected {/if} value="120">120</option>
                                <option {if $texto2.$tmp3=="150" }  selected {/if} value="150">150</option>
                                <option {if $texto2.$tmp3=="185" }  selected {/if} value="185">185</option>
                                <option {if $texto2.$tmp3=="240" }  selected {/if} value="240">240</option>
                            </select>
                        </div>
                        

                            
                        {/for}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Guardar">
                                </div>
                            </div>
                        </div>
                        </form>

                </div>
                <div class="tab-pane" id="3a">
                    <form class="text-center border border-light p-5" method="POST">
                        <input type="hidden" name="sub" value="3">
                        <div class="form-group">
                            <label for="form_name">Ancho </label>
                            <input id="form_name" type="text" name="ancho3" class="form-control" placeholder="Ancho" required="required" value="{$texto3.ancho3}">
                        </div>
                        <div class="form-group">
                            <label for="form_name">Alto</label>
                            <input id="form_name" type="text" name="alto3" class="form-control" placeholder="Alto" required="required" value="{$texto3.alto3}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Profundo</label>
                            <input id="form_name" type="text" name="profundo3" class="form-control" placeholder="Profundo1" required="required" value="{$texto3.profundo3}" >
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Guardar">
                                </div>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>


    </div>