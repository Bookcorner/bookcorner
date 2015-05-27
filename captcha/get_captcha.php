<?php

$randomtext = isset($_REQUEST['randomtext']) ? $_REQUEST['randomtext'] : 'You shall not pass';

$dir = 'fonts/';

$image = imagecreatetruecolor(165, 50);

// random number 1 or 2
$num = rand(1,2);
if($num==1) {
	$font = "Capture it 2.ttf"; // font style
} else {
	$font = "Molot.otf";// font style
}

// random number 1 or 2
$num2 = rand(1,2);
if($num2==1) {
	$color = imagecolorallocate($image, 113, 193, 217);// color
} else {
	$color = imagecolorallocate($image, 163, 197, 82);// color
}

$white = imagecolorallocate($image, 255, 255, 255); // background color white
imagefilledrectangle($image,0,0,399,99,$white);

imagettftext ($image, 30, 0, 10, 40, $color, $dir.$font, $randomtext);

header("Content-type: image/png");
imagepng($image);

?>