<?php
include_once 'ContaCorrente.php';
$cc = new ContaCorrente();
//$cc->movimentar(-2001);
$cc->validar();
echo "<pre>";
var_dump($cc);
echo "</pre>";