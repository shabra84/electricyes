<?php
//PARA GENERAR LA IMAGENES HACERLO EN http://127.0.0.1/ELECTRICAL/php/make_img.php
?>
<html itemscope="" itemtype="http://schema.org/Article" class="lato fa-events-icons-failed">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css"></style>

    <link rel="stylesheet" type="text/css" href="./Desygner_files/style.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/c98ded44ba.js"></script>
<script src="jQueryRotate.js"></script>


    <script>
        if (typeof console == "undefined" || typeof console.log == "undefined")
            var console = {
                log: function() {}
            };

        
       // var BASE_URL = INKIVE.C.BASE_URL;
    </script>

    

    <?php include('head5.php');?>
    <style type="text/css">
        #table-panel{
            top: 83%;
            position: absolute;;
            bottom: 0;
            right: 0;
            left: 395px;
            z-index: 8;
        }
        table.blueTable {
          border: 1px solid #1C6EA4;
          background-color: #000000;
          width: 100%;
          text-align: left;
          border-collapse: collapse;
          color: #FFFFFF;
        }
        table.blueTable td, table.blueTable th {
          border: 1px solid #AAAAAA;
          padding: 3px 2px;
        }
        table.blueTable tbody td {
          font-size: 10px;
        }
        .header-links{
            padding: 0 20px 20px;
            display: flex;
            z-index: 10;
            color: #ededed;
        }
        .header-links>div.active{
            border-bottom: 4px solid #3bd4e3;
            height: 25px;
        }

        .search-container{
            position: relative;
            margin: 15px 20px;
        }
        .search-container input{
            height: auto;
            font-size: 12px;
            -webkit-appearance:none;
            border-radius: 5px;
            padding: 7px 15px;
            border:1px solid #9dacc2;
        }
        .search-container .search-button{
            position: absolute;
            right: 2px;
            padding: 6px 10px;
            top:2px;
            font-size: 15px;
            color: #405e7f;
            cursor: pointer;
        }
        .header-links2{
            padding: 0 20px;
            display: flex;
            z-index: 10;
            color: #ededed;
        }
        .input-cont{
            position: relative;
            margin: 5px 20px 10px;
        }
        .input-cont input, .input-cont select{
            height: auto;
            font-size: 12px;
            -webkit-appearance:none;
            border-radius: 5px;
            padding: 7px 15px;
            border:1px solid #9dacc2;
        }
        #propiedades{
            background-color: #2C353F;
        }
        .input-cont2{
            position: relative;
            margin: 5px 30px 10px 10px;
        }
        .input-cont2 input, .input-cont2 select{
            height: auto;
            font-size: 12px;
            -webkit-appearance:none;
            border-radius: 5px;
            padding: 7px 15px;
            border:1px solid #9dacc2;
        }
        .rotar_180 {
         /*-webkit-transform: rotate(-180deg);
         -moz-transform: rotate(-180deg);
         -ms-transform: rotate(-180deg);
         transform: rotate(-180deg);
         */
         -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    rotation: 180deg;
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
        }

        dt {
        cursor:pointer;
        }
        dd {
            text-indent:5px;
            display:none;
            text-align: center;
        }



        hr.style-one{
            border:0;
            height: 1px;
            background:#333;
            background-image: linear-gradient(to right, #ccc, #333, #ccc);

        }
        .input_redo{
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        padding: 0 4px 0 4px;
        }
        table.caracteristicas td, table.caracteristicas th {
            text-align: center !important;
        }
        .input_redo::placeholder{
           text-align: center;
        }
        .nombre_pieza{
            margin-top: 5px;
        }
        .img-hor {
        -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";
        }

        .img-vert {
                -moz-transform: scaleY(-1);
                -o-transform: scaleY(-1);
                -webkit-transform: scaleY(-1);
                transform: scaleY(-1);
                filter: FlipV;
                -ms-filter: "FlipV";
        }
        .materiales_img{
            -webkit-transition:all .9s ease; /* Safari y Chrome */
            -moz-transition:all .9s ease; /* Firefox */
            -o-transition:all .9s ease; /* IE 9 */
            -ms-transition:all .9s ease; /* Opera */
            width:100%;
        }

        .materiales_img:hover {
            -webkit-transform:scale(1.25);
            -moz-transform:scale(1.25);
            -ms-transform:scale(1.25);
            -o-transform:scale(1.25);
            transform:scale(1.25);
        }
        #footer_form{
            background-color: #2C353F;
            height: 800px;
        }


    </style>
</head>

<body onload="main(document.getElementById('graphContainer'),
            document.getElementById('outlineContainer'),
            document.getElementById('toolbarContainer'),
            document.getElementById('table_materials'),
            document.getElementById('statusContainer'));" style="margin:0px;">
    <header>
        <div class="menus">
            <div class="logo-icon">
                <div></div>
            </div>

            <ul class="desygner-dropdown-menu-group">
                <li class="desygner-dropdown-menu pointer no_border" id="s_undo">
                    <button data-action="undo" class="disabled">
                        <span>Deshacer</span>
                    </button>
                </li>

                <!--

         -->
                <li class="desygner-dropdown-menu pointer" id="s_redo">
                    <button data-action="redo" class="disabled">
                        <span>Rehacer</span>
                    </button>
                </li>

                <li class="desygner-dropdown-menu pointer" id="s_copy">
                    <button data-action="undo" class="disabled">
                        <span >Copiar</span>
                    </button>
                </li>

                <li class="desygner-dropdown-menu pointer" id="s_paste">
                    <button data-action="undo" class="disabled">
                        <span >Pegar</span>
                    </button>
                </li>
                <li class="desygner-dropdown-menu pointer" id="s_delete">
                    <button data-action="undo" class="disabled">
                        <span >Borrar </span>
                    </button>
                </li>
                <!--
                 <li class="desygner-dropdown-menu pointer" >
                    <button >
                        <span >Rotar <a  class="prop_copy">xxxxxxxxxxx</a></span>
                    </button>
                </li>
                -->
                <!--
                 <li class="desygner-dropdown-menu pointer" id="s_export">
                    <button data-action="undo" class="disabled">
                        <span >Export</span>
                    </button>
                </li>
                 <li class="desygner-dropdown-menu pointer" id="s_show">
                    <button data-action="undo" class="disabled">
                        <span >showProperties</span>
                    </button>
                </li>
                -->

            </ul>
        </div>

        <div class="info">
            <div class="status">
                <i class="fa fa-gear fa-spin"></i><span class="message"></span>
            </div>
            <!--

     -
            <div data-value="project-name" class="desygner-btn light-border">
                <span contenteditable="true" class="avoid-shortcuts">New Project</span>
            </div>
      

    
            <button data-action="versions" class="desygner-btn transparent ui-dropdown-button" data-id="versions">
                <i class="fa fa-history"></i>
            </button>
            -->
        </div>

        <div class="options">
            <!--
            <button data-action="download" class="desygner-btn light ui-dropdown-button" data-id="download">
                <span>Download</span>
            </button>
            
            <button data-action="share" class="desygner-btn light ui-dropdown-button" data-id="share">
                <span>Share</span>
            </button>
            
            <button data-action="print" class="desygner-btn light">
                <span>Print</span>
            </button>
            
             -->
            <button data-action="exit" class="desygner-btn light">
                <span>Guardar</span>
            </button>
            <button data-action="exit" class="desygner-btn light">
                <span>Salir</span>
            </button>
        </div>

    </header>

    <aside id="content" class="web landscape">

        <panel id="tool-panel">
            <div class="tool-menu">
                <ul>

                   

                    <li class="">
                        <a class="btn btn-menu btn-tag" title="Search" data-charlimit="10" tag="Buscar" role="tab" data-toggle="tab" href="http://www.melopo.com/electro/editor/?id=pGRntGEq_9Z&amp;d=desygner#tabSearch" aria-expanded="false">
                            <div class="icon-wrapper"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </a>
                    </li>

                    <li class="active">
                        <a class="btn btn-menu btn-tag" title="Templates" data-charlimit="10" tag="Ficha" role="tab" data-toggle="tab" href="http://www.melopo.com/electro/editor/?id=pGRntGEq_9Z&amp;d=desygner#tabLayouts" aria-expanded="true">
                            <div class="icon-wrapper"><i class="fa fa-file-o" aria-hidden="true"></i></div>
                        </a>
                    </li>

                    <li class="">
                        <a class="btn btn-menu btn-tag" title="Images" data-charlimit="10" tag="Materiales" role="tab" data-toggle="tab" href="http://www.melopo.com/electro/editor/?id=pGRntGEq_9Z&amp;d=desygner#tabMateriales" aria-expanded="false">
                            <div class="icon-wrapper"><i class="fa fa-microchip" aria-hidden="true"></i></div>
                        </a>
                    </li>

                    <li>
                        <a class="btn btn-menu btn-tag" title="Text" data-charlimit="10" tag="Mis Esquemas" role="tab" data-toggle="tab" href="#tabMyEsquemas">
                            <div class="icon-wrapper"><i class="fa fa-database" aria-hidden="true"></i></div>
                        </a>
                    </li>

                    <li>
                        <a class="btn btn-menu btn-tag" title="Text" data-charlimit="10" tag="Esquemas Tipo" role="tab" data-toggle="tab" href="#tabEsquemasTipo">
                            <div class="icon-wrapper"><i class="fa fa-database" aria-hidden="true"></i></div>
                        </a>
                    </li>

                    

                </ul>
                <div class="help-menu-container">
                    <div class="help-menu">
                        <a title="Help" data-charlimit="10" id="help" href="http://www.melopo.com/electro/editor/?id=pGRntGEq_9Z&amp;d=desygner#">
                            <div class="icon-wrapper"><i class="fa fa-question-circle"></i></div>
                            Ayuda </a>
                    </div>
                </div>
            </div>

            <div class="tool-content">

                <div role="tabpanel" class="tab" id="tabSearch">

                    <div class="header-links">
                          <div data-key="library" class="active">
                            
                            
                            <span class="name">Busqueda</span>
                          </div>
                      </div>

                    <div class="search-container" style="display: block;">
                        <input type="text" name="search" placeholder="Buscar" autocomplete="off">
                        <div class="search-button">
                          <i class="fa fa-search-minus"></i>
                        </div>
                      </div>

                       

                </div>

               <div role="tabpanel" class="tab" id="tabMateriales">
                         <div class="header-links">
                          <div data-key="library" class="active">
                            
                            
                            <span class="name">Materiales</span>
                          </div>
                      </div>



                      <div class="add" style="display: block;">
                        <div class="antiscroll-wrap">
                          <div class="antiscroll-inner" style="overflow: auto; width: 315px; height: 536px;">
                            <div class="tab-content sub-category template accordion active">
                              <div class="wrapper" id="accordion" style="top: 0px;">
                                <dl>
                                    <dt class="">
                                      <a class="btn btn-accordion" data-key="socialposts" data-type="">
                                        <i class="fa fa-ellipsis-v main"></i>
                                        
                                        <i class="collapse fa fa-chevron-up hidden"></i>
                                        <i class="back fa fa-chevron-left hidden"></i>
                                        <span class="name">Alternadores</span>
                                      </a>
                                    </dt>
                                        <?php for($x=1; $x<5; $x++){?>
                                        <dd class="img_contenedor" id="I-<?php echo $x?>"></dd>
                                        <?php } ?>

                                    <dt class="">
                                      <a class="btn btn-accordion" data-key="socialposts" data-type="">
                                        <i class="fa fa-ellipsis-v main"></i>
                                        
                                        <i class="collapse fa fa-chevron-up hidden"></i>
                                        <i class="back fa fa-chevron-left hidden"></i>
                                        <span class="name">Generadores</span>
                                      </a>
                                    </dt>
                                        <?php for($x=5; $x<8; $x++){?>
                                        <dd id="I-<?php echo $x?>"></dd>
                                        <?php } ?>

                                    <dt class="">
                                      <a class="btn btn-accordion" data-key="socialposts" data-type="">
                                        <i class="fa fa-ellipsis-v main"></i>
                                        
                                        <i class="collapse fa fa-chevron-up hidden"></i>
                                        <i class="back fa fa-chevron-left hidden"></i>
                                        <span class="name">Resistencias</span>
                                      </a>
                                    </dt>
                                        <?php for($x=8; $x<11; $x++){?>
                                        <dd id="I-<?php echo $x?>"></dd>
                                        <?php } ?>


                                </dl>

                            </div>
                           </div>
                         </div>
                        </div>
                      </div>                        


                                














                       
                        

                        
                </div>
                <div role="tabpanel" class="tab" id="tabEsquemasTipo">
                         <div class="header-links">
                          <div data-key="library" class="active">
                            
                            
                            <span class="name">Esquemas Tipo</span>
                          </div>
                      </div>
                        

                        <div class="image-list" id="sidebarContainer">
                            <div class="antiscroll-wrap">
                                <div class="antiscroll-inner" style="width: 315px; height: 407px;">
                                   
                                   <table width="100%" align="center" id="table_materials" style="margin-left: 50px;">
                                       <tr>
                                            <td><a id="s_load1"> Esquema 1</a></td>
                                        </tr>
                                       <tr>
                                            <td><a id="s_load2"> Esquema 2</a></td>
                                        </tr>
                                        
                                   </table>
                                   
                                </div>
                            </div>        
                        </div>        
                </div>


                <div role="tabpanel" class="tab" id="tabMyEsquemas">
                         <div class="header-links">
                          <div data-key="library" class="active">
                            
                            
                            <span class="name">Mis Esquemas</span>
                          </div>
                      </div>
                        

                        <div class="image-list" id="sidebarContainer">
                            <div class="antiscroll-wrap">
                                <div class="antiscroll-inner" style="width: 315px; height: 407px;">
                                   
                                   <table width="100%" align="center" id="table_materials" style="margin-left: 50px;">
                                       <tr>
                                            <td><a id="s_load3"> Esquema 1</a></td>
                                        </tr>
                                       
                                   </table>
                                   
                                </div>
                            </div>        
                        </div>        
                </div>






                <!--    <div role="tabpanel" class="tab" id="tabLibrary"></div>-->
                <div role="tabpanel" class="tab active" id="tabLayouts">
                    <div class="header-links">
                          <div data-key="library" class="active">
                            
                            
                            <span class="name">Especificaciones del Armado</span>
                          </div>
                      </div>



                      <span class="header-links2"> Tipo de armarioxx</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                       
                      </div>

                      <span class="header-links2"> Tensión nominal</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                       
                      </div>

                      <span class="header-links2"> Frecuencia</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                      </div>

                      <span class="header-links2"> Intensidad de cortocircuito</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                      </div>

                      <span class="header-links2"> Norma de diseño</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                      </div>

                      <span class="header-links2"> Esquema de distribución tipo</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                      </div>

                      <span class="header-links2"> Tensión de mando</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                      </div>

                      <span class="header-links2"> Borneros</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                      </div>

                      <span class="header-links2"> Entrada de cables</span>
                      <div class="input-cont" >
                        <input type="text" name="search" placeholder="">
                      </div>

                     

                </div>
            </div>
        </panel>

        <panel id="bottom-submenu">
            <div class="margin"></div>
            <!--
-->
            <ul class="tool-page">
                <li>
                    <a class="btn btn-gray prev disabled" data-popover="tooltip" data-placement="top" data-original-title="Previous design"><i class="fa fa-angle-left"></i></a>
                </li>
                <li class="page-count">
                    <div class="page-count-text">
                        <span data-popover="tooltip" data-placement="top" data-original-title="Current design">1</span>/<span data-popover="tooltip" data-placement="top" data-original-title="Total designs">1</span>
                    </div>
                    <input type="text" class="page-number hidden">
                </li>
                <li>
                    <a class="btn btn-gray next"><i class="icon-chevron-right arrow hidden" data-popover="tooltip" data-placement="top" data-original-title="Next design"></i><i class="fa fa-plus" data-popover="tooltip" data-placement="top" data-original-title="Add design"></i></a>
                </li>
            </ul>
            <!--
-->
            <ul class="tool-size" style="width: 684px;">
                <!--
                <li class="page-size" data-popover="tooltip" data-placement="top" data-original-title="Design format">
                    <span>1024x512px - Twitter</span>
                </li>

                <li data-popover="tooltip" data-placement="top" data-original-title="Resize">
                    <a class="resize btn btn-gray">
                        <i class="icon-photo_size_select_large"></i>
                    </a>
                </li>
                -->

                <div class="ui-dropdown-content">

                    <div class="page-size-group">
                        <div>Social Media Posts: Twitter</div>
                        <div><small>1024x512px</small></div>
                    </div>

                    <div class="page-size-group">
                        <div class="iradio_square-yellow" style="position: relative;">
                            <input type="radio" name="page-size" class="custom" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                        <label>Custom size</label>

                        <section>
                            <input type="text" class="size page-width small  disabled" placeholder="Width" value="1024">
                            <span>x</span>
                            <input type="text" class="size page-height small  disabled" placeholder="Height" value="512">
                            <select class="unit  disabled">
                                <option selected="">px</option>
                                <option>cm</option>
                                <option>in</option>
                                <option>mm</option>
                            </select>
                        </section>
                    </div>

                    <div>
                        <a class="btn btn-yellow do-resize">
      Apply dimensions and duplicate
    </a>
                    </div>
                </div>
            </ul>
            <!--
-->
            <ul class="tool-zoom">
                <li>
                    <a class="btn btn-gray out" id="s_zoom_out" data-popover="tooltip" data-placement="top" data-original-title="Zoom out"><i class="fa fa-search-minus"></i></a>
                </li>
                <li class="border-left">
                    <a class="btn btn-gray custom" style="padding-left: 10px;width: 70px;" data-popover="tooltip" data-placement="top" data-original-title="Click to apply custom zoom">
                        <span class="percent" id="percentx">100</span>%<!--<i class="fa fa-angle-up"></i>--></i>
                    </a>
                </li>
                <li class="border-left">
                    <a class="btn btn-gray in" id="s_zoom_in" data-popover="tooltip" data-placement="top" data-original-title="Zoom in"><i class="fa fa-search-plus"></i></a>
                </li>

                <div class="ui-dropdown-content custom-zoom">
                    <ul>
                        <li><a data-value="10">10%</a></li>
                        <li><a data-value="25">25%</a></li>
                        <li><a data-value="50">50%</a></li>
                        <li><a data-value="75">75%</a></li>
                        <li><a data-value="100">100%</a></li>
                        <li><a data-value="125">125%</a></li>
                        <li><a data-value="150">150%</a></li>
                        <li><a data-value="175">175%</a></li>
                        <li><a data-value="200">200%</a></li>
                        <li><a data-value="500">500%</a></li>
                        <li><a data-value="fit">Fit</a></li>
                        <li><a data-value="original">Orig.</a></li>
                    </ul>
                </div>
            </ul>
        </panel>
        <panel id="pages-panel" class="desygner">
            <div class="pages-button-container">
                <a class="btn btn-gray modal-header page-order-show">
                Pagina                <i class="fa fa-angle-up"></i></i>
            </a>
            </div>

            <div class="submenu">
                <a class="page-order-expand"><span></span><i class="fa fa-angle-up"></i></i></a>
            </div>

            <div class="page-order antiscroll-wrap">
                <div class="antiscroll-inner" style="width: 1025px; height: 137px;">
                    <div class="thumbnail-wrapper thumbmenu ui-sortable">
                        <div class="thumbnail">
                            <div class="page-order-wrapper">
                                <!--
-->
                                <a class="block">
                                    <div class="loader-wrapper dark">
                                        <div class="int-loader">
                                        </div>
                                    </div>
                                    <img data-src="https://static.inkive.com/virginia/344/pGRntGEq_9Z/4a2b1f87e0cf8de182642868ea003642.jpg?1526754793"></a>
                                <a class="hide-pagemenu">
                                    <span>Cancel</span><span class="icon-remove"></span>
                                </a>

                                <div class="page-menu">
                                    <div class="info help">select action</div>
                                    <a class="tool-icon add-page" tag="new design"><i class="icon-plus"></i></a>
                                    <a class="tool-icon copy-page" tag="Duplicate"><i class="icon-copy"></i></a>
                                    <a class="tool-icon delete-page" tag="Delete"><i class="icon-bin"></i></a>
                                </div>

                                <div class="page-submenu">
                                    <a class="tool-icon top show-pagemenu" data-popover="tooltip" data-original-title="Show menu">
                                        <i class="icon-chevron-down"></i>
                                    </a>
                                </div>
                            </div>

                            <p>
                                <label>1</label>
                            </p>
                        </div>
                        <div class="thumbnail add">
                            <a href="#"><i class="icon-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="antiscroll-scrollbar antiscroll-scrollbar-vertical antiscroll-scrollbar-shown" style="height: 98.4919px; top: 0px;"></div>
            </div>

            <div class="line"></div>
        </panel>

        <!-- CONTENIDO -->
        <!--<panel id="canvas-panel" style="top: 45px;">-->
        <panel id="canvas-panel" >
        
            
          <?php include('contenido5.php');?>

        </panel>

        <panel id="table-panel"  >
            <table width="100%" class="blueTable">
                <tbody>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">Fecha <span id='foo_1x'></span></td>
                <td colspan="3" rowspan="3">Proyecto / Obra <br><span id='foo_7'></span>
                <img src="" id="img_url"  width="40">
                </td>
                
                <td rowspan="4">&nbsp;Descripcion <br> <span id='foo_9'></span></td>
                <td rowspan="2">&nbsp;Sustituido por <span id='foo_10'></span></td>
                <td colspan="2">=</td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">Resp <span id='foo_4'></span></td>
                <td colspan="2">&nbsp;+</td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">Probado <span id='foo_5'></span></td>
                <td rowspan="2">&nbsp;Observaciones <span id='foo_11'></span></td>
                <td rowspan="2">&nbsp;Codigo de Obra <span id='foo_12'></span></td>
                <td>&nbsp;Hoja</td>
                </tr>
                <tr>
                <td>Cambio <span id='foo_1'></span></td>
                <td>Fecha&nbsp;<span id='foo_2'></span></td>
                <td>Nombre <span id='foo_3'></span></td>
                <td colspan="2">Original  <span id='foo_6'></span></td>
                <td colspan="3">Sustitucion por <span id='foo_8'></span></td>
                <td>&nbsp;De</td>
                </tr>
                </tbody>
            </table>


        </panel>

    </aside>


<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>

</html>