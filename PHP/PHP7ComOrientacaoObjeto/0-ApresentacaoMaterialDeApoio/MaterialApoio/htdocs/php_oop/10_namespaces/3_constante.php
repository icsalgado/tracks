<?php
Namespace Aluno;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno<hr>";
	}
}
echo __NAMESPACE__ . "<br>";
$a = new Teste;

Namespace Aluno\PHP;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno/PHP<hr>";
	}
}
echo __NAMESPACE__ . "<br>";
$b = new Teste;

Namespace Aluno\MySql;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno/MySql<hr>";
	}
}
echo __NAMESPACE__ . "<br>";
$c = new Teste;