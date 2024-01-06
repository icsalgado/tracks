<?php
//classe Mae
//Classe Raiz
//Classe generica - generalização
//SuperClasse
class Conta
{
	private $agencia;
	private $conta;
	private $titular;
	protected $saldo=1000;

	protected function setSaldo($valor)
	{
		if($valor < 0 && $this->saldo >= -$valor)
			$this->saldo += $valor;
		if($valor > 0)
			$this->saldo += $valor;
	}

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
	public function validar()
	{
		echo "Eu valido o Agencia, Conta , Titular e Saldo<br>";
	}
}