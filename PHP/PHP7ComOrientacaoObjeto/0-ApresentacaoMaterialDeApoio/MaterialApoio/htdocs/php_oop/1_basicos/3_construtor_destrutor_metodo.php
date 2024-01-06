<?php
class Numeros
{
	public $par;	
	public $impar;
	public $primos;
	public $compostos;

	//public function Numeros()
	public function __construct($param)
	{
		echo "Olá eu sou o metodo construtor - e o parametro passado foi $param<br>";
	}
	public function __destruct()
	{
		echo "Desconectei!!!<br>";
	}

	public function teste()
	{
		return "Ola, eu sou a funcao Teste<br>";
	}

}


//new é o construtor de Objetos
$um = new Numeros("24");

$dois = new Numeros(36);


unset($dois);
echo "<hr>";