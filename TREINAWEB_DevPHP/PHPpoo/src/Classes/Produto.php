<?php

class Produto
{
    //o ideal seria cada classe ter o seu próprio arquivo

    //propriedades da classe
    const NORMA = "1050"; //constante  

    public $titulo;
    public $descricao = "Cerveja Brasileira"; //valor default
    public $preco;

    public function defineCodProduto($codigo)
    {
        $this->codigoBarras = $codigo;
    }
}