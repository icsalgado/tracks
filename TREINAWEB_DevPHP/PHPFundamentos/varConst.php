<?php

//variaveis
$email = "teste@teste.com.br";//tipagem dinâmica, não precisa declarar o tipo

echo $email;
echo "\n";
$email = 99999999;//tipagem fraca recebe qualquer tipo

echo $email;
echo "\n";
//constantes

define("ESCOLA", "Treinaweb");
const CURSO = "PHP";

echo ESCOLA;
echo "\n";
echo CURSO;
echo "\n";

//tipos
echo gettype($email);
echo "\n";

$preco = 39.90;

var_dump($preco);
echo "\n";

//arrays

$linguagens = ["PHP", "Java", "C#"];

echo $linguagens[1];
echo "\n";

//arrays associativos
$curso = [
    "nome_curso" => "PHPfundamentos", 
    "versao" => 7.4, 
    "carga_horaria" => 40, 
    "status" => true
];

echo $curso["nome_curso"];
echo "\n";

//array multidimensionais
$numeros = [
    [1, 2, 3 , 4], 
    [6, 7, 8, 9], 
    ["dez", "onze", "doze"],
    [["treze", "quatorze"], "quinze"]
];

echo $numeros[2][2];
echo "\n";

echo $numeros[3][0][1];
echo "\n";

$numeros[3][2] = "dezesseis";
var_dump($numeros);
echo "\n";
