<?php

  require 'vendor/autoload.php';

  $app = new Silex\Application();

  $app->get('/', function() {
    return '<h1>Hello</h1>';
  });

  $app->get('/hello/{name}', function ($name) use ($app) {
      return 'Hello '.$app->escape($name);
  });

  $app->get('/date', function(){
      date_default_timezone_set('Europe/Kiev');
      return date('r');
  });

	$app->run();
