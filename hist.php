<?php
$rates = json_decode(file_get_contents('https://kodaktor.ru/j/rates'));

$names = array_map(function($x){return $x -> name;}, $rates);

$w = 600;
$h = 400;
$pad = 10;
$i=0;

$wRect = $w / count($names);
$ctx = imagecreate($w, $h);
$red = imagecolorallocate ($ctx,255,0,0);
$white = imagecolorallocate ($ctx,255,255,255);
imagefilledrectangle($ctx,0,0,$w,$h,$white);

array_walk($rates, function($x, $i) use ($wRect, $ctx, $h, $red, $pad, $names) {
$sell = $x -> sell;
$hRect = $sell*4;

$x1 = $i*$wRect;
$y1 = $h-$hRect;
$x2 = (($i+1)*$wRect)-$pad;
$y2 = $h;
$x3 = $x1+10;

$textcolor = imagecolorallocate($ctx, 0, 0, 0);

imagefilledrectangle($ctx,$x1,$y1,$x2,$y2,$red);
imagettftext($ctx, 10, 0, $x3, 285, $textcolor, "DejaVuSans.ttf", $names[$i]);
$i++;
});

header ("Content-type: image/png");
imagepng($ctx);
?>
