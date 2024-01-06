<?php
include_once 'Conta.php';
class ContaPoupanca extends Conta
{
	protected $dataAniversario;

	protected function setSaldo($valor)
	{
		//fará o saque levanto em conta o aniversario da Conta
		if($valor < 0 && $this->saldo >= -$valor)
			$this->saldo += $valor;
		if($valor > 0)
			$this->saldo += $valor;
	}
	protected function taxa()
	{
		$this->saldo = $this->saldo - ($this->saldo * 0.01);
	}
}
