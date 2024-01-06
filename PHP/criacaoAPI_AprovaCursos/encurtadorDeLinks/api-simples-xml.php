<?php

$xml = new XMLWriter();
$xml->openMemory();
$xml->startDocument( '1.0' , 'UTF-8' );
$xml->startElement("encurtador");

#  Configura a saida do conteúdo para o formato XML
header( 'Content-type: text/xml' );


$camposObrigatorios = Array('url');
$erro = Array();
$retorno = Array();
	
	//Verifica se os campos obrigatórios estão preechidos
	for($i=0;$i<count($camposObrigatorios);$i++) {
		if(empty($_REQUEST[$camposObrigatorios[$i]])) {
			$erro[] = 'O campo '.$camposObrigatorios[$i].' é obrigatório!';
		}
	}

	//Se não houver erros
	if(empty($erro)) {
	
		//Rotina do sistema de encurtamento de links
		include_once('class/Redirecionar.php');
		$redirecionar = new Redirecionar();
		
		if(!empty($_REQUEST['personalizado']) && (strlen($_REQUEST['personalizado']) <= 7)) {
			if($redirecionar->retornaMaior($_REQUEST['personalizado']) != null) {
				$erro[] = 'Esse id personalizado já foi utilizado!';
			}
			else {
				$encurtado = $redirecionar->cadastraLink($_REQUEST['url'],$_REQUEST['personalizado']);
			}

		}
		else {
			$encurtado = $redirecionar->cadastraLink($_REQUEST['url']);
		}
	}
	
	//Retorno esperado pelo usuário
	if(!empty($encurtado)) {
		$xml->writeElement("encurtado", $encurtado);
	}
	
	//Erro caso haja
	if(!empty($erro)) {
	
	$xml->startElement("erros");
	
	for($i=0;$i<count($erro);$i++) {
		$xml->writeElement("erro", $erro[$i]);	
	}
	$xml->endElement();
	}
	
	$xml->endElement();

	# Imprime os dados armazenados
	print $xml->outputMemory(true);
?>