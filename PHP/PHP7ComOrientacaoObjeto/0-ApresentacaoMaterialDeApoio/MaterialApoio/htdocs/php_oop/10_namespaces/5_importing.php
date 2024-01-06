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
class Teste1
{
	function __construct()
	{
		echo "Estou na Namespace Aluno/PHP<hr>";
	}
}
Namespace Aluno\MySql;
class Teste2
{
	function __construct()
	{
		echo "Estou na Namespace Aluno/MySql<hr>";
	}
}
#################################################
use \Aluno\Teste;
use  \Aluno\PHP\Teste1;
use \Aluno\Mysql\Teste2;

$a = new Teste;
$b = new Teste1;
$c = new Teste2;

