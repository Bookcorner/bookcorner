<?php

$randomtext = isset($_REQUEST['randomtext']) ? $_REQUEST['randomtext'] : 'keepout';

$dir = 'fonts/';

$image = imagecreatetruecolor(165, 50);

// fuente
$num = rand(1,2);
if($num==1) {
	$font = "COMICBD.TTF"; // font style
} else {
	$font = "DIGIFAW.TTF";// font style
}

// color
$num2 = rand(1,3);
if($num2 == 1) {
	$color = imagecolorallocate($image, 0, 117, 0); // verde
} else if ($num2 == 2) {
    $color = imagecolorallocate($image, 255, 0, 0); // rojo
} else {
	$color = imagecolorallocate($image, 0, 0, 255); // azul
}

$num3 = rand(1,2);
if($num3==1) {
    $axis = 3;
} else {
    $axis = -2;
}

$white = imagecolorallocate($image, 255, 255, 255); // background color white
imagefilledrectangle($image,0,0,399,99,$white);

imagettftext ($image, 20, $axis, 0, 40, $color, $dir.$font, $randomtext);

header("Content-type: image/png");
imagepng($image);

?>