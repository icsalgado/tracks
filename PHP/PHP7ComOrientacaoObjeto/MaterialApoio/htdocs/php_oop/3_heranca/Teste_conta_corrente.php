<?php
include_once 'ContaCorrente.php';
$cc = new ContaCorrente();
$cc->movimentar(-2000);
echo "<pre>";
var_dump($cc);
echo "</pre>";