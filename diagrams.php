<?php
  $ctx = imagecreate($w, $h);

  $rates = json_decode(file_get_contents('https://kodaktor.ru/j/rates'));

  $names = array_map(function($x) {return $x-> name;}, $rates);
 ?>
