<?php
include_once 'Conta.php';
$conta = new Conta();//Fatal error: Uncaught Error: Cannot instantiate abstract class Conta
$conta->movimentar(2000);
echo "<pre>";
var_dump($conta);
echo "</pre>";
echo $conta->verSaldo();
?>