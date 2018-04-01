<?php
  require 'vendor/autoload.php';

  $app = new Silex\Application();
  $app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
  });

  $app->get('/date', function(){
    date_default_timezone_set('Europe/Kiev');
    return date('d/m/Y H:i');
  });

  $app->run();
 ?>
