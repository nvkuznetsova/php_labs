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
    <h4>Задание 3</h4><br>
    <a href="/invert.php">Test</a><br>
    <h4>Задание 4</h4><br>
    <a href="/diagrams.php">Диаграмма</a>
    <h4>Задание 30.03.2018</h4><br>
    <a href="/weather.php">Прогноз погоды</a>';
  });

  $app->get('/hello/{name}', function ($name) use ($app) {
      return 'Hello '.$app->escape($name);
  });

  $app->get('/date', function(){
      date_default_timezone_set('Europe/Kiev');
      return '<h3>'.date('r').'</h3>';
  });

  $app->get('/print', function() {
    header('Content-type: text/plain; charset=utf-8');
    return file_get_contents(basename(__FILE__));
  });

  $app->get('/author', function() {
    header('Content-type: text/html; charset=utf-8');
    return '<h4 id="author" title="GossJS">Кузнецова Наталья</h4>';
  });

  $app->get('/info', function() {
    return phpinfo();
  });

	$app->run();
