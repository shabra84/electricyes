<?php
  require_once('config/config.inc.php');
  require_once('init.php');
//$id_user=55;
//  Context::getContext()->shop = Shop::initialize();
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "1";
*/
$id_user=Context::getContext()->customer->id;

/*
addToCart(170);
addToCart(160);
addToCart(153);
$productCart=getCart();
print_r($productCart);
*/
        //print_r($u2);


//phpinfo();
/*
$accion=99;
if($accion==99)
{
    /*
    //Example PHP array
    $example = array(1, 2, 3);

    //Encode $example array into a JSON string.
    $exampleEncoded = json_encode($example);

    //Insert the string into a column
    $sql = "INSERT INTO foo (bar) VALUES ('$exampleEncoded')";
     Db::getInstance()->execute($sql);
     */
     //Select the row, just like you would any other row.
  /*
        $sql = "SELECT bar FROM foo WHERE id = 1";

        $u= Db::getInstance()->executeS($sql);

        $x=$u[0];
        print_r($x['bar']);
        echo "xxxx";
        //$result = $databaseObject->fetch($sql);
         
        //Decode the JSON string using json_decode.
        $example = json_decode($x['bar'], true);
         print_r($example);
        //Do a var_dump, just to see the structure.
        //var_dump($example);

    return 0;

    //etc
}
*/
@$accion=$_POST['accion'];

//reestablecer
if($accion=="2")
{

    Db::getInstance()->execute("delete from e_user_data where id_user='$id_user' and status='0'");
    echo '1';

}

//guardar especificaciones de armado
if($accion=="1")
{
save_user_data($id_user,@$_POST['export_var'], $_POST['tipo_armado'], $_POST['tension_nominal'], $_POST['frecuencia'], $_POST['int_corto'], $_POST['norma_d'], $_POST['esquema_d'], $_POST['tension_m'], $_POST['borneos'], $_POST['entrada_c'], $_POST['fox1'], $_POST['fox2'], $_POST['fox3'], $_POST['fox4'], $_POST['fox5'], $_POST['fox6'], $_POST['fox7'], $_POST['fox8'], $_POST['fox9'], $_POST['fox10'], $_POST['fox11'], $_POST['fox12'] );
    echo '1';

}

//guardar el esquema
if($accion=="3")
{
    //guardo todo
    save_user_data($id_user,@$_POST['export_var'], $_POST['tipo_armado'], $_POST['tension_nominal'], $_POST['frecuencia'], $_POST['int_corto'], $_POST['norma_d'], $_POST['esquema_d'], $_POST['tension_m'], $_POST['borneos'], $_POST['entrada_c'], $_POST['fox1'], $_POST['fox2'], $_POST['fox3'], $_POST['fox4'], $_POST['fox5'], $_POST['fox6'], $_POST['fox7'], $_POST['fox8'], $_POST['fox9'], $_POST['fox10'], $_POST['fox11'], $_POST['fox12'] );

    $user_data = get_user_data($id_user);
    $id_user_data=$user_data['id_user_data'];
    $nombre = $_POST['nombre'];
    //paso a 1 el status
    //echo "update e_user_data set status='1' where id_user_data='$id_user_data'";
    Db::getInstance()->execute("update e_user_data set nombre = '$nombre', status='1' where id_user_data='$id_user_data'");
    echo '1';    


}

//cargar esquema
if($accion=="4")
{
    $dir = str_replace('Electro.php', '',  $_SERVER['SCRIPT_FILENAME']);
    $fichero = $dir."xml/data.xml";

    //buscar las pages y colocarlo al cargar
    
    $user_data = get_user_data_id($_POST['id_user_data']);
    $esquema=$user_data['circuito'];
    //GUARDO EN EL XML
    file_put_contents($fichero, $esquema);
    echo $fichero;


}


//recibe el xml y retorna el valor de los borneos
if($accion=="5")
{

    //$xml=$_POST['xml'];
    $l1[0]=$l2[0]=$l3[0]=0;
    $borneos_var="";
    $circuito = $_POST['xml'];  

    if($circuito)
    {
            foreach ($circuito as $key => $value) {
                if($value!="")
                {
                    //echo $value;
                    $xml = new SimpleXMLElement($value);
                    $items_iterator = clone $xml;
                    $num=0;
                   // print_r($items_iterator);
                    foreach ($items_iterator->root->mxCell as $xx) {
                       // print_r($xx);
                        $id_p=$xx['id'];
                        $parent_p=$xx['parent'];
                        $value_p=$xx['value'];
                        $c=explode('-', $id_p);
                        if(@$c[1]!="")
                        {
                            //echo "x4";
                            //veo si es borneo
                            if( (@$c[0]=="b1")||(@$c[0]=="b2")||(@$c[0]=="b3")||(@$c[0]=="b4")||(@$c[0]=="b5") )
                            {
                                
                               // echo "x8";
                                //le quito el -X, -P y -W a los value
                                $value=str_replace('-X', '', $value_p);
                                $value=str_replace('-P', '', $value);
                                $value=str_replace('-W', '', $value);

                                if(@$c[0]=="b1"){$l1[]=$value;} //-X1
                                if(@$c[0]=="b2"){$l2[]=$value;} //-P1
                                if(@$c[0]=="b3"){$l3[]=$value;} //-W1
                                if(@$c[0]=="b4"){} //RZ4-K 5G6
                                if(@$c[0]=="b5"){} //Salida
                            }
                        }
                    }

                }
            }

    }


        
    $res[0]=max($l1);
    $res[1]=max($l2);
    $res[2]=max($l3);
    echo json_encode($res);
    //echo $res;
}

//recibe el xml y retorna el valor de los interruptores
if($accion=="7")
{

    //$xml=$_POST['xml'];
    $l1[0]=$l2[0]=$l3[0]=0;
    $borneos_var="";
    $circuito = $_POST['xml'];  

    if($circuito)
    {
            foreach ($circuito as $key => $value) {
                if($value!="")
                {
                    //echo $value;
                    $xml = new SimpleXMLElement($value);
                    $items_iterator = clone $xml;
                    $num=0;
                   // print_r($items_iterator);
                    foreach ($items_iterator->root->mxCell as $xx) {
                       // print_r($xx);
                        $id_p=$xx['id'];
                        $parent_p=$xx['parent'];
                        $value_p=$xx['value'];
                        $c=explode('-', $id_p);
                        if(@$c[1]!="")
                        {
                            //echo "x4";
                            //veo si es un interruptor
                            if( (@$c[0]=="i1")||(@$c[0]=="i2")||(@$c[0]=="i3")||(@$c[0]=="i4")||(@$c[0]=="i5") )
                            {
                                
                               // echo "x8";
                                //le quito el -X, -P y -W a los value
                                $value=str_replace('-Q', '', $value_p);
                                $value=str_replace('-P', '', $value);
                                $value=str_replace('-W', '', $value);

                                if(@$c[0]=="i1"){$l1[]=$value;} //-Q1
                                if(@$c[0]=="i2"){$l2[]=$value;} //63A
                                if(@$c[0]=="i3"){$l3[]=$value;} //Curva C
                                if(@$c[0]=="i4"){} //6KA
                                if(@$c[0]=="i5"){} //General
                            }
                        }
                    }

                }
            }

    }


        
    $res[0]=max($l1);
    $res[1]=max($l2);
    $res[2]=max($l3);
    echo json_encode($res);
    //echo $res;
}

//recibe el xml y lo coloca en el xml
if($accion=="6")
{
    $dir = str_replace('Electro.php', '',  $_SERVER['SCRIPT_FILENAME']);
    $fichero = $dir."xml/data.xml";
    $esquema=$_POST['xml'];
    //GUARDO EN EL XML
    file_put_contents($fichero, $esquema);
    echo $fichero;
}


//VALIDA LAS PIEZAS DENTRO DEL ESQUEMA, PARA QUE NO COLOQUEN 2 EN EL MISMO LUGAR
//valido que las piezas tenga el numero de conexiones
//valido los interruptores

if($accion=="8")
{
    $res=validar_todo_esquema($_POST['xml']);
    echo json_encode($res);
}

//VALIDA LAS PIEZAS DENTRO DEL ESQUEMA, PARA QUE NO COLOQUEN 2 EN EL MISMO LUGAR
//valido que las piezas tenga el numero de conexiones
//valido los interruptores
//se busca el repartidor
if($accion=="9")
{
    //esta es para saber si agrego al carrito, pasa con el interruptor, armario
    $_SESSION['addToCart'] = 0;
    if($_POST['addToCart']==1)
    {
        //borro el carrito actual si hay
        deleteCart();
        $_SESSION['addToCart'] = 1;
        ////coloco en la session el id_user_circuito
        //$_SESSION['']
    }    

    //33 categorya de los repartidores
    $idcategory=33;
    $category = new Category($idcategory, (int)Context::getContext()->language->id);
    $nb = 10000;
    $products = $category->getProducts((int)Context::getContext()->language->id, 1, ($nb ? $nb : 10), 'date_upd', 'DESC', false, true, true, ($nb ? $nb : 10));
    //print_r($products);

    $res=validar_todo_esquema($_POST['xml']);
    //no es valido
    if($res[0]=="1" || $res[1]=="1" || $res[2]=="1")  
    {
        $re['error']=1;
    }else{
        //el esquema es valido
        //se busca el repartidor
        //1) numero de conexiones en la primera fila
        $num_conexion=num_conexion_1_fila($_SESSION['con_u'], $_SESSION['con_r'], $_SESSION['con_d'], $_SESSION['con_l'],$_SESSION['grid']);
        //se busca el calibre maximo del interruptor
        $calibreMax = validar_interruptores($_SESSION['interruptor'], $_SESSION['grid'],1);
        //***********************busco en la bd los repartidores****************************
        //categoria del repartidor
        $idcategory=33;
        $category = new Category($idcategory, (int)Context::getContext()->language->id);
        $nb = 10000;
        $products = $category->getProducts((int)Context::getContext()->language->id, 1, ($nb ? $nb : 10), 'date_upd', 'DESC', false, true, true, ($nb ? $nb : 10));
        //print_r($products);
        $repartidor = [];
        foreach ($products as $key => $prod) {
           $id_product = $prod['id_product'];
           $name = $prod['name'];
           $features = $prod['features'];
           foreach ($features as $key2 => $feat) {
                if($feat['id_feature']==17)
                    $barra = $feat['value'];
                if($feat['id_feature']==18)
                    $calibre = $feat['value'];
                if($feat['id_feature']==19)
                    $conexion = $feat['value'];
                if($feat['id_feature']==20)
                    $modulos = $feat['value'];


           }
           $repartidor[]=array('id' => $id_product, 'nombre' => $name, 'calibre' => $calibre, 'conexion' => $conexion*$barra, 'modulos' => $modulos );

        }
        //ordeno el array primero por calibre y luego por conexion
           array_multisort(array_column($repartidor, 'calibre'),  SORT_ASC,
                    array_column($repartidor, 'conexion'), SORT_ASC,
                    $repartidor);
           
        //busco el repartidor que cumpla las validaciones   
        $has=0;
        foreach ($repartidor as $key => $rep) {
            if( ($rep['calibre']>=$calibreMax) && ($rep['conexion']>=$num_conexion) && $has==0)
            {
                $has=1;
                $re['mensaje'] = "\n*******Calibre******\nTenemos Calibre: ".$calibreMax." \nConexiones Totales: ".$num_conexion." \nSe usara el repartidor: ".$rep['nombre'];

                //ADD TO CART
                $re['repartidor'] = $rep['id'];
                if($_SESSION['addToCart']==1)
                    addToCart($rep['id']);
            }
        }
        //fin de validar repartidor
        //se valida Espacio necesario para el bornero.
        //echo "\n bornero list";
        $borneosList=$_SESSION['bornero'];
        $re['prensaestopa'] = 0;
        //echo "yyyyyy";
        if(sizeof($borneosList)>0)
        {

        $re['espacioBornero'] = espacio_bornero($borneosList);
        $_SESSION['espacioBornero']=$re['espacioBornero'];
        //busco las prensaestopas por si las van a usar
        if($_POST['presa']==1)
        prensaestopas($borneosList);
        
        $re['mensaje'].="\n******Espacio Bornero********\n Espacio:".$re['espacioBornero'];
        $re['prensaestopa'] = 1;
        }


        //busco el tamano del Aparellaje
        $re['mensaje'].=tamanoAparellaje();

        



        $re['error']=0;
       // echo "num: $num_conexion / calibreMax: $calibreMax";

    }

    echo json_encode($re);
     
}

function tamanoAparellaje()
{
/*
- cada modulo mide 18mm de ancho
1) sacamos el ancho de todas las piezas que estan agregadas, con las prensaestopas, interruptores borneros y repartidor nos da un total
2) nModulos = total / 18 --> esto nos da el numero de modulos
3) con este dato buscanmos en los armarios(categoria modulo de prestashop) el que cumpla ese numero de modulos y con el espacio del bornero que se calculo antes 
4) agregamos al carrito el armario seleccionado
*/
    $productos = $_SESSION['piezas'];
    //AGREGO TODO LOS PRODUCTOS DE ESQUEMA AL CARRITO DE COMPRAS, ANTERIORMENTE YA SE AGREGO EL REPARTIDOR Y LAS PRENSAESTOPAS
    if($_SESSION['addToCart']==1){
        foreach ($productos as $key => $idp) {
            addToCart($idp);
        }
    }

    $anchoMensaje="\n\n********Ancho de las Piezas:********";
    //$productCart=getCart();
    
    $cart = new Cart(Context::getContext()->cookie->id_cart);
    $productCart = $cart->getProducts(true);


    foreach ($productCart as $key => $pro) {
        $product = new Product($pro['id_product']);
        $quatity=$pro['cart_quantity'];

        //print_r($product);
        $anchoMensaje.="\n".$product->name[1]."(".$quatity."): ".$product->width;
        $anchoTotal+=$product->width*$quatity;
    }
    //Ya tenemos el total
    $anchoMensaje.="\nTotal:".$anchoTotal;
    //se saca el numero de modulos
    $nModulos = ceil($anchoTotal / 18);
    $anchoMensaje.="\n# de Modulos:".$nModulos;
    //busco el armario para este ancho y que tenga espacio para el bornero
    $idcategory=37;
    $category = new Category($idcategory, (int)Context::getContext()->language->id);
    $nb = 10000;
    $products = $category->getProducts((int)Context::getContext()->language->id, 1, ($nb ? $nb : 10), 'date_upd', 'DESC', false, true, true, ($nb ? $nb : 10));


    foreach ($products as $key => $prod) {
       $id_product = $prod['id_product'];
       $name = $prod['name'];
       $features = $prod['features'];
       foreach ($features as $key2 => $feat) {
            if($feat['id_feature']==28)
                $ancho = $feat['value'];
            if($feat['id_feature']==29)
                $modulos = $feat['value'];
            if($feat['id_feature']==30)
                $filas = $feat['value'];


       }
       $armarios[]=array('id' => $id_product, 'nombre' => $name, 'anchoBornero' => $ancho, 'modulos' => $modulos, 'filas' => $filas );

    }

    //ordeno por el ancho
    array_multisort(array_column($armarios, 'modulos'),  SORT_ASC,
                    array_column($armarios, 'filas'), SORT_ASC,
                    $armarios);

    //busco el q soporte $nModulos y el tamano del bornero y le sacamos el ID y lo agregarmos al carrito
    $has=0;
    foreach ($armarios as $key => $arm) {
        if( ($arm['modulos']>=$nModulos) && ($arm['anchoBornero']>=$_SESSION['espacioBornero']) && ($has==0))
        {
            //ADD TO CART
           // echo "Armario --> ".$arm['id'];
            if($_SESSION['addToCart']==1)
                    addToCart($arm['id']);
            $anchoMensaje.="\n*********Armario***********\nNombre:".$arm['nombre'];
            $has=1;
        }
    }


    return $anchoMensaje;
    //echo "Ancho Total --> $anchoTotal";
}

function prensaestopas($borneosList)
{
/*
luego al validar si tiene bornero se pregunta "Quiere PRENSAESTOPAS?"
SI --> con tipo, tension y numero de conductores de cada bornero sabemos que manguera es y sacamos el "DIAMETRO EXT" , supongamos que es 23mm, tenemos que buscar una prensaestopa que diamentromin<=23mm y diamentromax>=23mm
---> Se agrea al carrito
*/
        //busco todas las mangueras
        //36 --> magueras
        $idcategory=39;
        $category = new Category($idcategory, (int)Context::getContext()->language->id);
        $nb = 10000;
        $products = $category->getProducts((int)Context::getContext()->language->id, 1, ($nb ? $nb : 10), 'date_upd', 'DESC', false, true, true, ($nb ? $nb : 10));


        foreach ($products as $key => $prod) {
           $id_product = $prod['id_product'];
           $name = $prod['name'];
           $features = $prod['features'];
           foreach ($features as $key2 => $feat) {
                if($feat['id_feature']==24)
                    $conductores = $feat['value'];
                if($feat['id_feature']==25)
                    $seccion = $feat['value'];
                if($feat['id_feature']==26)
                    $diametro = $feat['value'];
                if($feat['id_feature']==27)
                    $tipo = $feat['value'];


           }
           $mangueras[]=array('id' => $id_product, 'nombre' => $name, 'conductores' => $conductores, 'seccion' => $seccion, 'diametro' => $diametro, 'tipo'=>$tipo );

        }
        //print_r($manguera);
        //busco todas las prensaestopas
        //35 --> magueras
        $idcategory=35;
        $category = new Category($idcategory, (int)Context::getContext()->language->id);
        $nb = 10000;
        $products = $category->getProducts((int)Context::getContext()->language->id, 1, ($nb ? $nb : 10), 'date_upd', 'DESC', false, true, true, ($nb ? $nb : 10));


        foreach ($products as $key => $prod) {
           $id_product = $prod['id_product'];
           $name = $prod['name'];
           $features = $prod['features'];
           foreach ($features as $key2 => $feat) {
                if($feat['id_feature']==22)
                    $diam_min = $feat['value'];
                if($feat['id_feature']==23)
                    $diam_max = $feat['value'];
           }

           $prensaestopas[]=array('id' => $id_product, 'nombre' => $name, 'diam_min' => $diam_min, 'diam_max' => $diam_max );

        }

        //print_r($prensaestopas);


        //lista de bornero
        //busco en cada bornero la manguera que usa
       // echo "***********lista de bornero********\n";
        //print_r($borneosList);
        foreach ($borneosList as $key => $born) {
            //$born=$bor[2];
            $id_product=$born['id'];
            //echo "\n Bornero: $id_product";
            foreach ($mangueras as $key2 => $manguera) {

                /*
                echo "\n ".$manguera['conductores']."==".$born['conductores'].")
                    && (".$manguera['seccion']."==".$born['seccion'].") 
                    && (".$manguera['tipo']."==".$born['tipoCable']."))";
                    */
                    

                //si es tiene la seccion, tipo, conductores es esa la manguera
                if( ($manguera['conductores']==$born['conductores'])
                    && ($manguera['seccion']==$born['seccion']) 
                    && ($manguera['tipo']==$born['tipoCable']))
                {
                    
                    //es la manguera, se busca el diametro
                    $diametro = $manguera['diametro'];
                    //echo "\nLO ENCONTROOO $diametro";
                    $has=0;
                    //con el diametro veo que este en el rango del prensaestopa
                    foreach ($prensaestopas as $key3 => $prensa) {
                        if($has==0)
                        {
                            //echo "\n $diametro>=".$prensa['diam_min'];
                            //echo "\n $diametro<=".$prensa['diam_max'];
                            if($diametro>=$prensa['diam_min'] && $diametro<=$prensa['diam_max'])
                            {
                                //ADD TO CART
                                //agrego al carrito la prensaestopa para este bornero
                                if($_SESSION['addToCart']==1)
                                    addToCart($prensa['id']);

                                //echo "\n prensaestopa --> ".$prensa['id'];
                                $has=1;
                            }
                        }
                    }

                }

            }


            //$id_product=$bf['id'];

        }

//echo "\nAncho total: ".$anchoTotal." \n";
//return $anchoTotal;



}


function espacio_bornero($borneosList)
{
    //print_r($borneosList);
/*
- Cada bornero se compone de:
1. Soporte final. --> sacamos el ancho --> ejemplo ancho 5,15 mm
2. Tantas bornas como se definan "BD" (lo tenemos en las caracteristicas del bornero). vemos la seccion de cable que seleccionaron(modal) y sacamos el ancho multiplicado por el numero de bornas --> ancho x BD
3. Tapa borna. --> sacamos el ancho --> ejemplo ancho 5,15 mm
4. Soporte final. --> sacamos el ancho --> ejemplo ancho 5,15 mm

con esto sumamos los 4 valores --> ejemplo 
1) 5,15 
2) 12,2*4 --> 4 es porque este bornero de ejemplo tiene 4 bornas que viene de la caracteristica del producto
3) 2,2
4) 5,15
= 61,3 mm

Esto se hace para cada bornero y se redondea para arriba a la unidad, ejemplo 12,2x4≈ 49 mm

Se saca el total de todos los borneros sumando este valor  Dando como resultado un
valor de ancho mínimo requerido para el armario de 312 mm, este será el primer requisito a
cumplir.

Si no tiene BORNAS este calculo no se hace!!
*/

        //estos datos estan en el modulo de bornas del prestashop
        $u= Db::getInstance()->executeS('
        SELECT texto, texto2, texto3
        FROM `' . _DB_PREFIX_ . 'borneros`');
        $dat=$u[0];
        $u = unserialize($dat['texto']);
        $u2 = unserialize($dat['texto2']);
        $u3 = unserialize($dat['texto3']);

        //se crea un array con las bornas(seccion y ancho)
        $cantOpcion = $u2['cantOpcion'];
        for($x=1; $x<=$cantOpcion; $x++)
        {
            $bornaSeccion[$x-1]=$u2['seccion_'.$x];
            $bornaAncho[$x-1]=$u2['xancho_'.$x];
        }

        //genero los calculos del ancho total
        //sumo los 2 soporte finales
        $anchoTotal = 2*$u['ancho1']; //son dos soportes finales
        //echo "\nSoporte Final(2): ".$anchoTotal;
        //sumo el tapa bornas
        $anchoTotal += $u3['ancho3'];
        //echo "\n Tapa Bornas: ".$u3['ancho3'];
        //se saca el calculo para cada bornero
        foreach ($borneosList as $key => $bf) {
            //print_r($bor);
            //$bf=$bor[3];
            //seccion del bornero en el esquema
            $seccion=$bf['seccion'];
            //id del producto
            $id_product=$bf['id'];
            //busco la cantidad de bornas, esto se coloca en el prestashop en la caracteristica del bornero
           // echo "Producto --> $id_product ";
            //$product=new Product($idp);
            $atributos = Product::getFeatures_2($id_product, Context::getContext()->language->id);
            //print_r($atributos);
            foreach ($atributos as $at => $val) {
                //saco el # de bornas, esta en la caracteristica del bornero
                if($val['id_feature']==21)
                    $numBornas=$val['value'];
            }

            //busco la key segun la seccion
            $key = array_search ($seccion, $bornaSeccion);
            //se redondea para arriba a la unidad
            $anchoTotal += ceil($numBornas * $bornaAncho[$key]);
            //echo "\nBornas: NumBornas: $numBornas * Ancho:".$bornaAncho[$key]." = ".ceil($numBornas * $bornaAncho[$key]);
            //echo "\nAncho Totalx: ".$anchoTotal;
        }

//echo "\nAncho total: ".$anchoTotal." \n";
return $anchoTotal;



}
/*
//valida a la derecha
function validarConexionLados($con, $x, $y, $type, $idPieza)
{
    if( ($type=="right") && ($con[$xx][$yy]!=$con[$xx+1][$yy])
        return $idPieza."*R";
    if( ($type=="left") && ($con[$xx][$yy]!=$con[$xx-1][$yy])
        return $idPieza."*L";
    if( ($type=="down") && ($con[$xx][$yy]!=$con[$xx][$yy+1])
        return $idPieza."*D";
    if( ($type=="up") && ($con[$xx][$yy]!=$con[$xx][$yy-1])
        return $idPieza."*U";

    return '';    
}
*/

//VALIDA TODO EL ESQUEMA
/*
if($accion=="9")
{

    $circuito = $_POST['xml'];  
    //mensaje de error
    $mError="";
    //valido
    $valido=1;
    //array con los elementos del grid
    $grid = [];
    if($circuito)
    {
            foreach ($circuito as $key => $value) {
                if($value!="")
                {
                    $xml = new SimpleXMLElement($value);
                    $items_iterator = clone $xml;
                    $num=0;
                    //print_r($items_iterator);
                    foreach ($items_iterator->root->mxCell as $pieza) {
                        $parent_p=$pieza['parent'];
                        if(@$parent_p=="1")
                        {
                        //inicializar las coordenadas    
                        $x=$y=0;    
                        $geometry=$pieza->mxGeometry;    
                        //print_r($pieza);
                        $id_p=$pieza['id'];
                        $page_p=$pieza['page'];
                        $conexion_p=$pieza['conexiones'];
                        $width = $geometry['width'];
                        $height = $geometry['height'];
                        $xG = $geometry['x'];
                        $yG = $geometry['y'];
                        $value_p=$pieza['value'];
                        $c=explode('-', $id_p);
                        $numPage=0;
                        if($page_p>1)
                            $numPage=($page_p-1)*8;
                        //saco la X,Y de la pieza en el grid
                        if($xG>0)
                            $x=intval($xG/$width)+$numPage;
                        if($yG>0)
                            $y=intval($yG/$height)+$numPage;
                        
                        //veo si ya existe un elemento aqui
                        if($grid[$x][$y]=="")
                            $grid[$x][$y]=$x;
                        else
                        {
                            $valido=0;
                            $mError="Ya existe una pieza en este lugar";
                        }
                        //echo "**** pieza / page: $page_p / conexion: $conexion_p / width:$width / height:$height /x:$x /y:$y ";
                        }
                    }

                }
            }

    }


                            //print_r($grid);

    $res[0]=$valido;
    $res[1]=$mError;
    echo json_encode($res);
    
}
*/

function save_user_data($id_user, $circuito, $tipo_armado,$tension_nominal,$frecuencia,$int_corto,$norma_d,$esquema_d,$tension_m,$borneos,$entrada_c,$fox1,$fox2,$fox3,$fox4,$fox5,$fox6,$fox7,$fox8,$fox9,$fox10,$fox11,$fox12)
{

    $u= Db::getInstance()->executeS('
    SELECT *
    FROM e_user_data
    where id_user='.$id_user." and status=0");
    $x=@$u[0];
    $id=$x['id_user_data'];

    //borro en las dos tablas
    $u= Db::getInstance()->execute(" delete from e_user_data where id_user_data='$id'");
    $u= Db::getInstance()->execute(" delete from e_user_circuito where id_user_data='$id'");
    
    //$circuito=str_replace('<mxGraphModel>', '', $circuito);
    //$circuito=str_replace('</mxGraphModel>', '', $circuito);
//    $circuito = json_encode($circuito);

    Db::getInstance()->execute("
    insert into e_user_data( `id_user`, `tipo_armado`, `tension_nominal`, `frecuencia`, `int_corto`, `norma_d`, `esquema_d`, `tension_m`, `borneos`, `entrada_c`, `fox1`, `fox2`, `fox3`, `fox4`, `fox5`, `fox6`, `fox7`, `fox8`, `fox9`, `fox10`, `fox11`, `fox12`)values('$id_user', '$tipo_armado','$tension_nominal','$frecuencia','$int_corto','$norma_d','$esquema_d','$tension_m','$borneos','$entrada_c','$fox1','$fox2','$fox3','$fox4','$fox5','$fox6','$fox7','$fox8','$fox9','$fox10','$fox11','$fox12' )");

    //busco el que se inserto
    $u= Db::getInstance()->executeS('
    SELECT *
    FROM e_user_data
    where id_user='.$id_user." and status=0");

    $x=@$u[0];
    $id=$x['id_user_data'];
    if($circuito)
    {
            foreach ($circuito as $key => $value) {
                if($value!="")
                {
                    $ins="insert into e_user_circuito(id_user_data, circuito)values('$id', '$value')";
                    Db::getInstance()->execute($ins);

                    $ins="update e_user_data set has_circuito='1' where id_user_data='$id'";
                    Db::getInstance()->execute($ins);
                }
            }

    }

    echo '1';
}


function get_user_data($id_user)
{

    $u= Db::getInstance()->executeS('
    SELECT *
    FROM e_user_data
    where id_user='.$id_user." order by id_user_data desc");

    return @$u[0];
}


function get_user_data_id($id_user_data)
{

    $u= Db::getInstance()->executeS('
    SELECT *
    FROM e_user_data
    where id_user_data='.$id_user_data." ");

    return @$u[0];
}

//*************************************VALIDACIONES*******************************************/
//la Intensidad nominal (o calibre). debe ser menor o igual al que este por arriba de el
//$ret = 0 --> retorna errorArray(si hay error)
//$ret = 1 --> retorna el calibre maximo que seria el interruptor general
function validar_interruptores($interruptor, $grid, $ret=0)
{

    //print_r($interruptor);
    $currentPage=0;
    $calibreMax=0;
    //10 seria el numero maximo de paginas
    while ($currentPage <= 10) {
        //8 filas
        for($x=0; $x<8; $x++)
        {
        //se coloca esto para que busque en todas las paginas
        
        $xx=$x+(7*$currentPage);

         //7 columnas
         for($y=0; $y<7; $y++)   
         {
            //valido
            if($interruptor[$xx][$y])
            {
                //echo "xxxx--> [$xx][$y] : ".$interruptor[$xx][$y];
                //veo si es menor o igual a los que estan por arriba
                $idPieza=$grid[$xx][$y]['id'];
                foreach ($interruptor as $key => $value) {
                    $int=$value;
                    //saco la coordenada Y y el Calibre
                    foreach ($int as $corY => $calibre) {
                        if($calibreMax<$calibre)
                            $calibreMax=$calibre;

                       // echo "\n Y=$y / $corY --> ".$interruptor[$xx][$y].">".$calibre;
                        //veo si es menor o igual a los que estan por arriba
                        if( ($corY<=$y) && ($interruptor[$xx][$y]>$calibre))
                        {
                            $errorArray[] = $idPieza;
                            //$error = "Error, la intensidad(calibre) del interruptor no puede ser mayor a ".
                        }
                    }
                }
            }
            //echo "\n interruptor[$xx][$y] --> ".$interruptor[$xx][$y];
         }
        }
        $currentPage++;

    }
    if($ret==0)
        return $errorArray;
    if($ret==1)
        return $calibreMax;

}


//$con_u conexion de arriba
//$con_d conexion de abajo
//$con_l conexion de izquierda
//$con_r conexion de derecha
function validar_conexiones($con_u, $con_r, $con_d, $con_l,$grid)
{
    //print_r($grid);
    $currentPage=0;
    //10 seria el numero maximo de paginas
    while ($currentPage <= 10) {
        //8 filas
        for($x=0; $x<8; $x++)
        {
         //7 columnas
         for($y=0; $y<7; $y++)   
         {
            //se coloca esto para que busque en todas las paginas
            $xx=$x+(7*$currentPage);
            //$yy=$y*$currentPage;
            $yy=$y;
            $idPieza=$grid[$xx][$yy]['id'];
            //echo "aqui va --> ".$idPieza;
            //hay un elemento, valido el numero de conexiones
            if($idPieza!="")
            {
                //echo "\n encontro a [$xx][$yy]";
                //Arriba
                if( ($con_u[$xx][$yy]!="")&&($con_d[$xx][$yy-1]!="") && ($con_u[$xx][$yy]!=$con_d[$xx][$yy-1]))
                    $errorArray[] = $idPieza."*U";     
                //Derecha
                //echo "\n".$con_r[$xx][$yy]."!=".$con_l[$xx+1][$yy];
                if( ($con_r[$xx][$yy]!="")&&($con_l[$xx+1][$yy]!="") && ($con_r[$xx][$yy]!=$con_l[$xx+1][$yy]))
                    $errorArray[] = $idPieza."*R";
                //Abajo
                if( ($con_d[$xx][$yy]!="")&&($con_u[$xx][$yy+1]!="") && ($con_d[$xx][$yy]!=$con_u[$xx][$yy+1]))
                    $errorArray[] = $idPieza."*D";     
                //Izquierda
                if( ($con_l[$xx][$yy]!="")&&($con_r[$xx-1][$yy]!="") && ($con_l[$xx][$yy]!=$con_r[$xx-1][$yy]))
                    $errorArray[] = $idPieza."*L";     

            }
         }
        }
        $currentPage++;

    }
    //print_r($errorArray);
    return $errorArray;
}


function deleteCart()
{
   // get cart id if exists
   if (Context::getContext()->cookie->id_cart)
   {
     $cart = new Cart(Context::getContext()->cookie->id_cart);
     //si ya tiene un carro se elimina
     $cart->delete();
     Context::getContext()->cookie->id_cart = 0;

   }
}

function addToCart($id)
{
    

   if (Context::getContext()->cookie->id_cart)
   {
     //echo "se usa el  carrito";
     $cart = new Cart(Context::getContext()->cookie->id_cart);
   }

    // create new cart if needed
    if (!isset($cart) OR !$cart->id)
    {
        //echo "creo el carrito";
        $cart = new Cart(Context::getContext()->cookie->id_cart);
        $cart->id_customer = (int)(Context::getContext()->cookie->id_customer);
        $cart->id_address_delivery = (int) (Address::getFirstCustomerAddressId($cart->id_customer));
        $cart->id_address_invoice = $cart->id_address_delivery;
        $cart->id_lang = (int)(Context::getContext()->cookie->id_lang);
        $cart->id_currency = (int)(Context::getContext()->cookie->id_currency);
        $cart->id_carrier = 1;
        $cart->recyclable = 0;
        $cart->gift = 0;
        $cart->add();
        Context::getContext()->cookie->id_cart = (int)($cart->id);
    }
    $cart->update();
    //$cart = Context::getContext()->cart;
    $cart->updateQty(1,$id);

}
function getCart()
{
    $cart = new Cart(Context::getContext()->cookie->id_cart);
    $products = $cart->getProducts(true);
    //print_r($products);
    foreach ($products as $key => $value) {
        $productCart[]=$value['id_product'];
    }
    return $productCart;
}

//VALIDA LAS PIEZAS DENTRO DEL ESQUEMA, PARA QUE NO COLOQUEN 2 EN EL MISMO LUGAR
//valido que las piezas tenga el numero de conexiones
//valido los interruptores
function validar_todo_esquema($xml)
{
    //ancho y alto de las piezas para hacer el calculo
    $width=$height=0;
    //$circuito = $_POST['xml'];  
    $circuito = $xml;  
    //mensaje de error
    $mError="";
    //valida que este en la misma posicion de otra pieza
    $vMismaPosicion=0;
    //array con los elementos del grid
    $grid = [];
    //array de las conexiones
    $con_l=$con_r=$con_u=$con_d=[];
    //array con los id las piezas
    $piezas= [];
    if($circuito)
    {
            foreach ($circuito as $key => $value) {
                if($value!="")
                {
                    $xml = new SimpleXMLElement($value);
                    $items_iterator = clone $xml;
                    $num=0;
                    //print_r($items_iterator);
                    //CARGO EL GRID Y VALIDO QUE NO TENGA 2 PIEZAS EN EL MISMO LUGAR
                    foreach ($items_iterator->root->mxCell as $pieza) {
                        $parent_p=$pieza['parent'];
                        //if(@$parent_p=="1")
                        //{
                        //inicializar las coordenadas    
                        $x=$y=0;    
                        $geometry=$pieza->mxGeometry;    
                        //print_r($pieza);
                        $id_p=$pieza['id'];


                        $value_p=$pieza['value'];
                        //si es parent 1 es una pieza como tal, de los contrario son vertex dentro de la pieza, pasa con borneros e interruptores
                        if(@$parent_p=="1")
                        {
                        $cx=explode('-', $id_p);
                        $piezas[]=$cx[1];


                        $page_p=$pieza['page'];
                        $conexion_p=explode('*', $pieza['conexiones']);
                        $bornero = $pieza['bornero'];

                        $xG = $geometry['x'];
                        $yG = $geometry['y'];
                        
                        $c=explode('-', $id_p);
                        $numPage=0;
                        if($page_p>1)
                            $numPage=($page_p-1)*7;
   
                        //si no se ha sacado el ancho y alto de la pieza, se busca
                        //esto es para hacer el calculo de donde esta 
                        if($width==0)
                        {
                        $height = $geometry['height'];
                        $width = $geometry['width'];

                        //si es bornero la pieza es mas grande, se debe dividir entre 2 para que tome bien
                            if($bornero)
                            {
                                $height=$height/2;
                            }
                        }
                        if($xG=="")
                            $xG=0;
                        if($yG=="")
                            $yG=0;

                        //saco la X,Y de la pieza en el grid
                        $lastX=$x=intval($xG/$width)+$numPage;
                        $lastY=$y=intval($yG/$height);

                            //veo si ya existe un elemento aqui
                            if($grid[$x][$y]=="")
                            {
                                //$grid[$x][$y]=$x;
                            }else
                            {
                                $vMismaPosicion=1;
                                //$mError="\n Ya existe una pieza en este lugar [$x][$y] Page: $numPage / ID:".strval($id_p);
                                $mError="\n Ya existe una pieza en este lugar";
                            }
                            
                            //$grid[$x][$y]=$pieza;
                            $grid[$x][$y]=array(
                                'x' => $x , 
                                'y'=>$y, 
                                'id'=>strval($id_p)
                            );
                            

                            //cargo las conexiones
                            $con_u[$x][$y]=$conexion_p[0]; //arriba
                            $con_r[$x][$y]=$conexion_p[1]; //derecha
                            $con_d[$x][$y]=$conexion_p[2]; //abajo
                            $con_l[$x][$y]=$conexion_p[3]; //izquierda


                            //echo "**** pieza / page: $page_p / conexion: $conexion_p / width:$width / height:$height /x:$x /y:$y ";
                        }else{
                            //print_r($id_p);
                            //veo si viene de un interruptor
                            //echo "***************************";
                            $c=explode('-', $id_p);
                            if(@$c[1]!="")
                            {
                                
                                //es un interruptor, I2 es el que interesa ya que da Intensidad nominal (o calibre)
                                if( (@$c[0]=="i2") )
                                {
                                    //x, y vienen del que se cargo antes en el parent, que es la pieza como tal
                                    $calibre = explode(' ', $value_p);
                                    $interruptor[$lastX][$lastY]=$calibre[0];
                                    //echo "\n interruptor --> [$lastX][$lastY]=".$calibre[0];
                                }

                                //$calibre = explode(' ', $value_p);
                                //$borneroF[$lastX][$lastY]=$calibre[0];
                                //echo "\n bornero --> [$lastX][$lastY]=".$calibre[0];


                                //el b7 nos da todo divino!
                                //if( (@$c[0]=="b6") )
                                if( (@$c[0]=="b7") )
                                {
                                    //paso el id del producto para sacar el numero de bornas luego
                                    $id_bornero = $c[2];
                                    //echo "AQUI";
                                    //print_r($value_p);
                                    //x, y vienen del que se cargo antes en el parent, que es la pieza como tal
                                    $seccion = explode('**', $value_p);
                                    $bon = array('id' => $id_bornero,
                                        'tipoCable'=> $seccion[0],
                                        'tipoTornillo'=> $seccion[1],
                                        'conductores'=> $seccion[2],
                                        'letra'=> $seccion[3],
                                        'seccion'=> $seccion[4],
                                        'texto'=> $seccion[5],
                                        );
                                    $borneroF[$lastX][$lastY]=$bon;
                                    $borneroFull[]=$bon;

                                    //echo "\n bornero(seccion) --> [$lastX][$lastY]=".$seccion[0]."***";

                                }
                            }
                        }
                    }

                }
            }
    //valido que las piezas tenga el numero de conexiones
    $vConexiones = validar_conexiones($con_u, $con_r, $con_d, $con_l,$grid) ?  true : false;
    //valido los interruptores
    $vInterruptores = validar_interruptores($interruptor, $grid) ?  true : false;

    }
    //print_r($grid);
    $res[0]=$vMismaPosicion;
    //$res[1]=$mError;
    $res[1]=$vConexiones; 
    $res[2]=$vInterruptores;

    //coloco en la session los valores que necesito para otras operaciones
    $_SESSION['con_u']=$con_u;
    $_SESSION['con_r']=$con_r;
    $_SESSION['con_d']=$con_d;
    $_SESSION['con_l']=$con_l;
    $_SESSION['grid']=$grid;
    $_SESSION['interruptor']=$interruptor;
    $_SESSION['piezas']=$piezas;
    
    //print_r($borneroF);
    $_SESSION['bornero']=$borneroFull;


    return  $res;
}



//************FUNCIONES AL TERMINAR EL CIRCUITO******************//
//Numero de conexiones de la primera fila
function num_conexion_1_fila($con_u, $con_r, $con_d, $con_l,$grid)
{
    //print_r($grid);
    //print_r($grid);
    $currentPage=0;
    $num_conexion=0;
    //10 seria el numero maximo de paginas
    while ($currentPage <= 10) {
        
        
        for($x=0; $x<8; $x++)
        {
            //echo "x:$x **";
         //7 columnas
         //solo se busca en la fila 1 de cada pagina
         for($y=0; $y<1; $y++)   
         {
            //se coloca esto para que busque en todas las paginas
            $xx=$x+(7*$currentPage);
            //$yy=$y*$currentPage;
            $yy=$y;
            $idPieza=$grid[$xx][$yy]['id'];
            //echo "\n aqui va --> ".$idPieza;
            //hay un elemento, valido el numero de conexiones
            if($idPieza!="")
            {
                //echo "**\n entro con $xx - $yy -->".$con_d[$xx][$yy];
                //busco la fila 1 las conexiones que van para abajo
                //Abajo
                $num_conexion+=$con_d[$xx][$yy];
            }
            
         }
        }
        $currentPage++;

    }
    
    return $num_conexion;
}
