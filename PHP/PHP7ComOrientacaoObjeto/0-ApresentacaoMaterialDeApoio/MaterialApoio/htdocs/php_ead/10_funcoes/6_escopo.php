<?php
$nome= "Edu";//escopo global

$idade = 25;
echo $idade;

function escopo()
{

	$cep = "04404-050";
	$idade = 52;
	
	$nome = "Renata";
	echo $nome," - ",$idade,"<br>";
	echo $GLOBALS['nome'];
}
escopo();
/*
echo "<br>";
echo $nome;
echo "<br>";
echo $GLOBALS['nome'];
echo "<br>";
*/
?>