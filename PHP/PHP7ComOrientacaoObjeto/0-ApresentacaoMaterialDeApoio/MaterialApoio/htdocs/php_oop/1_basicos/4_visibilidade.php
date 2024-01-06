<?php
class Numeros
{
	//pode ser acessada diretamente pelos objetos
	//e por elementos da propria classe
	public $par;	

	//não publicas
	//NÂO PODE ser acessada diretamente pelos objetos
	//serão acessadas somente pelos elementos da propria classe
	//a diferença será vista em HERANÇA
	protected $impar;
	private $primos;
	

	

}



$um = new Numeros();
$um->par = 12;
//$um->impar = 25;//Cannot access protected property Numeros::$impar in 
//$um->primos = 65;//Cannot access protected property Numeros::$impar in 
echo "<pre>";
var_dump($um);
echo "</pre>";

$dois = new Numeros();
$dois->par = 26;
echo "<pre>";
var_dump($dois);
echo "</pre>";


echo "<hr>";