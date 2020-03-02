<?php
/* Smarty version 3.1.32, created on 2020-02-29 22:22:41
  from '/home/nuevaelectricyes/public_html/modules/optica/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e5ad6214a6fc9_27340588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db5c26b56b578cd416c30560c8d68ac712344456' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/optica/views/templates/admin/configure.tpl',
      1 => 1564113111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5ad6214a6fc9_27340588 (Smarty_Internal_Template $_smarty_tpl) {
?>    <style>
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
    <?php $_smarty_tpl->_assignInScope('texto', unserialize($_smarty_tpl->tpl_vars['texto']->value));?>
    <?php $_smarty_tpl->_assignInScope('texto2', unserialize($_smarty_tpl->tpl_vars['texto2']->value));?>
    <?php $_smarty_tpl->_assignInScope('texto3', unserialize($_smarty_tpl->tpl_vars['texto3']->value));?>

    <div class="panel">
        <h3><i class="icon icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optica','mod'=>'optica'),$_smarty_tpl ) );?>
</h3>
        <p>
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here is my new generic module!','mod'=>'optica'),$_smarty_tpl ) );?>
</strong><br />
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks to PrestaShop, now I have a great module.','mod'=>'optica'),$_smarty_tpl ) );?>
<br />
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I can configure it using the following configuration form.','mod'=>'optica'),$_smarty_tpl ) );?>

        </p>
        <br />
        <p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module will boost your sales!','mod'=>'optica'),$_smarty_tpl ) );?>

        </p>
    </div>
    <!--
    <div class="panel">
        <h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documentation','mod'=>'optica'),$_smarty_tpl ) );?>
</h3>
        <p>
            &raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can get a PDF documentation to configure this module','mod'=>'optica'),$_smarty_tpl ) );?>
 :
            <ul>
                <li><a href="#" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'English','mod'=>'optica'),$_smarty_tpl ) );?>
</a></li>
                <li><a href="#" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'French','mod'=>'optica'),$_smarty_tpl ) );?>
</a></li>
            </ul>
        </p>
    </div>
    -->

    <div class="panel">
        <h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ajustes','mod'=>'optica'),$_smarty_tpl ) );?>
</h3>

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
		                    <input id="form_name" type="text" name="titulo" class="form-control" placeholder="Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['titulo'];?>
">
		                </div>
                        <div class="form-group">
                            <label for="form_name">Sub Titulo</label>
                            <input id="form_name" type="text" name="subtitulo" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['subtitulo'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Monofocal</label>
                            <input id="form_name" type="text" name="monofocal" class="form-control" placeholder="Monofocal" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['monofocal'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion</label>
                            <input id="form_name" type="text" name="descripcion" class="form-control" placeholder="Descripcion" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['descripcion'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Link Receta</label>
                            <input id="form_name" type="text" name="linkReceta" class="form-control" placeholder="linkReceta" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['linkReceta'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Ojo</label>
                            <input id="form_name" type="text" name="ojo" class="form-control" placeholder="Ojo" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['ojo'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">OD(Derecha)</label>
                            <input id="form_name" type="text" name="odDerecha" class="form-control" placeholder="OD Derecha" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['odDerecha'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">OD(Izquierda)</label>
                            <input id="form_name" type="text" name="odIzquierda" class="form-control" placeholder="OD Izquierda" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['odIzquierda'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">SPH</label>
                            <input id="form_name" type="text" name="sph" class="form-control" placeholder="SPH" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['sph'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">CYL</label>
                            <input id="form_name" type="text" name="cyl" class="form-control" placeholder="CYL" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['cyl'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">EJE</label>
                            <input id="form_name" type="text" name="axis" class="form-control" placeholder="axis" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['axis'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion 2</label>
                            <input id="form_name" type="text" name="des2" class="form-control" placeholder=""  value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['des2'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion 3</label>
                            <input id="form_name" type="text" name="des3" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['des3'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">DP (DISTANCIA PUPILAR)</label>
                            <input id="form_name" type="text" name="dp" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['dp'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion 4</label>
                            <input id="form_name" type="text" name="des4" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['des4'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Descripcion 5</label>
                            <input id="form_name" type="text" name="des5" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['des5'];?>
" >
                        </div>

                        <div class="form-group">
                            <label for="form_name">Precio</label>
                            <input id="form_name" type="text" name="precio" class="form-control" placeholder="Texto del Precio" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['precio'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Anterior</label>
                            <input id="form_name" type="text" name="anterior" class="form-control" placeholder="Anterior" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['anterior'];?>
" >
                        </div>

                        <div class="form-group">
                            <label for="form_name">Siguiente</label>
                            <input id="form_name" type="text" name="siguiente" class="form-control" placeholder="Siguiente" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['siguiente'];?>
" >
                        </div>
                        <hr>
                        <h3>Precios de las escalas SPH</h3>
                        <div class="form-group">
                            <label for="form_name">Escala 1 + - 0.25 A + - 2.00</label>
                            <input id="form_name" type="text" name="escala1" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['escala1'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Escala 2 + - 2.25 A + - 4.00</label>
                            <input id="form_name" type="text" name="escala2" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['escala2'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Escala 3 + - 4 .25 A + - 6.00</label>
                            <input id="form_name" type="text" name="escala3" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['escala3'];?>
" >
                        </div>
                        <h3>Precios de las escalas CYL</h3>
                        <div class="form-group">
                            <label for="form_name">Escala 1 + - 0.25 A + - 2.00</label>
                            <input id="form_name" type="text" name="escala4" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['escala4'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Escala 2 + - 2.25 A + - 3.75</label>
                            <input id="form_name" type="text" name="escala5" class="form-control" placeholder="" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['escala5'];?>
" >
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
                            <input id="form_name" type="text" name="titulo" class="form-control" placeholder="Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value['titulo'];?>
">
                        </div>
                        <div class="form-group">
                            <label for="form_name">Sub Titulo</label>
                            <input id="form_name" type="text" name="subtitulo" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value['subtitulo'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Cantidad de Opciones</label>
                            <input id="form_name" type="text" name="cantOpcion" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value['cantOpcion'];?>
" >
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['texto2']->value['cantOpcion']+1 - (1) : 1-($_smarty_tpl->tpl_vars['texto2']->value['cantOpcion'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                        <?php $_smarty_tpl->_assignInScope('tmp', "op_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 
                        <?php $_smarty_tpl->_assignInScope('tmp2', "precio_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 

                        <div class="form-group">
                            <label for="form_name">Titulo #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</label>
                            <input id="form_name" type="text" name="op_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="form-control" placeholder="Titulo #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp']->value];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Precio #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</label>
                            <input id="form_name" type="text" name="precio_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="form-control" placeholder="Precio #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp2']->value];?>
" >
                        </div>

                            
                        <?php }
}
?>
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
                            <input id="form_name" type="text" name="titulo" class="form-control" placeholder="Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto3']->value['titulo'];?>
">
                        </div>
                        <div class="form-group">
                            <label for="form_name">Sub Titulo</label>
                            <input id="form_name" type="text" name="subtitulo" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto3']->value['subtitulo'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Cantidad de Opciones</label>
                            <input id="form_name" type="text" name="cantOpcion" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto3']->value['cantOpcion'];?>
" >
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['texto3']->value['cantOpcion']+1 - (1) : 1-($_smarty_tpl->tpl_vars['texto3']->value['cantOpcion'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                        <?php $_smarty_tpl->_assignInScope('tmp', "op_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 
                        <?php $_smarty_tpl->_assignInScope('tmp2', "precio_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 

                        <div class="form-group">
                            <label for="form_name">Titulo #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</label>
                            <input id="form_name" type="text" name="op_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="form-control" placeholder="Titulo #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['texto3']->value[$_smarty_tpl->tpl_vars['tmp']->value];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Precio #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</label>
                            <input id="form_name" type="text" name="precio_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="form-control" placeholder="Precio #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['texto3']->value[$_smarty_tpl->tpl_vars['tmp2']->value];?>
" >
                        </div>

                            
                        <?php }
}
?>
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


    </div><?php }
}
