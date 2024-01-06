<?php
//possui uma REFERENCIA à posição
//de memoria onde o outro objeto se encontra
//usar um objeto como atributo do outro
//UMA CLASSE "USA" OUTRA CLASSE
class Produto{
	public $nome;
	public $valor;
	public $fornecedor;//Object da classe Fornecedor
	function __construct($nome,$valor){
		$this->nome = $nome;
		$this->valor = $valor;
	}
}
class Fornecedor{
	public $id;
	public $razaoSocial;
	public $telefone;
}
$for = new Fornecedor;
$for->id = 1;
$for->razaoSocial = 'Brastemp';
$for->telefone = '2222-2222';
//var_dump($for);

$prod = new Produto("Geladeira",2566.00);
$prod->fornecedor = $for;//referencia
//var_dump($prod);
echo "<hr>";
//$prod->fornecedor->id=2;
echo "<hr>";
$for->id = 654;
var_dump($for);
var_dump($prod);
/**/