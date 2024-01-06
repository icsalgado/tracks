<?php
class Numeros
{
	static public $cont;	
	private $primos;
	
	function __construct($valor)
	{
		$this->primos = $valor;
		self::$cont++;
	}
	function retornaCont()
	{
		return self::$cont;
	}
}


$a = new Numeros(15);
var_dump($a);
echo Numeros::$cont;
echo "<hr>";
$b = new Numeros(150);
var_dump($b);
echo Numeros::$cont;
echo "<hr>";
echo $a->retornaCont();
echo $b->retornaCont();