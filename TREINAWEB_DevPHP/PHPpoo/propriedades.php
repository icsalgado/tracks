<?php

require_once "src/Classes/Produto.php";

$produto1 = new Produto; //classe instaciada ou objeto da classe
$produto1->titulo = "Skol";
$produto1->descricao = "Cerveja Brasileira"; //valor default não precisa ser atribuido
$produto1->preco = 2.50;
$produto1->desconto = 0.1; //declaração em tempo de execução

$produto1->defineCodProduto('00001'); //declaração em tempo de execução

var_dump($produto1);