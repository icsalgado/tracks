<?php

$a = 5;
$b = &$a;
$a = 7;

echo $a;
echo "<br>";
echo $b;

##############################################
//_clone
class Teste
{
	public $valor;
}

$c = new Teste;
$c->valor = 15;

$d = $c;//referencia
$d->valor=689;

echo "<pre>";
var_dump($c);
echo "<pre>";
echo "<pre>";
var_dump($d);
echo "<pre>";

############################################
echo "<hr>";
$e = new Teste;
$e->valor = 15;

$f = clone $e;//referencia
$f->valor=689;

echo "<pre>";
var_dump($e);
echo "<pre>";
echo "<pre>";
var_dump($f);
echo "<pre>";
