<?php

$date = new class {

  function __construct($today = date('d/m/Y H:i'))
  {
    # code...
    $this->today = $today;
  }
  function getDate() {return $this->today;}
};

  if (isset($_GET)) {
    # code...
    echo($date->getDate());
  }

  if (isset($_GET['print'])) {
    header('Content-type: text/plain; charset=utf-8');
    echo file_get_contents(basename(__FILE__));
  }

  if (isset($_GET['author'])) {
    header('Content-type: text/html; charset=utf-8');
    echo '<h4 id="author" title="GossJS">Кузнецова Наталья</h4>';
  }
  if (isset($_GET['info'])) {
    phpinfo();
  }
  if (isset($_GET['public'])) {
    header('Access-Constrol-Allow-Origin: *');
    header('Content-type: text/plain; charset=utf-8');
    header('Access-Control-Allow-Methods: GET,POST,DELETE');
  }
