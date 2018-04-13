<?php
$data = file_get_contents('php://input');
$inv = ~$data;
var_dump(hex2bin($inv));
