<?php
class Mae
{
	public function semSegredo()
	{
		echo "Isto todos podem saber<br>";
	}
	protected function segredoFamiliar()
	{
		echo "Isto somente eu e minhas filhas temos acesso<br>";
	}
	private function meuSegredo()
	{
		echo "Isto somente eu sei<br>";
	}
	/*
	public function contaTudo()
	{
		$this->segredoFamiliar();
		self::meuSegredo();
	}
	*/
}
##############################
class Filha extends Mae
{
	public function contaTudo()
	{
		$this->segredoFamiliar();
		self::meuSegredo();
	}
}

$filha = new Filha();
$filha->semSegredo();
//$filha->segredoFamiliar();
//$filha->meuSegredo();
$filha->contaTudo();