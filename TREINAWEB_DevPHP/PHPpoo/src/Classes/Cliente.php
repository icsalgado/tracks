<?php
//cada classe deve estar em seu próprio arquivo
class Cliente
{
    //Declarações de propriedades da classe

    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    //declaração de metodos

    public function comprar()
    {
        echo "{$this->nome} Realizada compra\n"; //this vai referenciar o objeto dentro da propria classe
    }

    public function definirNome($nome)
    {
        $this->nome = $nome;
    }
}

