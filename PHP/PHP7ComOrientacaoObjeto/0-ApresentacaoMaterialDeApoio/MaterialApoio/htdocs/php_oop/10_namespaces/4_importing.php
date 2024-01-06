<?php
Namespace Aluno;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno<hr>";
	}
}
Namespace Aluno\PHP;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno/PHP<hr>";
	}
}
Namespace Aluno\MySql;
class Teste
{
	function __construct()
	{
		echo "Estou na Namespace Aluno/MySql<hr>";
	}
}
#################################################
$a = new \Aluno\Teste;
$b = new \Aluno\PHP\Teste;
$c = new \Aluno\Mysql\Teste;

