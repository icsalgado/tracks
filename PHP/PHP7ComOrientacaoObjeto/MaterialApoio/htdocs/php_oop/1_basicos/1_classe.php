<?php
class Numeros
{
	public $par;	
	public $impar;
	public $primos;
	public $compostos;

	function teste()
	{
		return "Ola, eu sou a funcao Teste<br>";
	}

}


//new é o construtor de Objetos
$um = new Numeros;

//operador de objetos é "->"
$um->par=12;
echo "<pre>";
var_dump($um);
echo "</pre>";

$dois = new Numeros;
$dois->par = 36;
echo $dois->par;
echo "<pre>";
var_dump($dois);
echo "</pre>";

echo gettype($dois);
?>