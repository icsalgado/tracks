<?php
include_once 'ContaConjuntaPoupanca.php';
$cc = new ContaConjuntaPoupanca();
//$cc->movimentar(-2001);
$cc->validar();
echo "<pre>";
var_dump($cc);
echo "</pre>";