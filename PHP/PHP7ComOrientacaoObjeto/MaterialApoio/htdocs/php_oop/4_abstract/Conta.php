<?php
//classe Mae
//Classe Raiz
//Classe generica - generalização
//SuperClasse
//Classe abstract não pode ser instanciada
//Pode somente ser extendida - somente herdadda
//Não precisa necessariamente ter um método abstract, porem
//se uma classe tiver um metodo abstract ela deverá ser declarada obrigatoriamente como abstract
abstract class Conta
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
	public function validar()
	{
		echo "Eu valido o Agencia, Conta , Titular e Saldo<br>";
	}
}