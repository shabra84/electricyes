<?php
/* Smarty version 3.1.32, created on 2019-11-25 23:50:58
  from '/home/nuevaelectricyes/public_html/modules/borneros/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc5ad2072a52_45236319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4efd7266c3f71fbed9722d0402a916476a9c49e' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/modules/borneros/views/templates/admin/configure.tpl',
      1 => 1568602456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc5ad2072a52_45236319 (Smarty_Internal_Template $_smarty_tpl) {
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

    <!--
    <div class="panel">
        <h3><i class="icon icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Borneros','mod'=>'borneros'),$_smarty_tpl ) );?>
</h3>
        <p>
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here is my new generic module!','mod'=>'borneros'),$_smarty_tpl ) );?>
</strong><br />
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks to PrestaShop, now I have a great module.','mod'=>'borneros'),$_smarty_tpl ) );?>
<br />
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I can configure it using the following configuration form.','mod'=>'borneros'),$_smarty_tpl ) );?>

        </p>
        <br />
        <p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module will boost your sales!','mod'=>'borneros'),$_smarty_tpl ) );?>

        </p>
    </div>
    -->
    <!--
    <div class="panel">
        <h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documentation','mod'=>'borneros'),$_smarty_tpl ) );?>
</h3>
        <p>
            &raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can get a PDF documentation to configure this module','mod'=>'borneros'),$_smarty_tpl ) );?>
 :
            <ul>
                <li><a href="#" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'English','mod'=>'borneros'),$_smarty_tpl ) );?>
</a></li>
                <li><a href="#" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'French','mod'=>'borneros'),$_smarty_tpl ) );?>
</a></li>
            </ul>
        </p>
    </div>
    -->

    <div class="panel">
        <h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ajustes','mod'=>'borneros'),$_smarty_tpl ) );?>
</h3>

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
		                    <input id="form_name" type="text" name="ancho1" class="form-control" placeholder="Ancho" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['ancho1'];?>
">
		                </div>
                        <div class="form-group">
                            <label for="form_name">Alto</label>
                            <input id="form_name" type="text" name="alto1" class="form-control" placeholder="Alto" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['alto1'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Profundo</label>
                            <input id="form_name" type="text" name="profundo1" class="form-control" placeholder="Profundo1" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value['profundo1'];?>
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
                            <label for="form_name">Cantidad de Bornas</label>
                            <input id="form_name" type="text" name="cantOpcion" class="form-control" placeholder="Sub Titulo del Tab" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value['cantOpcion'];?>
" >
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['texto2']->value['cantOpcion']+1 - (1) : 1-($_smarty_tpl->tpl_vars['texto2']->value['cantOpcion'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                        <?php $_smarty_tpl->_assignInScope('tmp', "op_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 
                        <?php $_smarty_tpl->_assignInScope('tmp2', "xancho_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 
                        <?php $_smarty_tpl->_assignInScope('tmp3', "seccion_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 
                        <?php $_smarty_tpl->_assignInScope('tmp4', "xalto_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 
                        <?php $_smarty_tpl->_assignInScope('tmp5', "xprofundo_".((string)$_smarty_tpl->tpl_vars['foo']->value));?> 




                        <div class="form-group">
                            <label for="form_name">Titulo #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</label>
                            <input id="form_name" type="text" name="op_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="form-control" placeholder="Titulo #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp']->value];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Ancho #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</label>
                        <input id="form_name" type="text" name="xancho_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="form-control" placeholder="Ancho #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp2']->value];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Alto</label>
                            <input id="form_name" type="text" name="xalto_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="form-control" placeholder="Alto #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp4']->value];?>
" >
                            
                        </div>
                        <div class="form-group">
                            <label for="form_name">Profundo</label>
                            <input id="form_name" type="text" name="xprofundo_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="form-control" placeholder="Profundo <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp5']->value];?>
">
                        </div>

                        <div class="form-group">
                            <label for="form_name">Seccion #<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</label>
                            <select name="seccion_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" >
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "2.5") {?>  selected <?php }?> value="2.5">2.5</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "4") {?>  selected <?php }?> value="4">4</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "6") {?>  selected <?php }?> value="6">6</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "10") {?>  selected <?php }?> value="10">10</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "16") {?>  selected <?php }?> value="16">16</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "25") {?>  selected <?php }?> value="25">25</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "35") {?>  selected <?php }?> value="35">35</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "50") {?>  selected <?php }?> value="50">50</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "70") {?>  selected <?php }?> value="70">70</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "95") {?>  selected <?php }?> value="95">95</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "120") {?>  selected <?php }?> value="120">120</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "150") {?>  selected <?php }?> value="150">150</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "185") {?>  selected <?php }?> value="185">185</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['texto2']->value[$_smarty_tpl->tpl_vars['tmp3']->value] == "240") {?>  selected <?php }?> value="240">240</option>
                            </select>
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
                            <label for="form_name">Ancho </label>
                            <input id="form_name" type="text" name="ancho3" class="form-control" placeholder="Ancho" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto3']->value['ancho3'];?>
">
                        </div>
                        <div class="form-group">
                            <label for="form_name">Alto</label>
                            <input id="form_name" type="text" name="alto3" class="form-control" placeholder="Alto" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto3']->value['alto3'];?>
" >
                        </div>
                        <div class="form-group">
                            <label for="form_name">Profundo</label>
                            <input id="form_name" type="text" name="profundo3" class="form-control" placeholder="Profundo1" required="required" value="<?php echo $_smarty_tpl->tpl_vars['texto3']->value['profundo3'];?>
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

            </div>
        </div>


    </div><?php }
}
