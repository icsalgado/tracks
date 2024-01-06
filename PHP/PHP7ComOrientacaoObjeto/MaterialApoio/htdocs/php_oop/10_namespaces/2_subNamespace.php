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

Namespace Aluno\PHP;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno/PHP<br>";
	}
}
$b = new Teste;

Namespace Aluno\MySql;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno/MySql<br>";
	}
}
$c = new Teste;