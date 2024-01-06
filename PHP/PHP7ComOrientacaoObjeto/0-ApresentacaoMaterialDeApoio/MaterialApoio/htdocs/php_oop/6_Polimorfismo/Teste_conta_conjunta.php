<?php
include_once 'ContaConjunta.php';
$cc = new ContaConjunta();
//$cc->movimentar(-2001);
$cc->validar();
echo "<pre>";
var_dump($cc);
echo "</pre>";