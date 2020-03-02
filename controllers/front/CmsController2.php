<?php
/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
class CmsControllerCore extends FrontController
{
    public $php_self = 'cms';
    public $assignCase;
    public $cms;
    public $productos_disponibles; // productos que pasan la validacion de "especificaciones de armado" del user
    /** @var CMSCategory */
    public $cms_category;
    public $ssl = false;

    public function canonicalRedirection($canonicalURL = '')
    {
        if (Validate::isLoadedObject($this->cms) && ($canonicalURL = $this->context->link->getCMSLink($this->cms, $this->cms->link_rewrite, $this->ssl))) {
            parent::canonicalRedirection($canonicalURL);
        } elseif (Validate::isLoadedObject($this->cms_category) && ($canonicalURL = $this->context->link->getCMSCategoryLink($this->cms_category))) {
            parent::canonicalRedirection($canonicalURL);
        }
    }

    /**
     * Initialize cms controller.
     *
     * @see FrontController::init()
     */
    public function init()
    {
        if ($id_cms = (int) Tools::getValue('id_cms')) {
            $this->cms = new CMS($id_cms, $this->context->language->id, $this->context->shop->id);
        } elseif ($id_cms_category = (int) Tools::getValue('id_cms_category')) {
            $this->cms_category = new CMSCategory($id_cms_category, $this->context->language->id, $this->context->shop->id);
        }

        if (Configuration::get('PS_SSL_ENABLED') && Tools::getValue('content_only') && $id_cms && Validate::isLoadedObject($this->cms)
            && in_array($id_cms, $this->getSSLCMSPageIds())) {
            $this->ssl = true;
        }

        parent::init();

        $this->canonicalRedirection();

        // assignCase (1 = CMS page, 2 = CMS category)
        if (Validate::isLoadedObject($this->cms)) {
            $adtoken = Tools::getAdminToken('AdminCmsContent'.(int) Tab::getIdFromClassName('AdminCmsContent').(int) Tools::getValue('id_employee'));
            if (!$this->cms->isAssociatedToShop() || !$this->cms->active && Tools::getValue('adtoken') != $adtoken) {
                $this->redirect_after = '404';
                $this->redirect();
            } else {
                $this->assignCase = 1;
            }
        } elseif (Validate::isLoadedObject($this->cms_category) && $this->cms_category->active) {
            $this->assignCase = 2;
        } else {
            $this->redirect_after = '404';
            $this->redirect();
        }
    }

    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */ 
    public function initContent()
    {
        if ($this->assignCase == 1) {
            $cmsVar = $this->objectPresenter->present($this->cms);

            $filteredCmsContent = Hook::exec(
                'filterCmsContent',
                array('object' => $cmsVar),
                $id_module = null,
                $array_return = false,
                $check_exceptions = true,
                $use_push = false,
                $id_shop = null,
                $chain = true
            );
            if (!empty($filteredCmsContent['object'])) {
                $cmsVar = $filteredCmsContent['object'];
            }


            //CANPALTE
            $cmsVar['show_electro']=0;
            if($this->cms->id==6)
            $cmsVar['show_electro']=1;

            

            $this->context->smarty->assign(array(
                'cms' => $cmsVar,
            ));

            if ($this->cms->indexation == 0) {
                $this->context->smarty->assign('nobots', true);
            }
            
            
            if($this->cms->id==6)
            {
                //llamo a la function de electro
                $this->electro();
            }else{
                $this->setTemplate(
                'cms/page',
                array('entity' => 'cms', 'id' => $this->cms->id)
                );
            }
        } elseif ($this->assignCase == 2) {
            $cmsCategoryVar = $this->getTemplateVarCategoryCms();

            $filteredCmsCategoryContent = Hook::exec(
                'filterCmsCategoryContent',
                array('object' => $cmsCategoryVar),
                $id_module = null,
                $array_return = false,
                $check_exceptions = true,
                $use_push = false,
                $id_shop = null,
                $chain = true
            );
            if (!empty($filteredCmsCategoryContent['object'])) {
                $cmsCategoryVar = $filteredCmsCategoryContent['object'];
            }

            $this->context->smarty->assign($cmsCategoryVar);
            $this->setTemplate('cms/category');
        }
        parent::initContent();
    }

    /**
     * Return an array of IDs of CMS pages, which shouldn't be forwared to their canonical URLs in SSL environment.
     * Required for pages which are shown in iframes.
     */
    protected function getSSLCMSPageIds()
    {
        return array((int) Configuration::get('PS_CONDITIONS_CMS_ID'), (int) Configuration::get('LEGAL_CMS_ID_REVOCATION'));
    }

    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();

        if ($this->assignCase == 2) {
            $cmsCategory = new CMSCategory($this->cms_category->id_cms_category);
        } else {
            $cmsCategory = new CMSCategory($this->cms->id_cms_category);
        }

        if ($cmsCategory->id_parent != 0) {
            foreach (array_reverse($cmsCategory->getParentsCategories()) as $category) {
                $cmsSubCategory = new CMSCategory($category['id_cms_category']);
                $breadcrumb['links'][] = array(
                    'title' => $cmsSubCategory->getName(),
                    'url' => $this->context->link->getCMSCategoryLink($cmsSubCategory),
                );
            }
        }

        if ($this->assignCase == 1) {
            $breadcrumb['links'][] = array(
                'title' => $this->context->controller->cms->meta_title,
                'url' => $this->context->link->getCMSLink($this->context->controller->cms),
            );
        }

        return $breadcrumb;
    }

    public function getTemplateVarPage()
    {
        $page = parent::getTemplateVarPage();

        if ($this->assignCase == 2) {
            $page['body_classes']['cms-id-'.$this->cms_category->id] = true;
        } else {
            $page['body_classes']['cms-id-'.$this->cms->id] = true;
            if (!$this->cms->indexation) {
                $page['meta']['robots'] = 'noindex';
            }
        }

        return $page;
    }

    public function getTemplateVarCategoryCms()
    {
        $categoryCms = array();

        $categoryCms['cms_category'] = $this->objectPresenter->present($this->cms_category);
        $categoryCms['sub_categories'] = array();
        $categoryCms['cms_pages'] = array();

        foreach ($this->cms_category->getSubCategories($this->context->language->id) as $subCategory) {
            $categoryCms['sub_categories'][$subCategory['id_cms_category']] = $subCategory;
            $categoryCms['sub_categories'][$subCategory['id_cms_category']]['link'] = $this->context->link->getCMSCategoryLink($subCategory['id_cms_category'], $subCategory['link_rewrite']);
        }

        foreach (CMS::getCMSPages($this->context->language->id, (int) $this->cms_category->id, true, (int) $this->context->shop->id) as $cmsPages) {
            $categoryCms['cms_pages'][$cmsPages['id_cms']] = $cmsPages;
            $categoryCms['cms_pages'][$cmsPages['id_cms']]['link'] = $this->context->link->getCMSLink($cmsPages['id_cms'], $cmsPages['link_rewrite']);
        }

        return $categoryCms;
    }

    //funcion principal del circuito, esta genera todo
    public function electro()
    {
            global $cookie; 
            $id_user=55;
            //saco la data del usuario
            $user_data = $this->get_user_data($id_user);
            
            $show_modal_inicio=1;
            if($user_data['id_user_data']!="")
                $show_modal_inicio=0;

            $pages_js="";
            $circuito_inicial_data=$data_borneos="";


            //$export_var=@$cookie->export_var;
            if($user_data['has_circuito']=="1")
            {
                 $circuito_inicial=1;
            }   
            else
                $circuito_inicial=0;

            $electro_tpl=_THEME_DIR_;
            $electro_tpl.='templates/electro/';
            
            //echo preg_replace( "/\r|\n/", "", $export_var);

            //saco la data
            $xml1=file_get_contents(_PS_THEME_DIR_.'templates/electro/xml/xml1.xml');
            $xml2=file_get_contents(_PS_THEME_DIR_.'templates/electro/xml/xml2.xml');
            $xml3=file_get_contents(_PS_THEME_DIR_.'templates/electro/xml/xml3.xml');
            $footer_form=$this->generate_footer_form($user_data);
            $footer_form_vars=$this->generate_footer_form_vars($user_data);
            $modal_guardar_armado=$this->modal_guardar_armado();
            //$propiedades=file_get_contents(_PS_THEME_DIR_.'templates/electro/xml/propiedades.php');
            
            //inicializo los productos disponibles
            unset($this->productos_disponibles);
            $this->productos_disponibles[]=0;
            //saco las categorias y productos que mostrara el tablero 
            $ff=$this->get_cat_prod_home($user_data);

           //genero las variables de la especificacion del armado
           $armado= $this->generar_armado('',$user_data);
           //listado de esquemas del usuario
           $listado_esquemas=$this->listado_esquemas($id_user);



            if($circuito_inicial==1)
            {
                 if( (@$_POST['carga_id']!="0") && (@$_POST['carga_id']!="") )
                 {
                    //viene por cargar  mis esquemas y abajo se valida
                    $idd=@$_POST['carga_id'];
                 }else{
                 //saco la data que tiene actualmente en el circuito
                 //$circuito_inicial_data=$user_data['circuito'];
                 //genero la nueva con las validaciones
                 //$data_circuito=$this->make_circuito($circuito_inicial_data);
                    $idd=$user_data['id_user_data']; 
                 }
                
                $data_circuito=$this->validar_circuito($idd);
                 $pages=$data_circuito[0];   
                 $circuito_inicial_data = $pages[0]; // se toma el 0 porque es la primera pagina
                 //lo coloco en el xml 
                 $dir = str_replace('index.php', '',  $_SERVER['SCRIPT_FILENAME']);
                 $fichero = $dir."xml/data.xml";
                 file_put_contents($fichero, $circuito_inicial_data);

                 //echo $circuito_inicial_data;
                 $pages_js=$data_circuito[1];             
            }else{
                //veo si viene de mis esquemas
                if( (@$_POST['carga_id']!="0") && (@$_POST['carga_id']!="") )
                {
                    //viene por cargar  mis esquemas y abajo se valida
                    $idd=@$_POST['carga_id'];
                    $data_circuito=$this->validar_circuito($idd);
                    $pages=$data_circuito[0];   
                    $circuito_inicial_data = $pages[0]; // se toma el 0 porque es la primera pagina
                    //lo coloco en el xml 
                    $dir = str_replace('index.php', '',  $_SERVER['SCRIPT_FILENAME']);
                    $fichero = $dir."xml/data.xml";
                    file_put_contents($fichero, $circuito_inicial_data);
                    //echo $circuito_inicial_data;
                    $pages_js=$data_circuito[1]; 
                    //coloco que no salga el modal y que muestre el inicio del circuito
                    $show_modal_inicio=0;            
                    $circuito_inicial=1;
                }

            }   

            $this->context->smarty->assign(array(
                'electro_tpl' => $electro_tpl,
                'f_cat' => $ff['f_cat'],
                'f_product' => $ff['f_product'],
                'armado' => preg_replace( "/\r|\n/", "", $armado ),
                'xml1' => preg_replace( "/\r|\n/", "", $xml1 ),
                'xml2' => preg_replace( "/\r|\n/", "", $xml2 ),
                'xml3' => preg_replace( "/\r|\n/", "", $xml3 ),
                'footer_form' => preg_replace( "/\r|\n/", "", $footer_form ),
                'footer_form_vars' => preg_replace( "/\r|\n/", "", $footer_form_vars ),
                'inicio_armado' => preg_replace( "/\r|\n/", "", $this->inicio_armado($user_data)),
                'propiedades' => preg_replace( "/\r|\n/", "", $ff['f_propiedades'] ),
                'circuito_inicial' => $circuito_inicial,
                'circuito_inicial_data' => preg_replace( "/\r|\n/", "", $circuito_inicial_data ),
                'data_borneos' => preg_replace( "/\r|\n/", "", $data_borneos ),
                'modal_guardar_armado' => preg_replace( "/\r|\n/", "", $modal_guardar_armado ),
                'listado_esquemas' => preg_replace( "/\r|\n/", "", $listado_esquemas ),
                'user_data' => $user_data,
                'page_list' => preg_replace( "/\r|\n/", "", $pages_js ),
                'show_modal_inicio' => $show_modal_inicio,
            ));

                $this->setTemplate(
                'electro/index',
                array('entity' => 'cms', 'id' => $this->cms->id)
                );

    }


    function make_whete_attribute($user_data)
    {
            //si seleccionaron atributos solo se muestran los que cumplen
            $and='';
            $where_attribute = "";
            if($user_data['tipo_armado']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['tipo_armado'];
                $and = ' or ';
            }

            if($user_data['tension_nominal']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['tension_nominal'];
                $and = ' or ';
            }

            if($user_data['frecuencia']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['frecuencia'];
                $and = ' or ';
            }

            if($user_data['int_corto']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['int_corto'];
                $and = ' or ';
            }

            if($user_data['norma_d']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['norma_d'];
                $and = ' or ';
            }

            if($user_data['esquema_d']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['esquema_d'];
                $and = ' or ';
            }

            if($user_data['tension_m']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['tension_m'];
                $and = ' or ';
            }

            if($user_data['borneos']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['borneos'];
                $and = ' or ';
            }

            if($user_data['entrada_c']!="")
            {
                $where_attribute.=" $and pc.id_attribute=".$user_data['entrada_c'];
                $and = ' or ';
            }

            $where_attribute = " and ($where_attribute) ";
            return $where_attribute;
    }

    //saco las categorias y productos que mostrara el tablero
    function get_cat_prod_home($user_data)
    {
            $where_attribute="";
            if(sizeof($user_data)>0)
            $where_attribute=$this->make_whete_attribute($user_data);

            $electro_tpl=_THEME_DIR_;
            $electro_tpl.='templates/electro/';
            //listado de las categorias
            $f_cat=""; 
            //listado de productos
            $f_product=""; 
            //propiedades de las piezas
            $propiedades="";
            $categories=Category::getCategories_home( (int)$this->context->language->id, true, true, '');            
            $cat=$categories[2];
            //print_r($cat);
            foreach ($cat as $key => $value) {
                $x=$value['infos'];
                //print_r($x);
                $id_cat=$x['id_category'];
                $nombre=$x['name'];
                //busco los productos en la categoria
                //echo "xxxx --> $id_cat / $nombre";
                $product_list = Product::get_productos_disponibles((int)$this->context->language->id, 0,0, 'id_product', 'ASC', $id_cat, true, null, $where_attribute);

                //borro el array
                
                //print_r($product_list);
                if(count($product_list))
                {
                    //echo "la categoria:".$nombre;
                    //listado de las categorias para el front
                    $f_cat.='
                    <dt class="">
                      <a class="btn btn-accordion" data-key="socialposts" data-type="">
                        <i class="fa fa-ellipsis-v main"></i>
                        
                        <i class="collapse fa fa-chevron-up hidden"></i>
                        <i class="back fa fa-chevron-left hidden"></i>
                        <span class="name">'.$nombre.'</span>
                      </a>
                    </dt>
                    ';
                    //print_r($product_list);
                    $pidx=0;
                    foreach ($product_list as $key2 => $value2) 
                    {
                        //veo si ya esta repetido
                        if($pidx!=$value2['id_product'])
                        {
                            $f_cat.='<dd class="img_contenedor" id="I-'.$value2['id_product'].'"></dd>';
                            array_push($this->productos_disponibles,$value2['id_product']);
                        }


                        $pidx=$value2['id_product'];
                    }

                    $pidx=0;
                    foreach ($product_list as $key2 => $value2) {
                        //veo si ya esta repetido
                        if($pidx!=$value2['id_product'])
                        {
                            $id_product=$value2['id_product'];
                            $nombre_product=$value2['name'];
                            //saco la imagen
                            $image = Image::getCover($id_product);
                            //print_r($image);
                            $product = new Product($id_product, false, (int)$this->context->language->id);
                            //$atributos = Product::getAttributesInformationsByProduct($id_product);
                            //echo "xxxxxxx $id_product ***********";
                            $atributos = Product::getFeatures_2($id_product, (int)$this->context->language->id);
                            $propiedades.= $this->generar_propiedades($id_product, $nombre_product, $atributos);
                            $grande=1;
                            $borneros=0; //--> es borneos
                            //print_r($atributos);
                            foreach ($atributos as $at => $val) {
                                //es una pieza grande, va en la ultima linea
                                if($val['id_feature_value']==59)
                                    $grande=2;
                                //es borneros
                                if($val['id_feature_value']==61)
                                    $borneros=1;
                            }
                            $link = new Link;//because getImageLInk is not static function
                            $imagePath = $link->getImageLink($product->link_rewrite, $image['id_image'], '');
                            //es una pieza grande, va en la ultima linea
                            if($grande==2)
                            $imagePath = $link->getImageLink($product->link_rewrite, $image['id_image'], '');
                            //vemos si la imagen ya tiene para rotar, si no tiene se generan
                            $this->check_image_exist($imagePath, $electro_tpl);
                            
                            
                           // echo "producto---> ".$id_product." / ".$nombre_product;
                            //addSidebarIcon(graph, sidebar, label, image, id=null, num, tam_type=1, pieza_name='test')
                            $f_product.="addSidebarIcon(graph, sidebar,
                        '<img src=\"http://".$imagePath."\" width=\"100%\">',
                        'http://".$imagePath."', '".$value2['id_product']."', ".$value2['id_product'].",".$grande.",'".$nombre_product."','".$borneros."' ) ;";
                        }
                        $pidx=$value2['id_product'];
                        
                    }
                    
                }
            }
            $ret['f_product']=$f_product;
            $ret['f_cat']=$f_cat;
            $ret['f_propiedades']=$propiedades;

            //print_r($ret);
            return $ret;

        }


        function generar_propiedades($id_product, $nombre, $atributos)
        {

            $prop='<div id="propiedades">
              <table width="100%"  >
                <tr> 
                  <td width="2%">&nbsp;</td>
                  <td width="7%" style="font-size:2em;" width="5%"><i class="  fa fa-ellipsis-v main"  style="color: #FFFFFF" ></i></td>
                  <td width="7%"  style="font-size:2em; color: #FFFFFF"><a><i onclick="copiar();" class=" fa fa-copy"></i></a></td>
                  <td width="7%" style="font-size:2em; color: #FFFFFF"><a><i onclick="borrar();" class="fa fa-trash"></i></a></td>
                  <td width="7%" style="font-size:2em; color: #FFFFFF"><a><i onclick="zoom2();" class="fa fa-search-plus"></i></a></td>
                  <td width="40%">&nbsp;</td>
                  <td width="7%" style="font-size:2em; color: #FFFFFF"><a><i onclick="horizontal();" class="fa fa-chevron-right"></i></a></td>
                  <td width="7%" style="font-size:2em; color: #FFFFFF"><a><i onclick="vertical();" class="fa fa-chevron-up"></i></a></td>
                  <!--<td width="7%" style="font-size:2em; color: #FFFFFF"><i class="fa fa-retweet"></i></td>-->
                  <!--<td width="7%" style="font-size:2em; color: #FFFFFF"><i class="fa fa-lock"></i></td>-->
                  <td width="2%">&nbsp;</td>
                </tr>
              </table>
            </div>  
            <br>
            <table width="100%" class="caracteristicas">
               <tr>
                <td ><input class="input_redo" name="xxxx" placeholder="'.$nombre.'" readonly="true" ></td>
              </tr>';

             // print_r($atributos);
              foreach ($atributos as $at => $val) {
                    
                    //todos menos el de tamano de la pieza
                    if($val['id_feature']!=12)
                    {
                        $att=$val['name'].": ".$val['value'];
                         $prop.='<tr>
                                <td ><input class="input_redo" name="xxxx" placeholder="'.$att.'" readonly="true" ></td>
                              </tr>';

                    }
                      
                }

              
                    

              
            $prop.='</table>
            <hr class="style-one"></hr>';

            $prop= preg_replace( "/\r|\n/", "", $prop );
            $propiedades='modal_cotent['.$id_product.']=\''.$prop.'\'; ';
            return $propiedades;


        }

        # Flipping an image in PHP
        //1) BORRA TODOS LOS ARCHIVOS DE /opt/lampp/htdocs/ELECTRICAL/piezas/vert/
        //2) EJECUTAR ESTE SCRIPT DOS VECES, EN LA PRIMERA GENERA X1 y X2, EN LA SEGUNDA X1_X1, X1_X2                                                                                                                                       
        function flipImage($image, $vertical, $horizontal) {
            $w = imagesx($image);
            $h = imagesy($image);
            if (!$vertical && !$horizontal) return $image;
            $flipped = imagecreatetruecolor($w, $h);
            if ($vertical) {
              for ($y=0; $y<$h; $y++) {
                imagecopy($flipped, $image, 0, $y, 0, $h - $y - 1, $w, 1);
              }
            }
            if ($horizontal) {
              if ($vertical) {
                $image = $flipped;
                $flipped = imagecreatetruecolor($w, $h);
              }
              for ($x=0; $x<$w; $x++) {
                imagecopy($flipped, $image, $x, 0, $w - $x - 1, 0, 1, $h);
              }
            }
            //imagepng('/opt/lampp/htdocs/ELECTRICAL/piezas/piez77.png', $flipped, 100);
            return $flipped;
        }

        function check_image_exist($url, $electro_tpl)
        {

            /*
            $x='/opt/lampp/htdocs/electro/themes/theme1498/templates/electro/piezas/175-listado.jpg';
            $picture=imagecreatefromjpeg($x);
            $picture=flipImage($picture,1,0);
            */

            $url="http://".$url;
            $ff = pathinfo($url);

            $folder=_PS_THEME_DIR_.'templates/electro/piezas/';
            $folder_vert=_PS_THEME_DIR_.'templates/electro/piezas/vert/';
            $file= $folder.$ff['basename'];
            if (!(file_exists($file))) {
                //copio el normal en /piezas
                $ch = curl_init($url);
                $fp = fopen($file, 'w');
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
                fclose($fp);


                //genero las imagenes
                $archivo=$ff['filename'];
                $ext=$ff['extension'];
                if($ext=='jpg')
                {
                    $resultado1 = strpos($archivo, '_x1');
                    $resultado2 = strpos($archivo, '_x2');
     
                    if( ($resultado1 === FALSE) && ($resultado2 === FALSE))
                    {
                    $picture=imagecreatefrompng($file);
                    $picture=$this->flipImage($picture,1,0);
                    imagepng($picture, $folder.$archivo.'_x1.'.$ext);

                    $picture=imagecreatefrompng($file);
                    $picture=$this->flipImage($picture,0,1);
                    imagepng($picture, $folder.$archivo.'_x2.'.$ext);
                    }

                }

                //busco todos en la carpeta para crear las de vert
                if ($handle = opendir($folder)) {
                    while (false !== ($file = readdir($handle))) {

                        if ($file != "." && $file != "..") {

                            $file=$folder.$file;
                            $path_parts = pathinfo($file);
                            $archivo=$path_parts['filename'];
                            @$ext=$path_parts['extension'];
                            if($ext=='jpg')
                            {
                                $picture=imagecreatefrompng($file);
                                $picture=$this->flipImage($picture,0,0);
                                imagepng($picture, $folder_vert.$archivo.'.'.$ext);


                                $picture=imagecreatefrompng($file);
                                $picture=$this->flipImage($picture,1,0);
                                imagepng($picture, $folder_vert.$archivo.'_x1.'.$ext);

                                $picture=imagecreatefrompng($file);
                                $picture=$this->flipImage($picture,0,1);
                                imagepng($picture, $folder_vert.$archivo.'_x2.'.$ext);

                                //header("Content-type: image/png");
                            }

                            
                        }
                    }

                    closedir($handle);
                }


            }

        }

        function is_selected($var1, $var2)
        {
            if($var1==$var2)
             return 'selected';
            else
             return '';

        }

        //$tipo --> 1 es el del modal
        function generar_armado($tipo=null, $user_data=null){
            //aqui va el +1

            if($tipo==1)
                $tipo="_t";
            
            //tipo de armado
            $armado='<span class="header-links2"> Tipo de armario</span>
                        <div class="input-cont" >
                        <select name="tipo_armado'.$tipo.'" id="tipo_armado'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 9+1);
            
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['tipo_armado'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";

            //tension nominal
            $armado.='<span class="header-links2"> Tension Nominal</span>
                        <div class="input-cont" >
                        <select name="tension_nominal'.$tipo.'" id="tension_nominal'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 10+1);
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['tension_nominal'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";

            //frecuencia
            $armado.='<span class="header-links2"> Frecuencia</span>
                        <div class="input-cont" >
                        <select name="frecuencia'.$tipo.'" id="frecuencia'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 11+1);
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['frecuencia'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";


            //Intensidad del Cortocircuito
            $armado.='<span class="header-links2"> Intensidad del Cortocircuito</span>
                        <div class="input-cont" >
                        <select name="int_corto'.$tipo.'" id="int_corto'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 12+1);
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['int_corto'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";

            //Norma de Diseno
            $armado.='<span class="header-links2">Norma de Diseno</span>
                        <div class="input-cont" >
                        <select name="norma_d'.$tipo.'" id="norma_d'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 13+1);
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['norma_d'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";

            //Esquema de distribución tipo
            $armado.='<span class="header-links2">Esquema de distribución tipo</span>
                        <div class="input-cont" >
                        <select name="esquema_d'.$tipo.'" id="esquema_d'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 14+1);
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['esquema_d'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";


            //Tensión de mando
            $armado.='<span class="header-links2">Tensión de mando</span>
                        <div class="input-cont" >
                        <select name="tension_m'.$tipo.'" id="tension_m'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 15+1);
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['tension_m'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";

            //Borneros
            $armado.='<span class="header-links2">Borneros</span>
                        <div class="input-cont" >
                        <select name="borneos'.$tipo.'" id="borneos'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 16+1);
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['borneos'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";


            //Norma de Diseno
            $armado.='<span class="header-links2">Entrada de cables</span>
                        <div class="input-cont" >
                        <select name="entrada_c'.$tipo.'" id="entrada_c'.$tipo.'">';
            $atributos = $this->get_attribute((int)$this->context->language->id, 17+1);
            
            foreach ($atributos as $key => $value) {
                $selected=$this->is_selected($user_data['entrada_c'],$value['id_attribute']);
                $armado.="<option $selected value='".$value['id_attribute']."'>".$value['name']."</option>"   ; 
            }
            $armado.="</select></div>";


            return $armado;
        }

        
        function inicio_armado($user_data){
            $inicio_armado = $this->generar_armado('1', $user_data);
            $ret='<div id="footer_form"><br><br>'.preg_replace( "/\r|\n/", "", $inicio_armado );
            //$ret.=preg_replace( "/\r|\n/", "", $inicio_armado );
            $ret.='<a onclick="guardar_armado();" style="margin: 20px;" id="sub_footer_form" class="btn btn-primary locked">
                        Guardar
                      </a>';
            $ret.='</div>';
            return str_replace("'", '"', $ret) ;

            
        }

        function get_attribute($idLang, $id_group)
        {

            return Db::getInstance()->executeS('
            SELECT *
            FROM `'._DB_PREFIX_.'attribute` v
            LEFT JOIN `'._DB_PREFIX_.'attribute_lang` vl
                ON (v.`id_attribute` = vl.`id_attribute` AND vl.`id_lang` = '.(int) $idLang.')
            WHERE v.`id_attribute_group` = '.(int) $id_group.'
            ORDER BY v.`position` ASC
        ');
        }


        function get_user_data($id_user)
        {

            $u= Db::getInstance()->executeS('
            SELECT *
            FROM e_user_data
            where id_user='.$id_user." and status=0 order by id_user_data desc");

            return @$u[0];
        }

        function generate_footer_form($user_data)
        {
            $ret='
            <div id="footer_form">
                      <br><br>
                      <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                      <span class="header-links2"> Cambio</span>
                      <div class="input-cont2">
                        <input type="text" name="fox1" id="fox1" value='.$user_data['fox1'].' placeholder="">
                       
                      </div>

                      <span class="header-links2"> Fecha</span>
                      <div class="input-cont2">
                        <input type="text" name="fox2" id="fox2" value='.$user_data['fox2'].' placeholder="">
                       
                      </div>

                      <span class="header-links2"> Nombre</span>
                      <div class="input-cont2">
                        <input type="text" name="fox3" id="fox3" value='.$user_data['fox3'].' placeholder="">
                      </div>

                      <span class="header-links2"> Resp</span>
                      <div class="input-cont2">
                        <input type="text" name="fox4" id="fox4" value='.$user_data['fox4'].' placeholder="">
                      </div>

                      <span class="header-links2"> Probado</span>
                      <div class="input-cont2">
                        <input type="text" name="fox5" id="fox5" value='.$user_data['fox5'].' placeholder="">
                      </div>

                      <span class="header-links2"> Original</span>
                      <div class="input-cont2">
                        <input type="text" name="fox6" id="fox6"  value='.$user_data['fox6'].' placeholder="">
                      </div>

                      <span class="header-links2"> Proyecto/Obra</span>
                      <div class="input-cont2">
                        <input type="text" name="fox7" id="fox7" value='.$user_data['fox7'].' placeholder="">
                      </div>

                      <span class="header-links2"> Sustitucion por</span>
                      <div class="input-cont2">
                        <input type="text" name="fox8" id="fox8" value='.$user_data['fox8'].' placeholder="">
                      </div>

                      <span class="header-links2"> Descripción</span>
                      <div class="input-cont2">
                        <input type="text" name="fox9" id="fox9" value='.$user_data['fox9'].' placeholder="">
                      </div>

                      <span class="header-links2"> Sustituido por</span>
                      <div class="input-cont2">
                        <input type="text" name="fox10" id="fox10" value='.$user_data['fox10'].' placeholder="">
                      </div>

                      <span class="header-links2"> Observaciones</span>
                      <div class="input-cont2">
                        <input type="text" name="fox11" id="fox11" value='.$user_data['fox11'].' placeholder="">
                      </div>

                      <span class="header-links2"> Codigo de Obra</span>
                      <div class="input-cont2">
                        <input type="text" name="fox12" id="fox12" value='.$user_data['fox12'].' placeholder="">
                      </div>

                      <span class="header-links2"> Logo de la Empresa</span>
                      <div class="input-cont2">
                        <input onChange="img_pathUrl(this);" type="file" name="fox13" id="fox13" placeholder="">

                      </div>
                      
                      
                      <a onclick="guardar_sub_footer();" style="margin: 20px;" id="sub_footer_form" class="btn btn-primary locked">
                        Guardar
                      </a>
                      </form>
                      
                      
                     

                </div>';
                return $ret;
        }

        function generate_footer_form_vars($user_data)
        {
            $ret='';
            for($x=1; $x<13; $x++)
            {
                $ret.='<input type="hidden" name="fo_'.$x.'" id="fo_'.$x.'" value="'.$user_data['fox'.$x].'">';    
            }
            //la 13 es el logo que viene con el id del usuario
            $ret.='<input type="hidden" name="fo_13" id="fo_13" value="'.__PS_BASE_URI__.'images/'.$user_data['fox13'].'">';    
            return $ret;

        }

        function modal_guardar_armado()
        {

         $ret='
            <div id="footer_form">
                      <br><br>
                      
                      <form id="guardar_armado" action="" method="post" >
                      <span class="header-links2">
                        <input type="radio" name="g_armado" id="g_armado" value="1" onclick="show_nomb_esquema_span(2);" checked> Finalizar Luego
                      </span>
                      <br><br>
                      <span class="header-links2">
                        <input type="radio" name="g_armado" id="g_armado" value="2" onclick="show_nomb_esquema_span(1);"> Guardar en Mis Esquemas
                      </span>

                      <span id="nomb_esquema_span" class="hide">
                      <br><br>
                      <span class="header-links2"> Indique el Nombre de su Esquema</span>
                      <div class="input-cont2">
                        <input type="text" name="nombre_esquema" id="nombre_esquema"  placeholder="Nombre">
                       </span>
                      </div>
                      </span>
                      <a onclick="guardar_nombre_esquema();" style="margin: 20px;" id="sub_footer_form" class="btn btn-primary locked">
                        Guardar
                      </a>
                      </form>
                      
                      
                     

                </div>';
                return $ret;   
        }

        function listado_esquemas($id_user)
        {
            $ret="";
            $u= Db::getInstance()->executeS('
            SELECT *
            FROM e_user_data
            where id_user='.$id_user." and status=1 order by id_user_data desc");

            foreach ($u as $key => $value) {
            
                $ret.='<tr><td><a onclick="cargar_esquema(\''.$value['id_user_data'].'\');"> '.$value['nombre'].'</a></td></tr>'   ;
            }

            return $ret;
            
        }



        //busca todas las pages y hace la validacion
        function validar_circuito($id_user_data)
        {        
                 
                //busco el circuito de la pagina 1
                $u= Db::getInstance()->executeS('
                SELECT circuito
                FROM e_user_circuito
                where id_user_data='.$id_user_data." order by id_user_circuito ");

                 //***********CARGO LAS PAGES************************/
                $k=0;
                $js_page="";
                foreach ($u as $key => $x) {
                    $circuito=$x['circuito'];
                    $page[$k]=$this->make_circuito($circuito);
                    $js_page.=" page[".$k."]='".$page[$k]."'; ";
                    $k++;
                }
                //LE COLOCO EL TOTAL DE PAGINAS AL JS
                $js_page.=" total_page=".$k."; ";
                $js_page.=' $("#total_page").html(total_page); ';

            $data[0]=$page;    
            $data[1]=$js_page;    
            //print_r($page);
            return $data;    

        }


        //recibe el xml de una pagina y hace las validaciones con los productos disponibles
        function make_circuito($circuito_inicial_data)
        {        
                 
                 $circuito_inicial_data=str_replace('<?xml version="1.0"?>', '', $circuito_inicial_data);
                 $circuito_inicial_data=str_replace('<root>', '', $circuito_inicial_data);
                 $circuito_inicial_data=str_replace('</root>', '', $circuito_inicial_data);

                 /*
                 $circuito_inicial_data=str_replace('<mxGraphModel>', '', $circuito_inicial_data);
                 $circuito_inicial_data=str_replace('</mxGraphModel>', '', $circuito_inicial_data);
                 $circuito_inicial_data=str_replace('<root>', '', $circuito_inicial_data);
                 $circuito_inicial_data=str_replace('</root>', '', $circuito_inicial_data);
                 */
                 //echo $circuito_inicial_data;
                 $xml = new SimpleXMLElement($circuito_inicial_data);
                 $items_iterator = clone $xml;
                 $num=0;
                 //echo "******************************************";
                 //print_r($items_iterator->root->mxCell);
                 //print_r($xml);
                 foreach ($items_iterator->mxCell as $xx) {
                   //print_r($xx);
                  //echo " / ID: ".$xx['id']." / Parent:".$xx['parent']." / value:".$xx['value'];
                  //tengo los id de los productos, 1-20 donde 20 es el id del producto
                  $id_p=$xx['id'];
                  $parent_p=$xx['parent'];
                  $value_p=$xx['value'];

                  $c=explode('-', $id_p);
                  
                  //veo si c[0] es entero, porque los del borneos son b1, b2, b3, b4, b5 y no se toman en cuenta
                  if( (@$c[1]!="") && is_int(@$c[0]!=""))
                  {
                    //echo "xxxx";
                    //print_r($this->productos_disponibles);

                    //es un producto, hay que ver si esta disponible
                    if (!(in_array( $c[1], $this->productos_disponibles) )) {
                        //no esta disponible, se saca el xml
                        //agrego el id al array para luego sacarlo
                        //echo " *** hago el unset de ".$id_p." ****";
                        //print_r($xml->xpath('mxCell[@id="1-36"]'));
                        //echo "////";
                        //unset($xml->xpath('mxCell[@id="1-36"]')[0]->{0});      
                        unset($xml->xpath('mxCell[@id="'.$id_p.'"]')[0]->{0});      

                    }

                  }
                  $num++;
                }
                //echo "***********HAGO EL CAMBIO**************";
                $new_xml = $xml->asXML();
                //echo $new_xml;
                //coloco el xml en data.xml
                //$dir = str_replace('index.php', '',  $_SERVER['SCRIPT_FILENAME']);
                //$fichero = $dir."xml/data.xml";
                //file_put_contents($fichero, $new_xml);
                $new_xml=str_replace('<?xml version="1.0"?>', '', $new_xml);
                $new_xml=str_replace('<root>', '', $new_xml);
                $new_xml=str_replace('</root>', '', $new_xml);
                $new_xml=str_replace('<mxGraphModel>', '', $new_xml);
                $new_xml=str_replace('</mxGraphModel>', '', $new_xml);

                return '<?xml version="1.0"?><mxGraphModel><root>'.$new_xml."</root></mxGraphModel>";
        }


}


