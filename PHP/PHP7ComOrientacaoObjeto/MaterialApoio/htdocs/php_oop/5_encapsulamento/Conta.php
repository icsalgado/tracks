<?php
include_once 'ContaInterface.php';

abstract class Conta implements ContaInterface
{
	private $agencia;
	private $conta;
	private $titular;
	protected $saldo=1000;

	//lass Conta contains 1 abstract method and must therefore be declared abstract
	abstract protected function setSaldo($valor);
	abstract protected function taxa();

	protected function getSaldo()
	{
		return $this->saldo;
	}

	public function movimentar($valor)
	{
		$this->setSaldo($valor);
	}
	public function verSaldo()
	{
		return $this->getSaldo();
	}
	public function validacao()
	{
		echo "Eu valido o Agencia, Conta , Titular e Saldo<br>";
	}
}