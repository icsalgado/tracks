<?php

$generica = new stdClass;

$generica->nome = "Treinaweb";
$generica->curso = "PHP OO";

var_dump($generica);

//converter um array
$array = [
    "nome" => "treinaweb",
    "curso"=> "PHP OO"
];

$objeto = (object) $array;

var_dump($objeto);