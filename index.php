<?php

  if (isset($_GET['print'])) {
    header('Content-type: text/plain; charset=utf-8');
    echo file_get_contents(basename(__FILE__));
  }

  if (isset($_GET['author'])) {
    header('Content-type: text/html; charset=utf-8');
    echo '<h4>Кузнецова Наталья</h4>';
  }
  if (isset($_GET['info'])) {
    phpinfo();
  }
