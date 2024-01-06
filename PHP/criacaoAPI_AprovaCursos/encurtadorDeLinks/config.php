<?php
	
	$GLOBALS['enderecoInstalacao'] = 'http:localhost';
	
    function conectaBanco(){
		$hostname = 'localhost';
		$username = 'root';
		$senha = '';
		$banco = 'apitest';
	
		$db = mysql_connect($hostname, $username,$senha);
		$conexao = mysql_select_db($banco, $db);
  		return $conexao;
  	}

	str_replace('/','',$enderecoInstalacao,$GLOBALS['contaBarra']);
	$GLOBALS['contaBarra'] -= 2;

?>