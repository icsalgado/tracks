<?php
class File
{

	protected $arquivo;
	protected $recurso;

	function __construct($arquivo)
	{
		$this->arquivo = $arquivo;
		if(!file_exists($arquivo)){
			//$a = fopen($arquivo,'w+');
			$this->abrir('w+');
			$this->fechar();
		}
	}
	protected function abrir($modo)
	{
		$this->recurso = fopen($this->arquivo,$modo);
	}
	protected function fechar()
	{
		fclose($this->recurso);
	}
	function escrever($texto)
	{
		$this->abrir('a+');
		fwrite($this->recurso,$texto);
		$this->fechar();
	}
	function ler()
	{
		return file_get_contents($this->arquivo);
	}
	function mover($target)
	{
		rename($this->arquivo,$target);
		$this->arquivo=$target;
	}
	function excluir()
	{
		unlink($this->arquivo);
	}
	
}