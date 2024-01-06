<?php
//Classe Especifica
//subClasse
include_once 'Conta.php';
class ContaCorrente extends Conta
{
	protected $limite = 1000;

	//overriding - sobrescrita
	protected function setSaldo($valor)
	{
		if($valor < 0 && $this->saldo >= -$valor-$this->limite)
			$this->saldo += $valor;
		if($valor > 0)
			$this->saldo += $valor;
	}
	protected function taxa()
	{
		$this->saldo = $this->saldo - ($this->saldo * 0.03);
	}
	//sobrescrita
	public function validar()
	{
		echo "Eu valido o limite<br>";
	}
}
