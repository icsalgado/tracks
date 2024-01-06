<?php

//carrega o arquivo que contém a classe
require_once "src/Classes/Cliente.php";


$cliente1 = new Cliente; //instanciando a classe cliente
$cliente1->nome = "Joao";
$cliente1->idade = 40;
$cliente1->endereco = "Sao Paulo";
$cliente1->telefone = '(11) 99999-9999';
$cliente1->comprar(); //chamada de método / comportamento

$cliente2 = new Cliente; //instanciando a classe cliente
$cliente2->nome = "Maria";
$cliente2->idade = 40;
$cliente2->endereco = "Sao Paulo";
$cliente2->telefone = '(11) 99999-9999';
$cliente2->comprar(); //chamada de método / comportamento

$cliente3 = new Cliente; //instanciando a classe cliente
$cliente3->definirNome("Jose");
$cliente3->idade = 40;
$cliente3->endereco = "Sao Paulo";
$cliente3->telefone = '(11) 99999-9999';
$cliente3->comprar(); //chamada de método / comportamento

