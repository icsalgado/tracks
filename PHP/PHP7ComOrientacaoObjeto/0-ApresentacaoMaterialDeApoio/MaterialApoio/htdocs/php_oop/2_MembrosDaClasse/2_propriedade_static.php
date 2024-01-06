<?php
class Numeros
{
	const NUMERO_PI = 3.1416;

	static public $par;	
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


Numeros::$par = 38;
echo Numeros::$par;
echo "<hr>";
$a = new Numeros;
var_dump($a);
