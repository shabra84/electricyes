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

    <div class="panel">
        <h3><i class="icon icon-credit-card"></i> {l s='Optica' mod='optica'}</h3>
        <p>
            <strong>{l s='Here is my new generic module!' mod='optica'}</strong><br />
            {l s='Thanks to PrestaShop, now I have a great module.' mod='optica'}<br />
            {l s='I can configure it using the following configuration form.' mod='optica'}
        </p>
        <br />
        <p>
            {l s='This module will boost your sales!' mod='optica'}
        </p>
    </div>
    <!--
    <div class="panel">
        <h3><i class="icon icon-tags"></i> {l s='Documentation' mod='optica'}</h3>
        <p>
            &raquo; {l s='You can get a PDF documentation to configure this module' mod='optica'} :
            <ul>
                <li><a href="#" target="_blank">{l s='English' mod='optica'}</a></li>
                <li><a href="#" target="_blank">{l s='French' mod='optica'}</a></li>
            </ul>
        </p>
    </div>
    -->

    <div class="panel">
        <h3><i class="icon icon-tags"></i> {l s='Ajustes' mod='optica'}</h3>

        <div id="exTab1" class="container containerTab">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#1a" data-toggle="tab">Medidas Receta</a>
                </li>
                <li>
                	<a href="#2a" data-toggle="tab">Opciones de Lentes</a>
                </li>
                <li>
                	<a href="#3a" data-toggle="tab">Tratamientos</a>
                </li>
            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                    <form class="text-center border border-light p-5" method="POST">
                        <input type="hidden" name="sub" value="1">
						<div class="form-group">
		                    <label for="form_name">Titulo </label>
		                    <input id="form_name" type="text" name="titulo" class="form-control" placeholder="Titulo del Tab" required="required" value="{$texto.titulo}">
		                </div>
                        <div class="form-group">
                            <label for="form_name">Sub Titulo</label>
                            <input id="form_name" type="text" name="subtitulo" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="{$texto.subtitulo}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Monofocal</label>
                            <input id="form_name" type="text" name="monofocal" class="form-control" placeholder="Monofocal" required="required" value="{$texto.monofocal}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion</label>
                            <input id="form_name" type="text" name="descripcion" class="form-control" placeholder="Descripcion" required="required" value="{$texto.descripcion}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Link Receta</label>
                            <input id="form_name" type="text" name="linkReceta" class="form-control" placeholder="linkReceta" required="required" value="{$texto.linkReceta}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Ojo</label>
                            <input id="form_name" type="text" name="ojo" class="form-control" placeholder="Ojo" required="required" value="{$texto.ojo}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">OD(Derecha)</label>
                            <input id="form_name" type="text" name="odDerecha" class="form-control" placeholder="OD Derecha" required="required" value="{$texto.odDerecha}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">OD(Izquierda)</label>
                            <input id="form_name" type="text" name="odIzquierda" class="form-control" placeholder="OD Izquierda" required="required" value="{$texto.odIzquierda}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">SPH</label>
                            <input id="form_name" type="text" name="sph" class="form-control" placeholder="SPH" required="required" value="{$texto.sph}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">CYL</label>
                            <input id="form_name" type="text" name="cyl" class="form-control" placeholder="CYL" required="required" value="{$texto.cyl}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">EJE</label>
                            <input id="form_name" type="text" name="axis" class="form-control" placeholder="axis" required="required" value="{$texto.axis}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion 2</label>
                            <input id="form_name" type="text" name="des2" class="form-control" placeholder=""  value="{$texto.des2}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion 3</label>
                            <input id="form_name" type="text" name="des3" class="form-control" placeholder="" required="required" value="{$texto.des3}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">DP (DISTANCIA PUPILAR)</label>
                            <input id="form_name" type="text" name="dp" class="form-control" placeholder="" required="required" value="{$texto.dp}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion 4</label>
                            <input id="form_name" type="text" name="des4" class="form-control" placeholder="" required="required" value="{$texto.des4}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion 5</label>
                            <input id="form_name" type="text" name="des5" class="form-control" placeholder="" required="required" value="{$texto.des5}" >
                        </div>

                        <div class="form-group">
                            <label for="form_name">Precio</label>
                            <input id="form_name" type="text" name="precio" class="form-control" placeholder="Texto del Precio" required="required" value="{$texto.precio}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Anterior</label>
                            <input id="form_name" type="text" name="anterior" class="form-control" placeholder="Anterior" required="required" value="{$texto.anterior}" >
                        </div>

                        <div class="form-group">
                            <label for="form_name">Siguiente</label>
                            <input id="form_name" type="text" name="siguiente" class="form-control" placeholder="Siguiente" required="required" value="{$texto.siguiente}" >
                        </div>
                        <hr>
                        <h3>Precios de las escalas SPH</h3>
                        <div class="form-group">
                            <label for="form_name">Escala 1 + - 0.25 A + - 2.00</label>
                            <input id="form_name" type="text" name="escala1" class="form-control" placeholder="" required="required" value="{$texto.escala1}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Escala 2 + - 2.25 A + - 4.00</label>
                            <input id="form_name" type="text" name="escala2" class="form-control" placeholder="" required="required" value="{$texto.escala2}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Escala 3 + - 4 .25 A + - 6.00</label>
                            <input id="form_name" type="text" name="escala3" class="form-control" placeholder="" required="required" value="{$texto.escala3}" >
                        </div>
                        <h3>Precios de las escalas CYL</h3>
                        <div class="form-group">
                            <label for="form_name">Escala 1 + - 0.25 A + - 2.00</label>
                            <input id="form_name" type="text" name="escala4" class="form-control" placeholder="" required="required" value="{$texto.escala4}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Escala 2 + - 2.25 A + - 3.75</label>
                            <input id="form_name" type="text" name="escala5" class="form-control" placeholder="" required="required" value="{$texto.escala5}" >
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
                            <label for="form_name">Titulo </label>
                            <input id="form_name" type="text" name="titulo" class="form-control" placeholder="Titulo del Tab" required="required" value="{$texto2.titulo}">
                        </div>
                        <div class="form-group">
                            <label for="form_name">Sub Titulo</label>
                            <input id="form_name" type="text" name="subtitulo" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="{$texto2.subtitulo}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Cantidad de Opciones</label>
                            <input id="form_name" type="text" name="cantOpcion" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="{$texto2.cantOpcion}" >
                        </div>
                        {for $foo=1 to $texto2.cantOpcion}
                        {assign var="tmp" value="op_$foo"} 
                        {assign var="tmp2" value="precio_$foo"} 

                        <div class="form-group">
                            <label for="form_name">Titulo #{$foo}</label>
                            <input id="form_name" type="text" name="op_{$foo}" class="form-control" placeholder="Titulo #{$foo}" value="{$texto2.$tmp}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Precio #{$foo}</label>
                            <input id="form_name" type="text" name="precio_{$foo}" class="form-control" placeholder="Precio #{$foo}" value="{$texto2.$tmp2}" >
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
                            <label for="form_name">Titulo </label>
                            <input id="form_name" type="text" name="titulo" class="form-control" placeholder="Titulo del Tab" required="required" value="{$texto3.titulo}">
                        </div>
                        <div class="form-group">
                            <label for="form_name">Sub Titulo</label>
                            <input id="form_name" type="text" name="subtitulo" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="{$texto3.subtitulo}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Cantidad de Opciones</label>
                            <input id="form_name" type="text" name="cantOpcion" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="{$texto3.cantOpcion}" >
                        </div>
                        {for $foo=1 to $texto3.cantOpcion}
                        {assign var="tmp" value="op_$foo"} 
                        {assign var="tmp2" value="precio_$foo"} 

                        <div class="form-group">
                            <label for="form_name">Titulo #{$foo}</label>
                            <input id="form_name" type="text" name="op_{$foo}" class="form-control" placeholder="Titulo #{$foo}" value="{$texto3.$tmp}" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Precio #{$foo}</label>
                            <input id="form_name" type="text" name="precio_{$foo}" class="form-control" placeholder="Precio #{$foo}" value="{$texto3.$tmp2}" >
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

                <div class="tab-pane" id="4a">
                    <h3>We use css to change the background color of the content to be equal to the tab</h3>
                </div>
            </div>
        </div>


    </div>