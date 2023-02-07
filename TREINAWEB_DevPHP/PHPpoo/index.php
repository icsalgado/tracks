<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";


$produto1 = new Produto; //classe instaciada ou objeto da classe

$produto1->titulo = "Skol";
//$produto1->descricao = "Cerveja Brasileira"; //valor default não precisa ser atribuido
$produto1->preco = 2.50;

$produto2 = new Produto; //classe instaciada ou objeto da classe

$produto2->titulo = "Itaipava";
//$produto2->descricao = "Cerveja Brasileira";
$produto2->preco = 1.90;

$produto3 = new Produto; //classe instaciada ou objeto da classe

$produto3->titulo = "Heineken";
$produto3->descricao = "Cerveja Holandesa"; //alterando o valor default
$produto3->preco = 2.90;

var_dump($produto1);
var_dump($produto2);
var_dump($produto3);

$cliente1 = new Cliente;
$cliente1->nome = "Joao";
$cliente1->idade = 40;
$cliente1->endereco = "Sao Paulo";
$cliente1->telefone = '(11) 99999-9999';

$cliente1->comprar();