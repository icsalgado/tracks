<?php
include_once 'ContaCorrente.php';
class ContaConjunta extends ContaCorrente
{
	private $titular2;

	public function validar()
	{
		parent::validar();
		echo "Eu valido o 2o Titular<br>";
	}
	//Fatal error: Cannot override final method ContaCorrente::taxa()
	protected function taxa()
	{
		$this->saldo = $this->saldo - ($this->saldo * 0.10);
	}
}