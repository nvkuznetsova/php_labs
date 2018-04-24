<?php

  require 'vendor/autoload.php';

  $app = new Silex\Application();

  $app->get('/', function() {
    return '<h1>Задания</h1>
    <a href="/dateClass.php">Задание1. Класс дата</a><br>
    <h4>Задание 2</h4><br>
    <a href="/date">Дата</a>&nbsp;
    <a href="/hello/world!">Приветствие</a>&nbsp;
    <a href="/print">Печать текста</a>&nbsp;
    <a href="/author">Автор</a><br>
    <h4>Задание 4</h4><br>
    <a href="/hist">Диаграмма</a>
    <h4>Задание 30.03.2018</h4><br>
    <a href="/weather.php">Прогноз погоды</a>&nbsp;
    <a href="/add/100/50">Сумма</a>&nbsp;
    <a href="/sub/100/50">Разность</a>&nbsp;
    <a href="/mpy/100/50">Умножение</a>&nbsp;
    <a href="/div/100/50">Деление</a>&nbsp;
    <a href="/pow/10/2">Степень</a>&nbsp;';
  });

  $app->get('/hello/{name}', function ($name) use ($app) {
      return 'Hello '.$app->escape($name);
  });

  $app->get('/date', function(){
      date_default_timezone_set('Europe/Kiev');
      return '<h3>'.date('r').'</h3>';
  });

  $app->get('/print', function() {
    //header('Content-type: text/plain; charset=utf-8');
    return file_get_contents(basename(__FILE__));
  });

  $app->get('/author', function() {
    header('Content-type: text/html; charset=utf-8');
    return '<h4 id="author" title="GossJS">Кузнецова Наталья</h4>';
  });

  $app->get('/info', function() {
    return phpinfo();
  });

  $app->get('/hist', function() {
    return '<h4 id="author" title="GossJS">Кузнецова Наталья</h4>
    <br><img src="./hist.php">';
  });

  $app->post('/haha', function() {
    $data = ~file_get_contents('php://input');
    return (string)$data."\n";
  });

  $app->get('/add/{first}/{second}', function ($first, $second) use ($app) {
      $sum = $first+$second;
      return '<h1>Сумма:</h1><h3>'.$sum.'</h3>';
  });

  $app->get('/sub/{first}/{second}', function ($first, $second) use ($app) {
      $sub = $first-$second;
      return '<h1>Разность:</h1><h3>'.$sub.'</h3>';
  });

  $app->get('/mpy/{first}/{second}', function ($first, $second) use ($app) {
      $m = $first*$second;
      return '<h1>Умножение:</h1><h3>'.$m.'</h3>';
  });

  $app->get('/div/{first}/{second}', function ($first, $second) use ($app) {
      $div = $first/$second;
      return '<h1>Деление:</h1><h3>'.$div.'</h3>';
  });

  $app->get('/pow/{first}/{second}', function ($first, $second) use ($app) {
      $pow = pow($first, $second);
      return '<h1>Степень:</h1><h3>'.$pow.'</h3>';
  });

	$app->run();
