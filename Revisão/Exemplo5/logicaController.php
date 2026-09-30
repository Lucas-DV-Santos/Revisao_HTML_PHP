<?php

$nomeC = $_POST['nomeC'];
$nomeP = $_POST['nomeP'];
$preco =  $_POST['preco'];
$quant = $_POST['quant'];
$subtotal = number_format($preco * $quant, 2);
$total = 0;
$Vdesc = 0;

if($subtotal >= 200){
    $Vdesc = number_format(($subtotal * 0.10) , 2);
    $total = number_format(($subtotal * 0.90), 2);
}else{
    $total = $subtotal;
}

require_once 'view_saida.php';

?>