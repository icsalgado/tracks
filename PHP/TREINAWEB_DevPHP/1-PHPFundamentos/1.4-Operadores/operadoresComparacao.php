<?php

$var1 = 10;
$var2 = 20;
$var3 = "10";

var_dump($var1 == $var2); //retorna um booleano
var_dump($var1 == $var3); //igualdade, mesmo comparando um int com um string
var_dump($var1 != $var2); //diferenca
var_dump($var1 <> $var2); //diferenca
var_dump($var1 < $var2); //menor 
var_dump($var1 > $var2); //maio
var_dump($var1 <= $var2); //menor ou igual
var_dump($var1 >= $var2); //maior ou igual

var_dump($var1 === $var3); //igualdade incluindo tipo
var_dump($var1 !== $var3); //diferença incluindo tipo
