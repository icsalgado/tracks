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
	/*
		Polimorfismo - muitas formas
		Todas as filhas terão o metodo taxa() - quem definiu foi a mae
		As classes filhas terão FORMAS diferentes de calcular a taxa
	*/
	final protected function taxa()
	{
		$this->saldo = $this->saldo - ($this->saldo * 0.03);
	}
	//sobrescrita
	public function validar()
	{
		parent::validar();
		echo "Eu valido o limite<br>";
	}
	/*
	chamar dois metodos ocm o mesmo nome a partir de um mesmo elemento
	public function validando()
	{
		parent::validar();
		//$this->validar();
		self::validar();
	}
	*/
}
