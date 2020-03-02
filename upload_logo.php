<?php 
require_once('config/config.inc.php');
require_once('init.php');

$id_user=55;

/*
$u= Db::getInstance()->executeS('
            SELECT *
            FROM e_user_data
            where id_user='.$id_user);
$dat=$u[0];
*/

$dir=$_SERVER['DOCUMENT_ROOT']."/electro/images/";
$path = $_FILES['image']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

$file=$id_user .".".$ext;
move_uploaded_file($_FILES["image"]["tmp_name"], $dir. $file);

//hago el update de la foto en el fox13
$u= Db::getInstance()->execute("update e_user_data set fox13='".$file."' where id_user=".$id_user);

//echo $_FILES["image"]["name"];


