<?php
//$data = file_get_contents('php://input');
$data = '\xa7';
$inv = ~$data;
var_dump(hex2bin($inv));
