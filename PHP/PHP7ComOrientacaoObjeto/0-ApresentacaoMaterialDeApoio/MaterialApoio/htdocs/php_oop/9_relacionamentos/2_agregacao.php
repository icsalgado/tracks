<?php
//relação TODO/PARTE
//Objeto agregado a outro
//um Objeto toma um outro objeto externo 
//como parte de si mesmo
//pode agregar uma ou mais instancias sendo a forma mais
//comum um array
class Produto{
	public $nome;
	public $valor;
	function __construct($nome,$valor){
		$this->nome = $nome;
		$this->valor = $valor;
	}
}
class Carrinho{
		protected $itens=[];
		public function InsereProduto(Produto $item){
				$this->itens[] = $item;
		}
}


$prod = new Produto("Geladeira",2566.00);
$prod2 = new Produto("Aspirador",300.00);
//var_dump($prod);
//var_dump($prod2);
$car = new Carrinho();
$car->InsereProduto($prod);
$car->InsereProduto($prod2);

$prod->valor = 777;
$car->InsereProduto(new Produto("Microondas",1500));
var_dump($car);