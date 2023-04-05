<?php

require_once "src/Classes/Produto.php";

$produto1 = new Produto; //classe instaciada ou objeto da classe
$produto1->titulo = "Skol";
$produto1->descricao = "Cerveja Brasileira"; //valor default não precisa ser atribuido
$produto1->preco = 2.50;

$produto2 = new Produto; //classe instaciada ou objeto da classe
$produto2->titulo = "Skol";
$produto2->descricao = "Cerveja Brasileira"; //valor default não precisa ser atribuido
$produto2->preco = 2.50;

$produto3 = new Produto; //classe instaciada ou objeto da classe
$produto3->titulo = "Skol Litrão";
$produto3->descricao = "Cerveja Brasileira"; //valor default não precisa ser atribuido
$produto3->preco = 2.50;

$produto4 = $produto1; //referência para o mesmo objeto

var_dump($produto1 == $produto2); // compara o as propriedades e tipo !=
var_dump($produto3 == $produto2);

var_dump($produto1 === $produto2); //verifica também se a referência aponta para o mesmo objeto !==
var_dump($produto1 === $produto4); 