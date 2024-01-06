<?php
class Numeros
{
	const NUMERO_PI = 3.1416;

	static public $par;	
	static protected $impar;
	private $primos;
	
	static public function setImpar($valor)
	{
		//self aponta para a classe
		static::$impar = $valor;
	}
	static public function getImpar()
	{
		return static::$impar;
	}
}


Numeros::setImpar(35);
echo "<hr>";
echo Numeros::getImpar();