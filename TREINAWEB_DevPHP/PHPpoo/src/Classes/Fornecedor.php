<?php

class Fornecedor
{
    //declaração das propriedades - caracteristicas da classe

    public const PAIS = "Brasil"; //modificador de visivilidade disponível a partir do php 7.1

    public $razaoSocial;
    public $nomeFantasia;
    public $cnpj;

    //para exemplificar classes anônimas
    public function autorizar($usuario)
    {
        if ($usuario->nome == "joao" && $usuario->senha == "123456"){
            echo "\nAutorizado\n";
        }else{
            echo "\nBloqueado\n";
        }
    }

}