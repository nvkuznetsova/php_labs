<?php
  //$ctx = imagecreate($w, $h);

  $rates = json_decode(file_get_contents('https://kodaktor.ru/j/rates'));

  $names = array_map(function($x) {return $x-> name;}, $rates);
  $sell = array_map(function($x) {return $x-> sell;}, $rates);
  $h = max($sell);
  $n = count($sell);
  //$red = imagecolorallocate($im, 255, 0, 0);

  var_dump($n);
  //array_walk($rates, function($x, $i) use ($wRect, $ctx, $h, $red) { });
 ?>
