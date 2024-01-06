<?php

class Produto{
	public $nome;
	public $valor;
	function __construct($nome,$valor){
		$this->nome = $nome;
		$this->valor = $valor;
	}
}
class Carrinho{
	public $prod1;
	public $prod2;
	public $prod3 ;
	public function __construct(){
		$this->prod1 = new Produto('bala',25);
		$this->prod2 = new Produto('bola',36);
		$this->prod3 = new Produto('bula',37);
	}	
}



$car = new Carrinho();
var_dump($car);