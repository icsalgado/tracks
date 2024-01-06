<?php
class Numeros
{
	public $num;
	public $par;
	protected $impar;

	function __construct($valor)
	{
		echo "Eu sou o Metodo construtor - $valor<br>";
		$this->impar = $valor;
	}
	
}

//new => construtor de objetos
$numero1 = new Numeros(25);



echo "<pre>";
var_dump($numero1);
echo "</pre>";

############################################
echo "<hr>";
