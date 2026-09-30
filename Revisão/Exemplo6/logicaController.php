<?php

$temp = $_POST['temp'];
$fahrenheit = (float)($temp * 9 / 5) + 32;

require_once 'view_saida.php';