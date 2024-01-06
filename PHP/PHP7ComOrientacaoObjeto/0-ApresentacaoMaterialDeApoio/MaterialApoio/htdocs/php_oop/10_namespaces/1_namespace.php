<?php
Namespace Aluno;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno<br>";
	}
}
$a = new Teste;
Namespace Professor;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Professor<br>";
	}
}
$b = new Teste;