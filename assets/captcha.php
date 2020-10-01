<?php
session_start();
$permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ123456789';
$captcha_code = '';
for($i = 0; $i < 6; $i++)
    $captcha_code .= $permitted_chars[rand(0, strlen($permitted_chars)-1)];
$_SESSION["captcha_code"] = $captcha_code;
$target_layer = imagecreatetruecolor(130,40);
$colors = [];
$red = rand(155, 255);
$green = rand(155, 255);
$blue = rand(155, 255);
for($i = 0; $i < 5; $i++)
    $colors[] = imagecolorallocate($target_layer, $red - 20*$i, $green - 20*$i, $blue - 20*$i);
imagefill($target_layer, 0, 0, $colors[0]);
for($i = 0; $i < 20; $i++) {
    imagesetthickness($target_layer, rand(1, 5));
    $line_color = $colors[rand(1, 4)];
    imagerectangle($target_layer, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $line_color);
}
$captcha_text_color = imagecolorallocate($target_layer, $red-100, $green-100, $blue-100);
imagettftext($target_layer, 18, 0, 15, 30, $captcha_text_color,__DIR__.'\fonts\123.ttf', $captcha_code);
header('Content-type: image/png');
imagepng($target_layer);
imagedestroy($target_layer);
?>