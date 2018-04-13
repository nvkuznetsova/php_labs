<?php
$data = file_get_contents('php://input');
$inv = ~$data;
$json = json_decode($inv, true);
var_dump($json);
