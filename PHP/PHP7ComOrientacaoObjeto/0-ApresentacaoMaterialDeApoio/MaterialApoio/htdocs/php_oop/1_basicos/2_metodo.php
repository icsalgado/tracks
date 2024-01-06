<?php
class Numeros
{
	public $par;	
	public $impar;
	public $primos;
	public $compostos;

	public function Numeros()
	{
		echo "Olá eu sou o metodo construtor<br>";
	}

	public function teste()
	{
		return "Ola, eu sou a funcao Teste<br>";
	}

}


//new é o construtor de Objetos
$um = new Numeros;
echo $um->teste();


$dois = new Numeros;
echo $dois->teste();

//teste();
?>