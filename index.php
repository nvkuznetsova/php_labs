<?php

  require 'vendor/autoload.php';

  $app = new Silex\Application();

  $app->get('/', function() {
    return '<h1>Задания</h1><a href="/date">Тут дата</a>
    <a href="/hello/world!">Тут приветствие</a>';
  });

  $app->get('/hello/{name}', function ($name) use ($app) {
      return 'Hello '.$app->escape($name);
  });

  $app->get('/date', function(){
      date_default_timezone_set('Europe/Kiev');
      return date('r');
  });

	$app->run();
