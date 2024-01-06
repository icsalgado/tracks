<?php

$var1 = true;
$var2 = false;

var_dump($var1 && $var2); //comparacao and retorna um booleano
var_dump($var1 and $var2); 
var_dump($var1 || $var2); //comparacao ou
var_dump($var1 or $var2); 
var_dump($var1 xor $var2); //comparacao ou exclusivo, so retorna true se forem diferentes  
var_dump(!$var1); //negacao
var_dump(!$var2); //negacao