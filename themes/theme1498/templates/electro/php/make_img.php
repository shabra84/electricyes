<?php                   

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

if ($handle = opendir('/opt/lampp/htdocs/ELECTRICAL/piezas/')) {

    while (false !== ($file = readdir($handle))) {

        if ($file != "." && $file != "..") {

            $file='/opt/lampp/htdocs/ELECTRICAL/piezas/'.$file;
            $path_parts = pathinfo($file);
            $archivo=$path_parts['filename'];
            $ext=$path_parts['extension'];
            if($ext=='png')
            {

                $resultado1 = strpos($archivo, '_x1');
                $resultado2 = strpos($archivo, '_x2');
 
                if( ($resultado1 === FALSE) && ($resultado2 === FALSE))
                {

                $picture=imagecreatefrompng($file);
                $picture=flipImage($picture,1,0);
                imagepng($picture, '/opt/lampp/htdocs/ELECTRICAL/piezas/'.$archivo.'_x1.'.$ext);

                $picture=imagecreatefrompng($file);
                $picture=flipImage($picture,0,1);
                imagepng($picture, '/opt/lampp/htdocs/ELECTRICAL/piezas/'.$archivo.'_x2.'.$ext);
                }

                //header("Content-type: image/png");
            }

            
        }
    }

    closedir($handle);
}


if ($handle = opendir('/opt/lampp/htdocs/ELECTRICAL/piezas/')) {

    while (false !== ($file = readdir($handle))) {

        if ($file != "." && $file != "..") {

            $file='/opt/lampp/htdocs/ELECTRICAL/piezas/'.$file;
            $path_parts = pathinfo($file);
            $archivo=$path_parts['filename'];
            $ext=$path_parts['extension'];
            if($ext=='png')
            {
                $picture=imagecreatefrompng($file);
                $picture=flipImage($picture,0,0);
                imagepng($picture, '/opt/lampp/htdocs/ELECTRICAL/piezas/vert/'.$archivo.'.'.$ext);


                $picture=imagecreatefrompng($file);
                $picture=flipImage($picture,1,0);
                imagepng($picture, '/opt/lampp/htdocs/ELECTRICAL/piezas/vert/'.$archivo.'_x1.'.$ext);

                $picture=imagecreatefrompng($file);
                $picture=flipImage($picture,0,1);
                imagepng($picture, '/opt/lampp/htdocs/ELECTRICAL/piezas/vert/'.$archivo.'_x2.'.$ext);

                //header("Content-type: image/png");
            }

            
        }
    }

    closedir($handle);
}



?>
