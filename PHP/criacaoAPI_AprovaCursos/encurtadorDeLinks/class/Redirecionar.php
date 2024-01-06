<?php

include_once("config.php");

class Redirecionar{

function Redirecionar() {
}


function retornaIDRAND() {
	$CaracteresAceitos = 'abcdefghijklmnopqrstuvxwyzABCDEFGHIJKLMNOPQRSTUVXWYZ1234567890';
	$max = strlen($CaracteresAceitos)-1;
	$password = null;
	for($i=0; $i < 7; $i++) {
		$password .= $CaracteresAceitos{mt_rand(0, $max)};
	}
	return $password;
}

function verificaLink($link,$cadastrar = true) {
	$link = addslashes($link);
	$sql = 'select id from 1c_redirecionamento where link = "'.$link.'"';

	
	conectaBanco();
	$limite = mysql_query($sql);
	if(mysql_num_rows($limite) > 0) {
		$resultado = mysql_fetch_array($limite);
		return $GLOBALS['enderecoInstalacao'].$resultado['id'];
	}
	elseif($cadastrar == true) {
		return $this->cadastraLink($link);
	}
	else {
		return false;
	}
}



function cadastraLink($link,$id = 'rand') {
	
	if($rand == 'rand') {
	$id = $this->retornaIDRAND();
		$temp = $this->retornaMaior($id);
		
		while($this->retornaMaior($id) != null) {
			$id = $this->retornaIDRAND();
		}
	}
	
	conectaBanco();
	$sql = 'insert into 1c_redirecionamento (id,link) values("'.$id.'","'.$link.'")';
	$limite = mysql_query($sql);

	return $GLOBALS['enderecoInstalacao'].$id;

	
}

function retornaMaior($id) {

	conectaBanco();
	$sql = 'select link from 1c_redirecionamento where id = "'.$id.'"';
	$limite = mysql_query($sql);
	$retorno = mysql_fetch_array($limite);

	return $retorno['link'];
}

}


?>