<script type="text/javascript">
		var mxBasePath = 'javascript/src';
		
		var urlParams = (function(url)
		{
			var result = new Object();
			var params = window.location.search.slice(1).split('&');
			
			for (var i = 0; i < params.length; i++) 
			{
				idx = params[i].indexOf('=');
				
				if (idx > 0)
				{
					result[params[i].substring(0, idx)] = params[i].substring(idx + 1);
				}
			}
			 
			return result;
		})(window.location.href);
		
		var mxLanguage = urlParams['lang'];
	</script>
	<script type="text/javascript">
  		mxBasePath = '{$electro_tpl}javascript/src/';
 	 </script>
	<script type="text/javascript" src="{$electro_tpl}javascript/mxClient.js"></script>
	<script type="text/javascript" src="{$electro_tpl}javascript/examples/editors/js/app.js"></script>
	<script type="text/javascript">

		var graph_full="";
		var editor_full="";
		var borneros_id=[];
		var borneros_l1=[];
		var borneros_l2=[];
		var borneros_l3=[];
		var borneros_l4=[];
		/*
		borneros_id[0]=0;
		borneros_l1[0]=0;
		borneros_l2[0]=0;
		borneros_l3[0]=0;
		borneros_l4[0]=0;
		*/

		//*****************funciones de las propiedades **///////////////////////////
		//buscar en mxclient.js ---> Class: mxClipboard salen todas las funciones
		function rehacer()
		{
			var url = "../Electro.php"; 
			$.ajax({
			url : url,
			type: "POST",
		    data : {
			        accion : '2',
		    },
		    dataType : "json",
			cache : false,
			success : function(response){
			  $("#nada").submit();
			  console.log(response);
			} });

		}
		function copiar()
		{
			mxClipboard.copy(graph_full);
			mxClipboard.paste(graph_full);

		}

		function borrar()
		{
			mxClipboard.removeCells(graph_full);
		}

		function zoom2()
		{
			var cell = graph_full.getSelectionCell();
			var valx = cell.value;
            var id= $(valx).attr('id');
			id =  id.replace('x-', "x-x-");
			//alert($('#x-1-1').html()); 
			//$('#x-1-1').attr('src', 'piezas/piez03.png');
			//console.log(id);
			var yourImg = document.getElementById(id);
			if(yourImg && yourImg.style) {
			    yourImg.style.height = '126px';
			    yourImg.style.width = '250px';
			}
			//$('#x-1-1').height(126); 
			
		}

		function vertical()
		{
			var cell = graph_full.getSelectionCell();
			var valx = cell.value;
            var id= $(valx).attr('id');
			var id2 =  id.replace('x-', "x-x-");

            //saco el nombnre de la imagen
            var src= document.getElementById(id2).src.split("/").pop().split(".")[0];
			//src =  src.replace('_h', "");

			var new_img="{$electro_tpl}piezas/vert/"+src+"_x1.jpg";
			
			if (src.indexOf('_x1')!=-1) 
			{
				new_img =  src.replace('_x1', "");
				new_img += ".jpg";
				new_img = '{$electro_tpl}piezas/vert/'+new_img;
			}


			var image1 = document.getElementById(id);
			var image2 = document.getElementById(id2);
			image1.src = new_img;
			image2.src = new_img;
			//$('#x-1-1').height(126); 
			
		}


		function horizontal()
		{
			var cell = graph_full.getSelectionCell();
			var valx = cell.value;
            var id= $(valx).attr('id');
			var id2 =  id.replace('x-', "x-x-");

            //saco el nombnre de la imagen
            var src= document.getElementById(id2).src.split("/").pop().split(".")[0];
			//src =  src.replace('_v', "");

			var new_img="{$electro_tpl}piezas/vert/"+src+"_x2.jpg";
			
			//ya esta vertical, se coloca la original
			if (src.indexOf('_x2')!=-1) 
			{
				new_img =  src.replace('_x2', "");
				new_img += ".jpg";
				new_img = '{$electro_tpl}piezas/vert/'+new_img;
			}

			var image1 = document.getElementById(id);
			var image2 = document.getElementById(id2);
			image1.src = new_img;
			image2.src = new_img;
			//$('#x-1-1').height(126); 
			
		}

	

		////////*****************funciones de las propiedades **///////////////////////////
	
		//*****************save footer form **///////////////////////////
		
		function cargar_esquema(id)
		{

		 	var url = "../Electro.php"; // the script where you handle the form input.
			$.ajax({
			url : url,
			type: "POST",
		    data : {
			        accion : 4,
			        id_user_data: id
		    },
			cache : false,
			success : function(response){
			  //console.log(response);
				//borro todo
				graph_full.removeCells(graph_full.getChildVertices(graph_full.getDefaultParent()));					
				
				var file = response;
				graph_full.getModel().beginUpdate();
				try
				{	
					//read(graph, 'data.xml');
					var req = mxUtils.load('../xml/data.xml');
					var root = req.getDocumentElement();
					var dec = new mxCodec(root.ownerDocument);
					dec.decode(root, graph_full.getModel());
										
				}
				finally
				{
					// Updates the display
					graph_full.getModel().endUpdate();
				}
				/*
				var xml = response;

				
	             var doc = mxUtils.parseXml(xml);
	        	 var codec = new mxCodec(doc);
	             var elt = doc.documentElement.firstChild;
	             var cells = [];
	                while (elt != null){                
	                  cells.push(codec.decodeCell(elt));
	                    graph_full.refresh();
	                  elt = elt.nextSibling;
	                }
	            

	       		 graph_full.addCells(cells);
	       		 */
	       		


			} });


		}


		function guardar_sub_footer(){
			for(var c=1; c<14; c++)
			{
				$("#fo_"+c).val($("#fox"+c).val());
				//en el span
				$("#foo_"+c).html($("#fox"+c).val());
			}
			//fecha
			$("#foo_1x").html($("#fox2").val());
			//subo la imagen
	   	    var input = document.getElementById("fox13");
			  file = input.files[0];
			  if(file != undefined){
			    formData= new FormData();
			    if(!!file.type.match(/image.*/)){
			      formData.append("image", file);
			      $.ajax({
			        url: "../upload_logo.php",
			        type: "POST",
			        data: formData,
			        processData: false,
			        contentType: false,
			        success: function(data){
			         //   alert('success');
			        }
			      });
			    }else{
			      alert('Not a valid image!');
			    }
			  }else{
			    //alert('Input something!');
			  }


			cerrar_modal();
		}

		function img_pathUrl(input){
		   $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
		}

		function guardar_esquema()
		{
			
			//POPUP 
			var content = document.createElement('div');
			content.setAttribute("id", "guardar_esquema");
			content.innerHTML = '{$modal_guardar_armado nofilter}';
			showModalWindow(graph_full, 'Guardar Esquema', content, 400, 300);

			

		}
	
		function guardar_nombre_esquema(){
			var nombre = $("#nombre_esquema").val();
			guardar_armado2(1,3, nombre);
		}


		function guardar_armado(){
			$("#tipo_armado").val($("#tipo_armado_t").val());
			$("#tension_nominal").val($("#tension_nominal_t").val());
			$("#frecuencia").val($("#frecuencia_t").val());
			$("#int_corto").val($("#int_corto_t").val());
			$("#norma_d").val($("#norma_d_t").val());
			$("#esquema_d").val($("#esquema_d_t").val());
			$("#tension_m").val($("#tension_m_t").val());
			$("#borneos").val($("#borneos_t").val());
			$("#entrada_c").val($("#entrada_c_t").val());
			cerrar_modal();
			guardar_armado2(0);
		}

		function guardar_armado2(sub=1, accion=1, nombre='x'){
			var enc = new mxCodec(mxUtils.createXmlDocument());
			var node = enc.encode(editor_full.graph.getModel());
			var export_var = mxUtils.getPrettyXml(node);

		
		 	var url = "../Electro.php"; // the script where you handle the form input.
			$.ajax({
			url : url,
			type: "POST",
		    data : {
			        nombre : nombre,
			        accion : accion,
			        export_var : export_var,
			        tipo_armado : $("#tipo_armado").val(),
			        tension_nominal : $("#tension_nominal").val(),
			        frecuencia : $("#frecuencia").val(),
			        int_corto : $("#int_corto").val(),
			        norma_d : $("#norma_d").val(),
			        esquema_d : $("#esquema_d").val(),
			        tension_m : $("#tension_m").val(),
			        borneos : $("#borneos").val(),
			        entrada_c : $("#entrada_c").val(),
			        fox1: $("#fo_1").val(),
			        fox2: $("#fo_2").val(),
			        fox3: $("#fo_3").val(),
			        fox4: $("#fo_4").val(),
			        fox5: $("#fo_5").val(),
			        fox6: $("#fo_6").val(),
			        fox7: $("#fo_7").val(),
			        fox8: $("#fo_8").val(),
			        fox9: $("#fo_9").val(),
			        fox10: $("#fo_10").val(),
			        fox11: $("#fo_11").val(),
			        fox12: $("#fo_12").val(),
		    },
		    dataType : "json",
			cache : false,
			success : function(response){
			  console.log(response);
			  if(sub==1)
			  $("#nada").submit();
			} });

		    //e.preventDefault(); // avoid to execute the actual submit of the form.


			/*
			//editor_full.execute('export');
			$("#dl_piezas").html('<dt class=""><a class="btn btn-accordion" data-key="socialposts" data-type=""><i class="fa fa-ellipsis-v main" style="color: rgb(242, 186, 53);"></i><i class="collapse fa fa-chevron-up hidden" style="color: rgb(242, 186, 53);"></i><i class="back fa fa-chevron-left hidden" style="color: rgb(242, 186, 53);"></i><span class="name" style="color: rgb(242, 186, 53);">Alternador</span></a></dt><dd class="img_contenedor" id="I-38" style="display: none;"><img src="http://127.0.0.1/electro/177/alternador1.jpg" class="materiales_img" title="Arrastra la Imagen al Diagrama" style="width: 120px;"><div class="nombre_pieza">Alternador1</div></dd><dt class=""><a class="btn btn-accordion" data-key="socialposts" data-type=""><i class="fa fa-ellipsis-v main" style="color: rgb(137, 149, 149);"></i><i class="collapse fa fa-chevron-up hidden" style="color: rgb(137, 149, 149);"></i><i class="back fa fa-chevron-left hidden" style="color: rgb(137, 149, 149);"></i><span class="name" style="color: rgb(137, 149, 149);">Generadorxxxx</span></a></dt><dd class="img_contenedor" id="I-36"><img src="http://127.0.0.1/electro/175/generador-1.jpg" class="materiales_img" title="Arrastra la Imagen al Diagrama" style="width: 120px;"><div class="nombre_pieza">Generador 1</div></dd><dd class="img_contenedor" id="I-37"><img src="http://127.0.0.1/electro/174/generador-2.jpg" class="materiales_img" title="Arrastra la Imagen al Diagrama" style="width: 120px;"><div class="nombre_pieza">Generador 2</div></dd><dt class=""><a class="btn btn-accordion" data-key="socialposts" data-type=""><i class="fa fa-ellipsis-v main" style="color: rgb(137, 149, 149);"></i><i class="collapse fa fa-chevron-up hidden" style="color: rgb(137, 149, 149);"></i><i class="back fa fa-chevron-left hidden" style="color: rgb(137, 149, 149);"></i><span class="name" style="color: rgb(137, 149, 149);">Resistencia</span></a></dt><dd class="img_contenedor" id="I-34"><img src="http://127.0.0.1/electro/172/resistencia1.jpg" class="materiales_img" title="Arrastra la Imagen al Diagrama" style="width: 120px;"><div class="nombre_pieza">Resistencia1</div></dd><dd class="img_contenedor" id="I-35"><img src="http://127.0.0.1/electro/173/resistencia2.jpg" class="materiales_img" title="Arrastra la Imagen al Diagrama" style="width: 120px;"><div class="nombre_pieza">Resistencia2</div></dd></dl>');
			//cerrar_modal();
			*/
		}

		
		function cerrar_modal()
		{
			graph_full.setEnabled(true);
			$("#background_modal").remove();
			$(".mxWindow").remove();

		}

		$(document).ready(function(){
			$(document).on("click", "dt" , function(e) {
		        e.preventDefault();
		        $(this).parent('dl').children('dd:visible').slideUp('slow');
		        $(this).nextUntil('dt').filter(':not(:visible)').slideDown('slow');
		        $( 'dt' ).find( 'span' ).css("color", "#899595");
		        $( 'dt' ).find( 'i' ).css("color", "#899595");		        
		        $( this ).find( 'span' ).css("color", "#f2ba35");
		        $( this ).find( 'i' ).css("color", "#f2ba35");
	        });
		});

							
		
		// Program starts here. Creates a sample graph in the
		// DOM node with the specified ID. This function is invoked
		// from the onLoad event handler of the document (see below).
		function main(container, outline, toolbar, sidebar, status)
		{
			// Checks if the browser is supported
			if (!mxClient.isBrowserSupported())
			{
				// Displays an error message if the browser is not supported.
				mxUtils.error('Browser is not supported!', 200, false);
			}
			else
			{




				// Assigns some global constants for general behaviour, eg. minimum
				// size (in pixels) of the active region for triggering creation of
				// new connections, the portion (100%) of the cell area to be used
				// for triggering new connections, as well as some fading options for
				// windows and the rubberband selection.
				mxConstants.MIN_HOTSPOT_SIZE = 16;
				mxConstants.DEFAULT_HOTSPOT = 1;
				
				// Enables guides
				mxGraphHandler.prototype.guidesEnabled = false;

				// Defines the guides to be red (default)
				mxConstants.GUIDE_COLOR = '#FF0000';
			    
			    // Defines the guides to be 1 pixel (default)
				mxConstants.GUIDE_STROKEWIDTH = 1;

			    // Alt disables guides
			    mxGuide.prototype.isEnabledForEvent = function(evt)
				{
					return !mxEvent.isAltDown(evt);
				};

				/*
				mxVertexHandler.prototype.createSelectionShape = function(bounds)
				{
				  var shape = new mxRectangleShape(bounds, null, this.getSelectionColor());
				  shape.strokewidth = this.getSelectionStrokeWidth()
				  shape.isDashed =  this.isSelectionDashed();
				  shape.isRounded = this.state.style[mxConstants.STYLE_ROUNDED] == 1;
				  console.log("SHAPE");
				  console.log(shape);
				  return shape;
				}*/







				// Enables snapping waypoints to terminals
				mxEdgeHandler.prototype.snapToTerminals = true;

				// Workaround for Internet Explorer ignoring certain CSS directives
				if (mxClient.IS_QUIRKS)
				{
					document.body.style.overflow = 'hidden';
					new mxDivResizer(container);
					new mxDivResizer(outline);
					new mxDivResizer(toolbar);
					new mxDivResizer(sidebar);
					new mxDivResizer(status);
				}

				//saco el espacio arriba y a la izquierda del contenedor
				  var rec = document.getElementById('graphContainer').getBoundingClientRect();
				  var canvas_top=rec.top + window.scrollY;
				  var canvas_left= rec.left + window.scrollX;
				  
				  var id_num=1;
				  //calcular el tamano
				  var linea_v=0;
				  var linea_h=0;

				
				// Creates a wrapper editor with a graph inside the given container.
				// The editor is used to create certain functionality for the
				// graph, such as the rubberband selection, but most parts
				// of the UI are custom in this example.
				var editor = new mxEditor();
				editor.setGraphContainer(container);
				var graph = editor.graph;

				//COLOCO QUE ACEPTE HTML
				graph.isHtmlLabel = function(cell)
				{
					return true;
				};


				//*********************DATA DEL CIRCUITO *****************				
				//si tiene data en el circuito se muestra
				var circuito_inicial=1;
				if(circuito_inicial=={$circuito_inicial nofilter})
				{
					graph.getModel().beginUpdate();
					try
					{	
						//read(graph, 'data.xml');
						var req = mxUtils.load('../xml/data.xml');
						var root = req.getDocumentElement();
						var dec = new mxCodec(root.ownerDocument);
						dec.decode(root, graph.getModel());
											
					}
					finally
					{
						// Updates the display
						graph.getModel().endUpdate();
					}
				}
				//*********************DATA DEL CIRCUITO *****************				






				//NO PERMITIR EL RESIZE
				//graph.setEnabled(false);
				//var graph = new mxGraph(container);
				var model = graph.getModel();

				/*
				var vertexHandlerUnion = mxVertexHandler.prototype.union;
				mxVertexHandler.prototype.union = function(bounds, dx, dy, index, gridEnabled, scale, tr)
				{
				  var result = vertexHandlerUnion.apply(this, arguments);

				  result.width = 10;
				  result.height = 20;

				  return result;
				};
				*/












				/*********************GRID HTML5****************************/
				mxEvent.disableContextMenu(document.body);

				// Creates the graph inside the given container
				//var graph = new mxGraph(container);
				graph.graphHandler.scaleGrid = true;
				graph.setPanning(true);
				graph.setAllowDanglingEdges(false);

				// Enables rubberband selection
				new mxRubberband(graph);

				// Create grid dynamically (requires canvas)
				(function()
				{
					try
					{
						var canvas = document.createElement('canvas');
						canvas.style.position = 'absolute';
						canvas.style.top = '0px';
						canvas.style.left = '0px';
						canvas.style.zIndex = -1;
						//canvas.fillStyle = "#CBCBCB";
						//canvas.style.background-color = '#CBCBCB';
						//background-color: #CBCBCB;
						graph.container.appendChild(canvas);

						
						
						//ctx es el context
						var ctx = canvas.getContext('2d');
						ctx.fillStyle = "#CBCBCB";
						// Modify event filtering to accept canvas as container
						var mxGraphViewIsContainerEvent = mxGraphView.prototype.isContainerEvent;
						mxGraphView.prototype.isContainerEvent = function(evt)
						{
							return mxGraphViewIsContainerEvent.apply(this, arguments) ||
								mxEvent.getSource(evt) == canvas;
						};
						
						var s = 0;
						var gs = 0;
						var tr = new mxPoint();
						var w = 0;
						var h = 0;
						var grid_x=[];
						var grid_y=[];


						mxGraphView.prototype.drawHoverRect = function(color, x, y) {
					        ctx.save();
					        ctx.lineWidth = 2;
					        ctx.strokeStyle = color;
					        ctx.translate(x, y);
					        ctx.strokeRect(1, 1, this.tilesize-2, this.tilesize-2);
					        ctx.restore();
					    }      

					    

						function repaintGrid()
						{
							if (ctx != null)
							{

								//graph.setGraphBounds = new mxRectangle(0, 0, 50, 100);
								
								//console.log(graph.gridSize);
								//graph.gridSize=10;
								var bounds = graph.getGraphBounds();
								//console.log("********************BOUNDS************************");
								//console.log(bounds.x + bounds.width+" //" + graph.container.clientWidth);
								var width = Math.max(bounds.x + bounds.width, graph.container.clientWidth);
								//quito 50 del espacio de abajo que lleva los datos de la empresa
								var height = Math.max(bounds.y + bounds.height, graph.container.clientHeight)-50;
								var sizeChanged = width != w || height != h;
								//console.log("SIZE CHANGE =>"+sizeChanged);
								
								if (graph.view.scale != s || graph.view.translate.x != tr.x || graph.view.translate.y != tr.y ||
									gs != graph.gridSize || sizeChanged)
								{
									s = graph.view.scale;

									//if(s==1.2)
									//	s=1.21;

									w = width*s;
									h = height*s;

									
									// Clears the background if required
									if (!sizeChanged)
									{
										ctx.clearRect(0, 0, w, h);
									}
									else
									{
										canvas.setAttribute('width', w);
										canvas.setAttribute('height', h);
									}
	
									//saco el ancho
									
									


									// Draws the actual grid
									ctx.strokeStyle = '#000000';
									//ctx.fillStyle='blue';
									ctx.beginPath();
									grid_x=[];
									grid_y=[];
									
									linea_v=(w-10)/7;
									linea_h=linea_v*75/147;
									//VEO SI EL TAMANO DEL CALCULO ES IGUAL AL DEL WIDTH DEL ELEMENTO, ESTO PASA CUANDO SE AGREGA UN VERTEX Y LUEGO SE HACE ZOOM Y GENERA OTRO ANCHO, ASI QUE SE LE COLOCA EL NUEVO ANCHO
									var full=graph.getChildVertices(graph.getDefaultParent());
									full.forEach(function(element) {
					  				idx=element.id;
					  					//ya hay un elemento, sacamos el ancho
					  					if(idx != null)
					  					{
					  						var cell = graph.getModel().getCell(idx);
											if(cell != null){
												
												var state = graph.view.getState(cell);
												//console.log(state.width, state.height);
												if(state.height<state.width)
												{												
												linea_v=state.width;
												linea_h=state.height;
												}
												
											}
					  					}
					  				})

									graph.gridSize=linea_v;


									//console.log("*****************GRID SIZE:"+graph.gridSize+"*******" );
									if($('#linea_h').val()==0)
									$('#linea_h').val(linea_h);

									if($('#linea_v').val()==0)
									$('#linea_v').val(linea_v);

									//console.log("h-->"+linea_h+"  // v-->"+linea_v);
									
									//console.log("*************REPAINT*****************");
									//console.log("width: "+width+" / height:"+height);
									//console.log("Scale-->"+s);
									/*
									console.log("h-->"+linea_h+"  // v-->"+linea_v);
									*/
									
									

									//factor nos dice hasta donde llegue la Y
									var factor=0; 
									//lineas para la derecha
									for (var x = 0; x <= 8; x ++)
									{
										if(x==8)
											x=9;

										var factor=x * linea_h;
										ctx.moveTo(0.5, factor );
										ctx.lineTo(w-10, factor);
										//ctx.fillStyle='#000000';
										grid_x.push( factor);
										
									}
												
															
									
									//lineas para abajo
									for (var x = 0; x <= 7; x ++)
									{
										ctx.moveTo(x * linea_v , 0.5);
										ctx.lineTo(x * linea_v, factor);
										//ctx.fillStyle='blue';
										grid_x.push(x * linea_v );
										
									}
									

									
									

									
									

									ctx.closePath();
									ctx.stroke();

								}
							}
						};



						//***************MOVIMIENTO DEL MOUSE*********************
						/*
						mxEvent.addListener(img, 'dragstart', function(evt)
						{
							console.log("yyyy");
						});
						*/
						
						mxEvent.addListener(container, 'dragover', function(evt)
						{
							console.log("siii");
						});

						mxEvent.addListener(container, 'drop', function(evt)
						{
							//console.log("siii3");
						});

						document.addEventListener('mousemove', function(e) {
							
							
							var scale=graph.view.scale;
							var tam=100*scale; //tamano del rectangulo
							//var tam=100;
							//le sumo el ancho del menu
					    	var x = parseInt(e.pageX)-canvas_left;
					    	
					        var y = parseInt(e.pageY)-canvas_top;
					        //console.log(x+","+y);
					        var x2=0;
					        var y2=0;
					        var factor=9;
					        if(scale<0.57)
					        	factor=3;
					        var padding=factor+scale; //el padding del cuadro que sale al pasar el mouse
					        //console.log(scale);
					        //borro todos los cuadros
					        //repaintGrid();

					        //limpio los cuadros
					        
					        for(k=0; k<grid_x.length; k++)
					        {
					        	for(k2=0; k2<grid_y.length; k2++)
					        	{
  						        ctx.clearRect(grid_x[k]+(padding-2), grid_y[k2]+(padding-2), tam+3, tam+3);
  						    	}
				        	
					        }
					        


					        for(k=0; k<grid_x.length; k++)
					        {
					        	if(grid_x[k]>x)
					        	{
					        		x2=grid_x[k-1];
					        		break;
					        	}	
					        }

   					        for(k=0; k<grid_y.length; k++)
					        {
					        	if(grid_y[k]>y)
					        	{
					        		y2=grid_y[k-1];
					        		break;
					        	}	
					        }
					       

					        //console.log("EL PUNTO ES "+x2+","+y2);

					        //dibuja una linea
					        /*
							ctx.strokeStyle = '#B22222';
							ctx.fillStyle='blue';
							ctx.beginPath();
							ctx.fillRect(x2+padding, y2+padding, tam, tam);
							ctx.stroke();
							*/
							
							
							
					    })
					}
					catch (e)
					{
						console.log(mxLog);
						mxLog.show();
						mxLog.debug('Using background image');
						
						container.style.backgroundImage = 'url(\'editors/images/grid.gif\')';
					}
					
					var mxGraphViewValidateBackground = mxGraphView.prototype.validateBackground;
					mxGraphView.prototype.validateBackground = function()
					{
						mxGraphViewValidateBackground.apply(this, arguments);
						//grid_x=[];
						//grid_y=[];
						repaintGrid();
						
						//console.log(grid_x);
					};

					$( document ).ready(function() {



							/*
							//accordion
							$('dt').on('click', function (e) {
								console.log("vamos accordion");

						        e.preventDefault();
						        $(this).parent('dl').children('dd:visible').slideUp('slow');
						        $(this).nextUntil('dt').filter(':not(:visible)').slideDown('slow');

						        //$('dt').css("background-color", "transparent");
						        
						        $( 'dt' ).find( 'span' ).css("color", "#899595");
						        $( 'dt' ).find( 'i' ).css("color", "#899595");
						        
						        $( this ).find( 'span' ).css("color", "#f2ba35");
						        $( this ).find( 'i' ).css("color", "#f2ba35");
						        //$(this).css("background-color", "yellow");
						    });
						    */
							
							


							$( "#s_zoom_in" ).click(function() {
								var current_scale=graph.view.scale*100;
								if(current_scale<170)
								{
								graph.zoomIn();
								repaintGrid();
								var sx= graph.view.scale*100;
								$("#percentx").html(sx);
								}
							});
							$( "#s_zoom_out" ).click(function() {
								var current_scale=graph.view.scale*100;
								if(current_scale>80)
								{
								graph.zoomOut();
								repaintGrid();
								var sx= graph.view.scale*100;
								$("#percentx").html(sx);
								}
							});

							
							

							$( "#s_copy" ).click(function() {
								editor.execute('copy');
								
							});
							$( "#s_paste" ).click(function() {
								editor.execute('paste');
							});
							$( "#s_undo" ).click(function() {
								editor.execute('undo');
								
							});
							$( "#s_redo" ).click(function() {
								editor.execute('redo');
								
							});
							$( "#s_delete" ).click(function() {
								editor.execute('delete');
								
							});

							$( "#s_load1" ).click(function() {
							//borro todo
							 graph.removeCells(graph.getChildVertices(graph.getDefaultParent()))					
							 
							 var xml = '{$xml3 nofilter}';

		                     var doc = mxUtils.parseXml(xml);
	                    	 var codec = new mxCodec(doc);
		                     var elt = doc.documentElement.firstChild;
		                     var cells = [];
			                    while (elt != null){                
			                      cells.push(codec.decodeCell(elt));
			                        graph.refresh();
			                      elt = elt.nextSibling;
			                    }
			                

		               		 graph.addCells(cells);
							});

							$( "#s_load2" ).click(function() {

							 //borro todox
							 graph.removeCells(graph.getChildVertices(graph.getDefaultParent()));					

							 var xml = '{$xml1 nofilter}';
		                     var doc = mxUtils.parseXml(xml);
	                    	 var codec = new mxCodec(doc);
		                     var elt = doc.documentElement.firstChild;
		                     var cells = [];
			                    while (elt != null){                
			                      cells.push(codec.decodeCell(elt));
			                        graph.refresh();
			                      elt = elt.nextSibling;
			                    }
			                

		               		 graph.addCells(cells);
							});

							$( "#s_load3" ).click(function() {

							 //borro todo
							 graph.removeCells(graph.getChildVertices(graph.getDefaultParent()));					
							var xml = '{$xml2 nofilter}';

							
		                     var doc = mxUtils.parseXml(xml);
	                    	 var codec = new mxCodec(doc);
		                     var elt = doc.documentElement.firstChild;
		                     var cells = [];
			                    while (elt != null){                
			                      cells.push(codec.decodeCell(elt));
			                        graph.refresh();
			                      elt = elt.nextSibling;
			                    }
			                

		               		 graph.addCells(cells);
							});


							editor.addAction('test', function(editor, cell)
							{
								editor.execute('delete');
							});

							// Defines a new export action
							editor.addAction('export', function(editor, cell)
							{
								console.log("exporttt");
								var textarea = document.createElement('textarea');
								textarea.style.width = '400px';
								textarea.style.height = '400px';
								var enc = new mxCodec(mxUtils.createXmlDocument());
								var node = enc.encode(editor.graph.getModel());
								textarea.value = mxUtils.getPrettyXml(node);
								showModalWindow(graph, 'XML', textarea, 410, 440);
							});

							$( "#s_export" ).click(function() {
								editor.execute('export');
								
							});

							editor.addAction('grid_down', function(editor, cell)
							{
								
								//showModalWindow(graph, 'XML', contx, 410, 440);
								showProperties3(graph);

							});

							$( "#table-panel" ).click(function() {
								//editor.execute('grid_down');
								//$('#myModal').modal('toggle');
								//console.log("chupalo");
								var content = document.createElement('div');
								//veo si ya se creo anter
								if(document.getElementById("full_footer_form") !== null)
								{
									content.innerHTML = $("#full_footer_form").html();
									console.log("paso1");
								}else{
									content.setAttribute("id", "full_footer_form");
									//content.innerHTML = this.convertValueToString(cell);
									content.innerHTML = '{$footer_form nofilter}';
								}
								showModalWindow(graph, 'Propiedades', content, 400, 800);
								//le coloco los value
								for(var c=1; c<14; c++)
								{	
									console.log($("#fo_"+c).val());
									$("#fox"+c).val($("#fo_"+c).val());
								}

							});


							

							$( "#s_show" ).click(function() {

								//mxCellState state = graph.getView().getState('666');
								//state.setLabel( "xxx");

								//cell = graph.getSelectionCell();
								//showProperties(graph, cell);
								var cell = graph.getModel().getCell('666');
								/*
								var cell2 = graph.getModel().getCell('666');
								
								console.log(cell);
								
								var clone = mxUtils.clone(cell)
				
								clone.name = nameField.value;
								clone.type = typeField.value;

								if (useDefaultField.checked)
								{
									clone.defaultValue = defaultField.value;
								}
								else
								{
									clone.defaultValue = null;
								}
								
								clone.primaryKey = primaryKeyField.checked;
								clone.autoIncrement = autoIncrementField.checked;
								clone.notNull = notNullField.checked;
								clone.unique = uniqueField.checked;
								*/
								
								graph.model.setValue(cell, 'V2');
								
							});

							$( "#s_rotate" ).click(function() {

								
								$("#x-1-2").rotate(180);
								

								
							});

							




							function showProperties3(graph)
							{
								$('#myModal').modal('toggle');
								console.log("chupalo");
								/*
								// Creates a form for the user object inside
								// the cell
								var form = new mxForm('pro_grid');
								//para la fecha a\crear otra funcion en mxclient--> addDate
								// Adds a field for the columnname
								var fo_1 = form.addText('Cambio', $("#fo_1").val());
								var fo_2 = form.addText('Fecha', $("#fo_2").val());
								var fo_3 = form.addText('Nombre', $("#fo_3").val());
								var fo_4 = form.addText('Resp', $("#fo_4").val());
								var fo_5 = form.addText('Probado', $("#fo_5").val());
								var fo_6 = form.addText('Original', $("#fo_6").val());
								var fo_7 = form.addText('Proyecto/Obra', $("#fo_7").val());
								var fo_8 = form.addText('Sustitucion por', $("#fo_8").val());
								var fo_9 = form.addText('Descripción', $("#fo_9").val());
								var fo_10 = form.addText('Sustituido por', $("#fo_10").val());
								var fo_11 = form.addText('Observaciones', $("#fo_11").val());
								var fo_12 = form.addText('Codigo de Obra', $("#fo_12").val());
								var fo_13 = form.addImage('Logo de la Empresa', $("#fo_12").val());
								
								//var primaryKeyField = form.addCheckbox('Primary Key', cell.value.primaryKey);
								

								var wnd = null;

								// Defines the function to be executed when the
								// OK button is pressed in the dialog
								
								var okFunction = function()
								{
									$("#fo_1").val(fo_1.value);
									$("#fo_2").val(fo_2.value);
									$("#fo_3").val(fo_3.value);
									$("#fo_4").val(fo_4.value);
									$("#fo_5").val(fo_5.value);
									$("#fo_6").val(fo_6.value);
									$("#fo_7").val(fo_7.value);
									$("#fo_8").val(fo_8.value);
									$("#fo_9").val(fo_9.value);
									$("#fo_10").val(fo_10.value);
									$("#fo_11").val(fo_11.value);
									$("#fo_12").val(fo_12.value);

									//en el span
									$("#foo_1").html(fo_1.value);
									$("#foo_1x").html(fo_1.value);
									$("#foo_2").html(fo_2.value);
									$("#foo_3").html(fo_3.value);
									$("#foo_4").html(fo_4.value);
									$("#foo_5").html(fo_5.value);
									$("#foo_6").html(fo_6.value);
									$("#foo_7").html(fo_7.value);
									$("#foo_8").html(fo_8.value);
									$("#foo_9").html(fo_9.value);
									$("#foo_10").html(fo_10.value);
									$("#foo_11").html(fo_11.value);
									$("#foo_12").html(fo_12.value);

									wnd.destroy();
								}
								
								// Defines the function to be executed when the
								// Cancel button is pressed in the dialog
								var cancelFunction = function()
								{
									wnd.destroy();
								}
								form.addButtons(okFunction, cancelFunction);

								//var parent = graph.model.getParent(cell);
								//var name = parent.value.name + '.' + cell.value.name;
								var name = "xxx";
								
								wnd = showModalWindow2('Propiedades del Grid', form.table, 420, 530);
								//showModalWindow(this, 'Properties', content, 400, 300);
								*/
								
								
							};

							

							










							function showProperties(graph, cell)
							{
								// Creates a form for the user object inside
								// the cell
								var form = new mxForm('properties2');

								// Adds a field for the columnname
								var nameField = form.addText('Name', cell.value.name);
								var typeField = form.addText('Type', cell.value.type);
								
								var primaryKeyField = form.addCheckbox('Primary Key', cell.value.primaryKey);
								var autoIncrementField = form.addCheckbox('Auto Increment', cell.value.autoIncrement);
								var notNullField = form.addCheckbox('Not Null', cell.value.notNull);
								var uniqueField = form.addCheckbox('Unique', cell.value.unique);
								
								var defaultField = form.addText('Default', cell.value.defaultValue || '');
								var useDefaultField = form.addCheckbox('Use Default', (cell.value.defaultValue != null));

								var wnd = null;

								// Defines the function to be executed when the
								// OK button is pressed in the dialog
								var okFunction = function()
								{
									var clone = cell.value.clone();
									
									clone.name = nameField.value;
									clone.type = typeField.value;

									if (useDefaultField.checked)
									{
										clone.defaultValue = defaultField.value;
									}
									else
									{
										clone.defaultValue = null;
									}
									
									clone.primaryKey = primaryKeyField.checked;
									clone.autoIncrement = autoIncrementField.checked;
									clone.notNull = notNullField.checked;
									clone.unique = uniqueField.checked;
									
									graph.model.setValue(cell, clone);
								
									wnd.destroy();
								}
								
								// Defines the function to be executed when the
								// Cancel button is pressed in the dialog
								var cancelFunction = function()
								{
									wnd.destroy();
								}
								form.addButtons(okFunction, cancelFunction);

								var parent = graph.model.getParent(cell);
								//var name = parent.value.name + '.' + cell.value.name;
								var name = "xxx";
								wnd = showModalWindow2('Properties', form.table, 240, 240);
								//showModalWindow(this, 'Properties', content, 400, 300);
						};

							

							});



				})();

			
				
				// Gets the default parent for inserting new cells. This
				// is normally the first child of the root (ie. layer 0).
				var parent = graph.getDefaultParent();
								
				// Adds cells to the model in a single step
				graph.getModel().beginUpdate();
				try
				{
					//var v1 = graph.insertVertex(parent, null, 'Hello,', 20, 20, 80, 30);
					//var v2 = graph.insertVertex(parent, null, 'World!', 200, 150, 80, 30);
					//var e1 = graph.insertEdge(parent, null, '', v1, v2);
				}
				finally
				{
					// Updates the display
					graph.getModel().endUpdate();
				}

				graph.centerZoom = false;
				/*
				document.body.appendChild(mxUtils.button('+', function()
				{
					graph.zoomIn();
				}));
				
				document.body.appendChild(mxUtils.button('-', function()
				{
					graph.zoomOut();
				}));
				*/
				//*********************GRID HTML5*************************/



















				// Disable highlight of cells when dragging from toolbar
				graph.setDropEnabled(false);

				// Uses the port icon while connections are previewed
				graph.connectionHandler.getConnectImage = function(state)
				{
					return new mxImage(state.style[mxConstants.STYLE_IMAGE], 16, 16);
				};

				// Centers the port icon on the target port
				graph.connectionHandler.targetConnectImage = true;

				// Does not allow dangling edges
				graph.setAllowDanglingEdges(false);

				// Sets the graph container and configures the editor
				//editor.setGraphContainer(container);
				
				var config = mxUtils.load(
					'editors/config/keyhandler-commons.xml').
						getDocumentElement();
				editor.configure(config);
				
				// Defines the default group to be used for grouping. The
				// default group is a field in the mxEditor instance that
				// is supposed to be a cell which is cloned for new cells.
				// The groupBorderSize is used to define the spacing between
				// the children of a group and the group bounds.
				var group = new mxCell('Group', new mxGeometry(), 'group');
				group.setVertex(true);
				group.setConnectable(false);
				editor.defaultGroup = group;
				editor.groupBorderSize = 20;
				
				// Disables drag-and-drop into non-swimlanes.
				graph.isValidDropTarget = function(cell, cells, evt)
				{
					return this.isSwimlane(cell);
				};
				
				// Disables drilling into non-swimlanes.
				graph.isValidRoot = function(cell)
				{
					return this.isValidDropTarget(cell);
				}

				// Does not allow selection of locked cells
				//COLOCAMOS FALSE PARA QUE NO SE PUEDA CAMBIAR EL SIZE
				//canpalte
				graph.isCellSelectable = function(cell)
				{
					return true;
					//return false;
					//aqui salen las funciones disponibles
					//https://jgraph.github.io/mxgraph/docs/js-api/files/view/mxGraph-js.html
					//console.log("**********LOCKED: "+cell);
					//return !this.isCellLocked(cell);
				};

				// Returns a shorter label if the cell is collapsed and no
				// label for expanded groups
				graph.getLabel = function(cell)
				{
					var tmp = mxGraph.prototype.getLabel.apply(this, arguments); // "supercall"
					
					if (this.isCellLocked(cell))
					{
						// Returns an empty label but makes sure an HTML
						// element is created for the label (for event
						// processing wrt the parent label)
						return '';
					}
					else if (this.isCellCollapsed(cell))
					{
						var index = tmp.indexOf('</h1>');
						
						if (index > 0)
						{
							tmp = tmp.substring(0, index+5);
						}
					}
					
					return tmp;
				}

				// Disables HTML labels for swimlanes to avoid conflict
				// for the event processing on the child cells. HTML
				// labels consume events before underlying cells get the
				// chance to process those events.
				//
				// NOTE: Use of HTML labels is only recommended if the specific
				// features of such labels are required, such as special label
				// styles or interactive form fields. Otherwise non-HTML labels
				// should be used by not overidding the following function.
				// See also: configureStylesheet.
				/*
				graph.isHtmlLabel = function(cell)
				{
					return !this.isSwimlane(cell);
				}
				*/

				

				// To disable the folding icon, use the following code:
				/*graph.isCellFoldable = function(cell)
				{
					return false;
				}*/


				// Shows a "modal" window when double clicking a vertex.
				graph.dblClick = function(evt, cell)
				{
					//coloco el array con los contenidos
					var modal_cotent=[];
					{$propiedades nofilter}

					// Do not fire a DOUBLE_CLICK event here as mxEditor will
					// consume the event and start the in-place editor.
					if (this.isEnabled() &&
						!mxEvent.isConsumed(evt) &&
						cell != null &&
						this.isCellEditable(cell))
						{
						if (this.model.isEdge(cell) ||
							!this.isHtmlLabel(cell))
						{
							this.startEditingAtCell(cell);
						}
						else
						{
							var content = document.createElement('div');
							//content.innerHTML = this.convertValueToString(cell);
							
							var imgx = this.convertValueToString(cell);
							imgx =  imgx.replace('x-', "x-x-");

							
							var valx = cell.value;
				            var id= $(valx).attr('id');
							id =  id.replace('x-', "");
							esx = id.split("-");
					  		id=parseInt(esx[1]);
							console.log("ID:"+id);


							//content.innerHTML = '{$propiedades nofilter}';
							content.innerHTML = modal_cotent[id];
							content.innerHTML +=  '<table width="100%" class="caracteristicas"><tr><td>'+imgx+'</td></tr></table>';
							showModalWindow(this, 'Propiedades', content, 400, 400);
							
						}
					}

					// Disables any default behaviour for the double click
					mxEvent.consume(evt);
				};

				// Enables new connections
				graph.setConnectable(true);


				//graph.isAllowOverlapParent(false);

				// Adds all required styles to the graph (see below)
				configureStylesheet(graph);

				// Adds sidebar icons.
				//
				// NOTE: For non-HTML labels a simple string as the third argument
				// and the alternative style as shown in configureStylesheet should
				// be used. For example, the first call to addSidebar icon would
				// be as follows:
				// addSidebarIcon(graph, sidebar, 'Website', 'images/icons48/earth.png');
				
				{$f_product nofilter}
				/*
				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez01.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez01.png', '1', 1, 1, 'probando') ;

				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez02.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez02.png', '2', 2);

				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez03.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez03.png', '3', 3);

				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez04.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez04.png', '4', 4, 2);
				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez05.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez05.png', '5', 5);

				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez06.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez06.png', '6', 6);
				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez07.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez07.png', '7', 7);

				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez8.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez8.png', '8', 8);
				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez9.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez9.png', '9', 9);

				addSidebarIcon(graph, sidebar,
					'<img src="http://www.melopo.com/electro/piezas/piez10.png" width="100%">',
					'http://www.melopo.com/electro/piezas/piez10.png', '10', 10);
				*/


				
				// Displays useful hints in a small semi-transparent box.
				var hints = document.createElement('div');
				hints.style.position = 'absolute';
				hints.style.overflow = 'hidden';
				hints.style.width = '230px';
				hints.style.bottom = '56px';
				hints.style.height = '76px';
				hints.style.right = '20px';
				
				hints.style.background = 'black';
				hints.style.color = 'white';
				hints.style.fontFamily = 'Arial';
				hints.style.fontSize = '10px';
				hints.style.padding = '4px';

				mxUtils.setOpacity(hints, 50);
				
				mxUtils.writeln(hints, '- Drag an image from the sidebar to the graph');
				mxUtils.writeln(hints, '- Doubleclick on a vertex or edge to edit');
				mxUtils.writeln(hints, '- Shift- or Rightclick and drag for panning');
				mxUtils.writeln(hints, '- Move the mouse over a cell to see a tooltip');
				mxUtils.writeln(hints, '- Click and drag a vertex to move and connect');
				//Para mostrar un cuadro con informacion
				//document.body.appendChild(hints);
				
				// Creates a new DIV that is used as a toolbar and adds
				// toolbar buttons.
				var spacer = document.createElement('div');
				spacer.style.display = 'inline';
				spacer.style.padding = '8px';
				
				//addToolbarButton(editor, toolbar, 'groupOrUngroup', '(Un)group', 'images/group.png');
				
				// Defines a new action for deleting or ungrouping
				editor.addAction('groupOrUngroup', function(editor, cell)
				{
					cell = cell || editor.graph.getSelectionCell();
					if (cell != null && editor.graph.isSwimlane(cell))
					{
						editor.execute('ungroup', cell);
					}
					else
					{
						editor.execute('group');
					}
				});

				/*
				addToolbarButton(editor, toolbar, 'delete', 'Delete', 'images/delete2.png');
				
				toolbar.appendChild(spacer.cloneNode(true));
				
				addToolbarButton(editor, toolbar, 'cut', 'Cut', 'images/cut.png');
				addToolbarButton(editor, toolbar, 'copy', 'Copy', 'images/copy.png');
				addToolbarButton(editor, toolbar, 'paste', 'Paste', 'images/paste.png');

				toolbar.appendChild(spacer.cloneNode(true));
				
				addToolbarButton(editor, toolbar, 'undo', '', 'images/undo.png');
				addToolbarButton(editor, toolbar, 'redo', '', 'images/redo.png');
				
				toolbar.appendChild(spacer.cloneNode(true));
				
				addToolbarButton(editor, toolbar, 'show', 'Show', 'images/camera.png');
				addToolbarButton(editor, toolbar, 'print', 'Print', 'images/printer.png');
				
				toolbar.appendChild(spacer.cloneNode(true));
				*/

				// Defines a new export action
				editor.addAction('export', function(editor, cell)
				{
					var textarea = document.createElement('textarea');
					textarea.style.width = '400px';
					textarea.style.height = '400px';
					var enc = new mxCodec(mxUtils.createXmlDocument());
					var node = enc.encode(editor.graph.getModel());
					textarea.value = mxUtils.getPrettyXml(node);
					showModalWindow(graph, 'XML', textarea, 410, 440);
				});

				/*
				addToolbarButton(editor, toolbar, 'export', 'Export', 'images/export1.png');

				// ---
				
				// Adds toolbar buttons into the status bar at the bottom
				// of the window.
				addToolbarButton(editor, status, 'collapseAll', 'Collapse All', 'images/navigate_minus.png', true);
				addToolbarButton(editor, status, 'expandAll', 'Expand All', 'images/navigate_plus.png', true);

				status.appendChild(spacer.cloneNode(true));
				
				addToolbarButton(editor, status, 'enterGroup', 'Enter', 'images/view_next.png', true);
				addToolbarButton(editor, status, 'exitGroup', 'Exit', 'images/view_previous.png', true);

				status.appendChild(spacer.cloneNode(true));

				addToolbarButton(editor, status, 'zoomIn', '', 'images/zoom_in.png', true);
				addToolbarButton(editor, status, 'zoomOut', '', 'images/zoom_out.png', true);
				addToolbarButton(editor, status, 'actualSize', '', 'images/view_1_1.png', true);
				addToolbarButton(editor, status, 'fit', '', 'images/fit_to_size.png', true);
				*/

				//***********MOSTRAR EL PREVIEW ARRIBA A LA DERECHA*******/
				// Creates the outline (navigator, overview) for moving
				// around the graph in the top, right corner of the window.
				var outln = new mxOutline(graph, outline);

				// To show the images in the outline, uncomment the following code
				//outln.outline.labelsVisible = true;
				//outln.outline.setHtmlLabels(true);
				
				// Fades-out the splash screen after the UI has been loaded.
				var splash = document.getElementById('splash');
				if (splash != null)
				{
					try
					{
						mxEvent.release(splash);
						mxEffects.fadeOut(splash, 100, true);
					}
					catch (e)
					{
					
						// mxUtils is not available (library not loaded)
						splash.parentNode.removeChild(splash);
					}
				}


			}
			graph_full = graph;
			editor_full= editor;
			


				//********************************INICIO ****************************
				//POPUP 
				var content = document.createElement('div');
				content.setAttribute("id", "inicio_armado");
				content.innerHTML = '{$inicio_armado nofilter}';
				//agrego las funciones para que salga el cuadro del V1
				{include file="./parent_input.tpl"}
				//showModalWindow(graph, 'Especificaciones del Armado', content, 400, 600);

				//*********************DATA DEL CIRCUITO Y INSERT DE LA DATA DEL BORNEO*****************				
				//si tiene data en el circuito se muestra
				var circuito_inicial=1;
				if(circuito_inicial=={$circuito_inicial nofilter})
				{
					//borro todo
					/*
					 graph.removeCells(graph.getChildVertices(graph.getDefaultParent()))
					 var xml = '{$circuito_inicial_data nofilter}';
                     var doc = mxUtils.parseXml(xml);
                	 var codec = new mxCodec(doc);
                     var elt = doc.documentElement.firstChild;
                     var cells = [];
	                    while (elt != null){                
	                      cells.push(codec.decodeCell(elt));
	                      //console.log(codec.decodeCell(elt));
	                      //aqui cambiamos el parent
	                        graph.refresh();
	                      elt = elt.nextSibling;
	                    }
	                

               		 graph.addCells(cells);
					*/
               		
               		// Load cells and layouts the graph
               		//graph.removeCells(graph.getChildVertices(graph.getDefaultParent()))
  					


               		 //*********************INSERT DE LA DATA DEL BORNEO*****************
               		
               		 /*
               		 var v2="";
               		 var cell_b;
               		 //graph.getModel().beginUpdate();

               		 var model = graph.getModel();
               		 model.beginUpdate();
               		 try{

	               		 cell_b = graph.getModel().getCell('1-38');                        
	               		 v2 = graph.insertVertex(cell_b, 'b1-1-38', '-X1', 0, 0.5, 10, 10, 'fontSize=8;strokeColor=none;fillColor=#FFFFFF;resizable=0;autosize=1;');
	               		 v2.geometry.offset = new mxPoint(32, -19);                            
	               		 v2.geometry.relative = true;
						 
               		 }
					finally
					{
						model.endUpdate();
					}
					*/



               		 //graph.getModel().endUpdate();

               		 /*
               		 var parent = graph.getDefaultParent();
               		 v2 = graph.insertVertex(parent, 'v1-1-38', '-X1', 0, 0.5, 10, 10, 'fontSize=8;strokeColor=none;fillColor=#FFFFFF;resizable=0;autosize=1;');
               		 //v2.geometry.offset = new mxPoint(32, -19);                            
               		 //v2.geometry.relative = true;
               		 */

           		}
           		//*********************DATA DEL CIRCUITO Y INSERT DE LA DATA DEL BORNEO*****************

           		//coloco la data del form de abajo 
           		for(var c=1; c<14; c++)
				{	
					//en el span
					$("#foo_"+c).html($("#fo_"+c).val());
				}

				//fecha
				$("#foo_1x").html($("#fo_2").val());
				//la imagen
				$('#img_url')[0].src = $("#fo_13").val()
           		//********************************INICIO ****************************
	
		};
		
		function addToolbarButton(editor, toolbar, action, label, image, isTransparent)
		{
			var button = document.createElement('button');
			button.style.fontSize = '10';
			if (image != null)
			{
				var img = document.createElement('img');
				img.setAttribute('src', image);
				img.style.width = '16px';
				img.style.height = '16px';
				img.style.verticalAlign = 'middle';
				img.style.marginRight = '2px';
				button.appendChild(img);
			}
			if (isTransparent)
			{
				button.style.background = 'transparent';
				button.style.color = '#FFFFFF';
				button.style.border = 'none';
			}
			mxEvent.addListener(button, 'click', function(evt)
			{
				editor.execute(action);
			});
			mxUtils.write(button, label);
			toolbar.appendChild(button);
		};

		function showModalWindow(graph, title, content, width, height)
		{
			
			var background = document.createElement('div');
			background.setAttribute("id", "background_modal");
			background.style.position = 'absolute';
			background.style.left = '0px';
			background.style.top = '0px';
			background.style.right = '0px';
			background.style.bottom = '0px';
			background.style.background = 'black';
			mxUtils.setOpacity(background, 50);
			document.body.appendChild(background);
			
			if (mxClient.IS_IE)
			{
				new mxDivResizer(background);
			}
			
			var x = Math.max(0, document.body.scrollWidth/2-width/2);
			var y = Math.max(10, (document.body.scrollHeight ||
						document.documentElement.scrollHeight)/2-height*2/3);
			var wnd = new mxWindow(title, content, x, y, width, height, false, true);
			wnd.setClosable(true);
			
			// Fades the background out after after the window has been closed
			wnd.addListener(mxEvent.DESTROY, function(evt)
			{
				graph.setEnabled(true);
				mxEffects.fadeOut(background, 50, true, 
					10, 30, true);
			});

			graph.setEnabled(false);
			graph.tooltipHandler.hide();
			wnd.setVisible(true);
		};

		function showModalWindow2(title, content, width, height)
		{
			var background = document.createElement('div');
			background.style.position = 'absolute';
			background.style.left = '0px';
			background.style.top = '0px';
			background.style.right = '0px';
			background.style.bottom = '0px';
			background.style.background = 'black';
			mxUtils.setOpacity(background, 50);
			document.body.appendChild(background);
			
			if (mxClient.IS_QUIRKS)
			{
				new mxDivResizer(background);
			}
			
			var x = Math.max(0, document.body.scrollWidth/2-width/2);
			var y = Math.max(10, (document.body.scrollHeight ||
						document.documentElement.scrollHeight)/2-height*2/3);
			var wnd = new mxWindow(title, content, x, y, width, height, false, true);
			wnd.setClosable(true);
						
			// Fades the background out after after the window has been closed
			wnd.addListener(mxEvent.DESTROY, function(evt)
			{
				mxEffects.fadeOut(background, 50, true, 
					10, 30, true);
			});

			wnd.setVisible(true);
			
			return wnd;
		};
		
		//canpalte
		function addSidebarIcon(graph, sidebar, label, image, id=null, num, tam_type=1, pieza_name='test', borneos=0)
		{
			// Function that is executed when the image is dropped on
			// the graph. The cell argument points to the cell under
			// the mousepointer if there is one.
			//var linea_h=$('#linea_h').val();
			//var linea_v=$('#linea_v').val();
			var bounds = graph.getGraphBounds();
			var width = Math.max(bounds.x + bounds.width, graph.container.clientWidth);
			var height = Math.max(bounds.y + bounds.height, graph.container.clientHeight);
			w = width;
			h = height;
			var linea_v=(w-10)/7;
			//var linea_h=h/9;
			//proporcion 147 x 75
			var linea_h=linea_v*75/147;

			var tamx=linea_h;
			//si es tipo 2 coloco el doble del tamano, son los de fila 8
				if(tam_type==2)
					tamx=(tamx-1)*2;


			var funct = function(graph, evt, cell, x, y)
			{
				var parent = graph.getDefaultParent();
				var model = graph.getModel();
				var linea_h=$('#linea_h').val();
				var linea_v=$('#linea_v').val();
				var v1 = null;



				
				//agrego las funciones para que salga el cuadro del V1
				{include file="./parent_input.tpl"}


				//linea_v=144.2857;
				//console.log("**1234 - ANCHO:"+linea_v);
				model.beginUpdate();
				try
				{
					// NOTE: For non-HTML labels the image must be displayed via the style
					// rather than the label markup, so use 'image=' + image for the style.
					// as follows: v1 = graph.insertVertex(parent, null, label,
					// pt.x, pt.y, 120, 120, 'image=' + image);
					//
					//console.log("PARETNT"+parent);
					
					
					//EL ID ES X-Y DONDE X ES UN CORRELATIVO Y 'Y' ES EL ID QUE VIENE DE LA BD
					//console.log("AGREGO");
					
					var full=graph.getChildVertices(graph.getDefaultParent());
					//console.log(full);
					new_id='1-'+id;
					var idx=0;
					var valido=1;
					//saco todos los que estan actualmente
					full.forEach(function(element) {
					  idx=element.id;
					  esx = idx.split("-");
					  idx=parseInt(esx[0])+1;
					  //saco las coordenadas
					  var x2=element.geometry.x;
					  var y2=element.geometry.y;
					  //valido que no este otro item en esa celda
					  //console.log(x+"="+x2+" // "+y+"="+y2);
					  //over pipe
					  if( (x==x2)&&(y==y2))
					  {
					  	valido=0;
					  	//console.log("NO ES VALIDO");
					  }

					});
					if(idx!=0)
					{
						new_id=idx+"-"+id;

					}


					if(valido==1)
					{
					//--> EL ALTO Y ANCHO ESTA EN linea_v	Y linea_H
					//v1 = graph.insertVertex(null, new_id, label, x, y, linea_v, linea_h, 'selectable=0;');
					
					label='<img  name="'+pieza_name+'" id="x-'+new_id+'" src="'+image+'" width="'+(linea_v-3)+'" height="'+(tamx-3)+'">';
					//console.log("lo crea");
					v1 = graph.insertVertex(null, new_id, label, x, y, linea_v, tamx, 'selectable=1;resizable=1;image='+image);



					if(borneos==1)
					{
						
					   
					   /*
					   var id_bornero=idx;
					    if(id_bornero==0)
					    	id_bornero=1;
					    */

					    var enc = new mxCodec(mxUtils.createXmlDocument());
						var node = enc.encode(editor_full.graph.getModel());
						var export_var = mxUtils.getPrettyXml(node);
					    var url = "../Electro.php"; 
						$.ajax({
						url : url,
						type: "POST",
					    data : {
						        accion : '5',
						        xml: export_var
					    },
					    dataType : "json",
						cache : false,
						success : function(response){
						  //$("#nada").submit();
						  console.log("aqui viene");
						  console.log(response);
						  var l1=response[0];
						  var l2=response[1];
						  var l3=response[2];
						  console.log("valor de l1:"+l1);
		  					    
								

								//*********************PARA BORNEOS**************************
								var v2 = graph.insertVertex(v1, 'b1-'+new_id, '-X'+l1, 0, 0.5, 10, 10, 'fontSize=8;strokeColor=none;fillColor=#FFFFFF;resizable=0;autosize=1;');
								v2.geometry.offset = new mxPoint(32, -19);
								v2.geometry.relative = true;

								v2 = graph.insertVertex(v1, 'b2-'+new_id, '-P'+l2, 0, 0.5, 10, 10, 'fontSize=8;strokeColor=none;fillColor=#FFFFFF;resizable=0;autosize=1;');
								v2.geometry.offset = new mxPoint(116, -23);
								v2.geometry.relative = true;

								v2 = graph.insertVertex(v1, 'b3-'+new_id, '-W'+l3, 0, 0.5, 10, 10, 'fontSize=8;strokeColor=none;fillColor=#FFFFFF;resizable=0;autosize=1;rotation=270');
								v2.geometry.offset = new mxPoint(5, -19);
								v2.geometry.relative = true;

								v2 = graph.insertVertex(v1, 'b4-'+new_id, 'RZ4-K 5G6', 0, 0.5, 10, 10, 'fontSize=8;strokeColor=none;fillColor=#FFFFFF;resizable=0;autosize=1;rotation=270');
								v2.geometry.offset = new mxPoint(16, -26);
								v2.geometry.relative = true;
													
								//buscar como centrar										
								v2 = graph.insertVertex(v1, 'b5-'+new_id, 'Salida2', 0, 0.5, 10, 10, 'fontSize=8;strokeColor=none;fillColor=#FFFFFF;resizable=0;autosize=1;');
								v2.geometry.offset = new mxPoint(47, 47);
								v2.geometry.relative = true;
								model.endUpdate();
							
						} }); //cierro sucess y ajax

					}


					//v1.geometry.offset = new mxPoint(-8, -4);
					/*
					var portx = graph.insertVertex(null, new_id, label, x, y, linea_v, linea_h,
							'image=piezas/p1.png;align=right;imageAlign=right;spacingRight=1', false);
							*/
					//portx.geometry.offset = new mxPoint(-6, -8);
					

					//v1.setConnectable(true);
					}

					full=graph.getChildVertices(graph.getDefaultParent());
					//console.log(full);

					//v1.setVertexLabelsMovable(false);


					//v1.isAllowOverlapParent(false);
					//v1.setAutoSizeCells(false);
					//v1.setExtendParents(true);
					//v1.setConstrainChildren(true);
					// Presets the collapsed size
					/*
					v1.geometry.alternateBounds = new mxRectangle(0, 0, 120, 40);
										
					// Adds the ports at various relative locations
					var port = graph.insertVertex(v1, null, 'Trigger', 0, 0.25, 16, 16,
							'port;image=editors/images/overlays/flash.png;align=right;imageAlign=right;spacingRight=18', true);
					port.geometry.offset = new mxPoint(-6, -8);
		
					var port = graph.insertVertex(v1, null, 'Input', 0, 0.75, 16, 16,
							'port;image=editors/images/overlays/check.png;align=right;imageAlign=right;spacingRight=18', true);
					port.geometry.offset = new mxPoint(-6, -4);
					
					var port = graph.insertVertex(v1, null, 'Error', 1, 0.25, 16, 16,
							'port;image=editors/images/overlays/error.png;spacingLeft=18', true);
					port.geometry.offset = new mxPoint(-8, -8);

					var port = graph.insertVertex(v1, null, 'Result', 1, 0.75, 16, 16,
							'port;image=editors/images/overlays/information.png;spacingLeft=18', true);
					port.geometry.offset = new mxPoint(-8, -4);
					*/
				}
				finally
				{
					model.endUpdate();
				}
				
				graph.setSelectionCell(v1);
				//************le hago doble click para abrir el popup*******************/
					
					var content = document.createElement('div');

					var modal_cotent=[];
					{$propiedades nofilter}
					
					
					
					//console.log("ID:"+id);
					imgx =  label.replace('x-', "x-x-");
					//content.innerHTML = '{$propiedades nofilter}';
					content.innerHTML = modal_cotent[id];
					content.innerHTML +=  '<table width="100%" class="caracteristicas"><tr><td>'+imgx+'</td></tr></table>';
					showModalWindow(graph, 'Propiedades', content, 400, 400);

			}
			
			// Creates the image which is used as the sidebar icon (drag source)
			var img = document.createElement('img');
			img.setAttribute('src', image);
			img.style.width = '120px';
			img.className = 'materiales_img';
			//img.style.height = '48px';
			img.title = 'Arrastra la Imagen al Diagrama';
			var current_html="";
			var td = document.getElementById('I-'+num);
			td.appendChild(img);
			$('#I-'+num).append("<div class='nombre_pieza'>"+pieza_name+"</div>");
			
			
			
			//guia de puntos cuando hace el drag de la izquierda al medio
			var dragElt = document.createElement('div');
			dragElt.style.border = 'dashed black 3px';
			//console.log("MAMA"+linea_v);
			dragElt.style.width = linea_v+'px';
			//dragElt.style.height = linea_h+'px';
			dragElt.style.height = tamx+'px';
			  					
			// Creates the image which is used as the drag icon (preview)
			var ds = mxUtils.makeDraggable(img, graph, funct, dragElt, 0, 0, true, true);
			//LE QUITAMOS LA GUIA PARA QUE ENCAJE EN EL GRID
			//ds.setGuidesEnabled(true);
		};


		
		function configureStylesheet(graph)
		{
		
			
			var style = new Object();
			style[mxConstants.STYLE_SHAPE] = mxConstants.SHAPE_RECTANGLE;
			style[mxConstants.STYLE_PERIMETER] = '0';
			style[mxConstants.STYLE_ALIGN] = mxConstants.ALIGN_CENTER;
			style[mxConstants.STYLE_VERTICAL_ALIGN] = mxConstants.ALIGN_MIDDLE;
			//style[mxConstants.STYLE_GRADIENTCOLOR] = '#FFFFFF';
			//color de fondo
			style[mxConstants.STYLE_FILLCOLOR] = '#FFFFFF';
			style[mxConstants.STYLE_STROKECOLOR] = '#000000';
			style[mxConstants.STYLE_FONTCOLOR] = '#000000';
			style[mxConstants.STYLE_ROUNDED] = false;
			style[mxConstants.STYLE_OPACITY] = '80';
			style[mxConstants.STYLE_FONTSIZE] = '12';
			style[mxConstants.STYLE_FONTSTYLE] = 0;
			style[mxConstants.STYLE_IMAGE_WIDTH] = '100%';
			style[mxConstants.STYLE_IMAGE_HEIGHT] = '100%';
			style[mxConstants.STYLE_SPACING] = '1';
			style[mxConstants.STYLE_PERIMETER_SPACING] = '1';
			style[mxConstants.STYLE_STROKEWIDTH] = '1';

			graph.getStylesheet().putDefaultVertexStyle(style);
		

			// NOTE: Alternative vertex style for non-HTML labels should be as
			// follows. This repaces the above style for HTML labels.
			/*
			var style = new Object();
			style[mxConstants.STYLE_SHAPE] = mxConstants.SHAPE_LABEL;
			style[mxConstants.STYLE_PERIMETER] = mxPerimeter.RectanglePerimeter;
			style[mxConstants.STYLE_VERTICAL_ALIGN] = mxConstants.ALIGN_TOP;
			style[mxConstants.STYLE_ALIGN] = mxConstants.ALIGN_CENTER;
			style[mxConstants.STYLE_IMAGE_ALIGN] = mxConstants.ALIGN_CENTER;
			style[mxConstants.STYLE_IMAGE_VERTICAL_ALIGN] = mxConstants.ALIGN_TOP;
			style[mxConstants.STYLE_SPACING_TOP] = '0';
			style[mxConstants.STYLE_PERIMETER_SPACING] = '1';
			//style[mxConstants.STYLE_SPACING_TOP] = '1';
			style[mxConstants.STYLE_GRADIENTCOLOR] = '#7d85df';
			style[mxConstants.STYLE_STROKECOLOR] = '#5d65df';
			style[mxConstants.STYLE_FILLCOLOR] = '#adc5ff';
			style[mxConstants.STYLE_FONTCOLOR] = '#1d258f';
			style[mxConstants.STYLE_FONTFAMILY] = 'Verdana';
			style[mxConstants.STYLE_FONTSIZE] = '12';
			style[mxConstants.STYLE_FONTSTYLE] = '1';
			style[mxConstants.STYLE_ROUNDED] = '1';
			style[mxConstants.STYLE_IMAGE_WIDTH] = '8';
			style[mxConstants.STYLE_IMAGE_HEIGHT] = '8';
			style[mxConstants.STYLE_OPACITY] = '80';
			graph.getStylesheet().putDefaultVertexStyle(style);
			*/
			
			style = new Object();
			style[mxConstants.STYLE_SHAPE] = mxConstants.SHAPE_SWIMLANE;
			style[mxConstants.STYLE_PERIMETER] = mxPerimeter.RectanglePerimeter;
			style[mxConstants.STYLE_ALIGN] = mxConstants.ALIGN_CENTER;
			style[mxConstants.STYLE_VERTICAL_ALIGN] = mxConstants.ALIGN_TOP;
			style[mxConstants.STYLE_FILLCOLOR] = '#000000';
			style[mxConstants.STYLE_GRADIENTCOLOR] = '#000000';
			style[mxConstants.STYLE_STROKECOLOR] = '#000000';
			style[mxConstants.STYLE_FONTCOLOR] = '#000000';
			style[mxConstants.STYLE_ROUNDED] = true;
			style[mxConstants.STYLE_OPACITY] = '80';
			style[mxConstants.STYLE_STARTSIZE] = '30';
			style[mxConstants.STYLE_FONTSIZE] = '16';
			style[mxConstants.STYLE_FONTSTYLE] = 1;
			graph.getStylesheet().putCellStyle('group', style);
			
			/*
			style = new Object();
			style[mxConstants.STYLE_SHAPE] = mxConstants.SHAPE_IMAGE;
			style[mxConstants.STYLE_FONTCOLOR] = '#774400';
			style[mxConstants.STYLE_PERIMETER] = mxPerimeter.RectanglePerimeter;
			style[mxConstants.STYLE_PERIMETER_SPACING] = '6';
			style[mxConstants.STYLE_ALIGN] = mxConstants.ALIGN_LEFT;
			style[mxConstants.STYLE_VERTICAL_ALIGN] = mxConstants.ALIGN_MIDDLE;
			style[mxConstants.STYLE_FONTSIZE] = '10';
			style[mxConstants.STYLE_FONTSTYLE] = 2;
			style[mxConstants.STYLE_IMAGE_WIDTH] = '16';
			style[mxConstants.STYLE_IMAGE_HEIGHT] = '16';
			graph.getStylesheet().putCellStyle('port', style);
			*/
			/*
			style = graph.getStylesheet().getDefaultEdgeStyle();
			style[mxConstants.STYLE_LABEL_BACKGROUNDCOLOR] = '#FFFFFF';
			style[mxConstants.STYLE_STROKEWIDTH] = '2';
			style[mxConstants.STYLE_ROUNDED] = true;
			style[mxConstants.STYLE_EDGE] = mxEdgeStyle.EntityRelation;
			*/
			
		};

		//***************FUNCIONES PARA LEER EL XML********************************/
		// Custom parser for simple file format
		function parse(graph, filename)
		{
			var model = graph.getModel();
								
			// Gets the default parent for inserting new cells. This
			// is normally the first child of the root (ie. layer 0).
			var parent = graph.getDefaultParent();

			var req = mxUtils.load(filename);
			var text = req.getText();

			var lines = text.split('\n');
			
			// Creates the lookup table for the vertices
			var vertices = [];

			// Parses all lines (vertices must be first in the file)
			graph.getModel().beginUpdate();
			try
			{
				for (var i=0; i<lines.length; i++)
				{
					// Ignores comments (starting with #)
					var colon = lines[i].indexOf(':');
	
					if (lines[i].substring(0, 1) != "#" ||
						colon == -1)
					{
						var comma = lines[i].indexOf(',');
						var value = lines[i].substring(colon+2, lines[i].length);
						
						if (comma == -1 || comma > colon)
						{
							var key = lines[i].substring(0, colon);
							
							if (key.length > 0)
							{
								vertices[key] = graph.insertVertex(parent, null, value, 0, 0, 80, 70);
							}
						}
						else if (comma < colon)
						{
							// Looks up the vertices in the lookup table
							var source = vertices[lines[i].substring(0, comma)];
							var target = vertices[lines[i].substring(comma+1, colon)];
							
							if (source != null && target != null)
							{
								var e = graph.insertEdge(parent, null, value, source, target);
	
								// Uses the special 2-way style for 2-way labels
								if (value.indexOf('2-Way') >= 0)
								{
									e.style = '2way';
								}
							}
						}
					}
				}
			}
			finally
			{
				graph.getModel().endUpdate();
			}
		};
		
		// Parses the mxGraph XML file format
		function read(graph, filename)
		{
			var req = mxUtils.load(filename);
			var root = req.getDocumentElement();
			var dec = new mxCodec(root.ownerDocument);
			
			dec.decode(root, graph.getModel());
		};

		
	</script>