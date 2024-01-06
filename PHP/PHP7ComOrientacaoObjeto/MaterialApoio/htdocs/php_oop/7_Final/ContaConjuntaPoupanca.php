<?php
include_once 'ContaPoupanca.php';
//Class ContaConjuntaPoupanca may not inherit from final class (ContaPoupanca)
class ContaConjuntaPoupanca extends ContaPoupanca
{
	private $titular2;

	public function validar()
	{
		parent::validar();
		echo "Eu valido o 2o Titular<br>";
	}
}