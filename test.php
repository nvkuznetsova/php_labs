<?php
// массив значений
$values = array("23","32","35","57","12",
                 "3","36","54","32","15",
                 "43","24","30");

// Определяем общее количество столбцов
$columns  = count($values);

// Ширина и высота конечного изображения
$width = 200;
$height = 100;

// Отступ между колонками
$padding = 5;

// Ширина одной колонки
$column_width = $width / $columns ;

// Переменные изображения
$im        = imagecreate($width,$height);
$gray      = imagecolorallocate ($im,0xcc,0xcc,0xcc);
$gray_lite = imagecolorallocate ($im,0xee,0xee,0xee);
$gray_dark = imagecolorallocate ($im,0x7f,0x7f,0x7f);
$white     = imagecolorallocate ($im,0xff,0xff,0xff);

// Фон
imagefilledrectangle($im,0,0,$width,$height,$white);

$maxv = 0;

// Вычисляем максимальное значение
for($i=0;$i<$columns;$i++)$maxv = max($values[$i],$maxv);

    // Строим диаграмму
    for($i=0;$i<$columns;$i++)
    {
        $column_height = ($height / 100) * (( $values[$i] / $maxv) *100);

        $x1 = $i*$column_width;
        $y1 = $height-$column_height;
        $x2 = (($i+1)*$column_width)-$padding;
        $y2 = $height;

        imagefilledrectangle($im,$x1,$y1,$x2,$y2,$gray);
    }

// Отправляем PNG заголовок.
// При необходимости можно заменить на JPEG или GIF и т.д.
header ("Content-type: image/png");
imagegd($im);
?>
