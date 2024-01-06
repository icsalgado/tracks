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



$um = new Numeros();
$um->setImpar(25);
echo $um->getImpar();
echo "<pre>";
var_dump($um);
echo "</pre>";

$dois = new Numeros();
$dois->setImpar(67);
echo $dois->getImpar();
echo "<pre>";
var_dump($dois);
echo "</pre>";


echo "<hr>";