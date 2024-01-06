<?php

header ('Content-type: application/json; charset=utf-8');

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
		$maior = $redirecionar->retornaMaior($_REQUEST['personalizado']);
			if($maior != null) {
				if($maior == $_REQUEST['url']) {
					$encurtado = $GLOBALS['enderecoInstalacao'].$_REQUEST['personalizado'];
				}
				else {
					$erro[] = 'Esse id personalizado já foi utilizado!';
				}
			}
			else {
			
			$link = $redirecionar->verificaLink($_REQUEST['url'],false);
			
				if($link != false) {
					$erro[] = 'Infelizmente já existe esse link cadastrado, segue como ficou encurtado.';
					$encurtado = $link;
					
				}
				else {
					$encurtado = $redirecionar->cadastraLink($_REQUEST['url'],$_REQUEST['personalizado']);
				}
			}

		}
		else {
			$encurtado = $redirecionar->verificaLink($_REQUEST['url']);
		}
	}
	
	
	//Retorno esperado pelo usuário
	if(!empty($encurtado)) {
		$retorno['encurtado'] = $encurtado;
	}
	
	//Erro caso haja
	if(!empty($erro)) {
		$retorno['erro'] = $erro;
	}
	

	//Codificação do Array $retorno em JSON;
	$resposta = json_encode($retorno);


	//Rotina para retornar os resultados de forma legível	
	
	$resultado = Array('á','à','â','ã','ä','Á','À','Â','Ã','Ä',
	'é','è','ê','ê','É','È','Ê','Ë','í','ì','î','ï','Í','Ì','Î',
	'Ï','ó','ò','ô','õ','ö','Ó','Ò','Ô','Õ','Ö','ú','ù','û','ü',
	'Ú','Ù','Û','ç','Ç','ñ','Ñ','&','‘','/');

	$valor = Array('\u00e1','\u00e0','\u00e2','\u00e3','\u00e4','\u00c1',
	'\u00c0','\u00c2','\u00c3','\u00c4','\u00e9','\u00e8','\u00ea',
	'\u00ea','\u00c9','\u00c8','\u00ca','\u00cb','\u00ed','\u00ec',
	'\u00ee','\u00ef','\u00cd','\u00cc','\u00ce','\u00cf','\u00f3',
	'\u00f2','\u00f4','\u00f5','\u00f6','\u00d3','\u00d2','\u00d4',
	'\u00d5','\u00d6','\u00fa','\u00f9','\u00fb','\u00fc','\u00da',
	'\u00d9','\u00db','\u00e7','\u00c7','\u00f1','\u00d1','\u0026',
	'\u0027','\/');

	echo (str_replace($valor,$resultado,$resposta));
?>