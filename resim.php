<?php
session_start();


$harfler = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","y","x","w","z");


$rastgeleharf = rand(0,26);


$rastgelesayi = rand(100, 999);


$resimmetni = $harfler[$rastgeleharf].$rastgelesayi;


$resimmetni = md5($resimmetni);

$yeniresimmetni = substr($resimmetni,0,6);


$_SESSION['captcha'] = $yeniresimmetni;


$resim = imagecreatetruecolor(130,30);


$arkaplanrenk = imagecolorallocate($resim, 0, 0, 0);


$fontrenk = imagecolorallocate($resim, 255, 255, 255);


imagefill($resim, 0, 0, $arkaplanrenk);


imagestring($resim, 5, 5, 5, $yeniresimmetni,$fontrenk);


header("Cache-Control: no-cache");


header("Content-type: image/png");


imagepng($resim);


imagedestroy($resim);

?>
