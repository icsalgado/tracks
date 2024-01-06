<?php

require_once "src/Classes/Produto.php";

$produto1 = new Produto; //classe instaciada ou objeto da classe
$produto1->titulo = "Skol";
$produto1->descricao = "Cerveja Brasileira"; //valor default não precisa ser atribuido
$produto1->preco = 2.50;


$produto2 = clone $produto1; //passa o endereço para o novo objeto
$produto2->preco = 3.50;

function alterarProduto($produto)
{
    $produto->titulo = "Skol Litrão";

    return $produto;//esse novo objeto precisa ser retornado para ser usado
}

$produto3 = alterarProduto(clone $produto1);

var_dump($produto1);
var_dump($produto2);
var_dump($produto3);

