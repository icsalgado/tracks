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
use \Aluno\Teste as T;
use  \Aluno\PHP\Teste as P;
use \Aluno\Mysql\Teste as My;

$a = new T;
$b = new P;
$c = new My;

