<?php

require_once "src/Classes/Produto.php";

$produto1 = new Produto; //classe instaciada ou objeto da classe
$produto1->titulo = "Skol";
$produto1->descricao = "Cerveja Brasileira"; //valor default não precisa ser atribuido
$produto1->preco = 2.50;


$produto2 = $produto1; //isso faz uma cópia do endereço do objeto, não é uma passagem por referência

$produto2->titulo = "Itaipava"; //altera no produto 2 e no 1

$produto2 = 10;//não altera no objeto referência

var_dump($produto1);
var_dump($produto2);

$produto3 = &$produto1; //essa é uma referência ao produto1

$produto3->titulo = "Sol"; 
$produto3 = 10;//altera a referência do 1 e do 3

//var_dump($produto1);
//var_dump($produto3);