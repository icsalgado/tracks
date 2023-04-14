<?php

require_once "src/Classes/Fornecedor.php";

//declarando a classe
Class Usuario
{
    public $nome = "joao";
    public $senha = "123456";
}


$joao = new Usuario;

$fornecedor = new Fornecedor;

$fornecedor->autorizar($joao);

//sem declarar a classe
$fornecedor->autorizar(
    new Class {
    public $nome = "joao";
    public $senha = "123456";
    }
);