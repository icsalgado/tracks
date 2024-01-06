<?php
class Numeros
{
	const NUMERO_PI = 3.1416;

	public $par;	
	protected $impar;
	private $primos;
	
	public function setImpar($valor)
	{
		//$this aponta para o objeto
		$this->impar = $valor;
	}
	public function getImpar()
	{
		return $this->impar;
	}
	

}


$a = new Numeros;
$a->par = 24;

echo $a->par;

var_dump($a);
