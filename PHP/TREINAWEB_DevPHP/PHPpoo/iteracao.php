<?php

require_once "src/Classes/Produto.php";

$produto1 = new Produto; //classe instaciada ou objeto da classe
$produto1->titulo = "Skol";
$produto1->descricao = "Cerveja Brasileira"; //valor default não precisa ser atribuido
$produto1->preco = 2.50;

foreach($produto1 as $nome => $valor){
    echo "$nome: $valor\n";
}