<?php

include 'class/File.php';

$arquivoObjeto = new File('log2.txt');
$arquivoObjeto->escrever("teste\n");
echo $arquivoObjeto->ler(); //deve ser usado para o retorno do metodo

$arquivoObjeto2 = new File('log3.txt');
$arquivoObjeto2->mover('log3emeio.txt');//troca o nome do arquivo

$arquivoObjeto3 = new File('log4.txt');
$arquivoObjeto3->mover('teste/log4.txt');//move para outro diretorio

$arquivoObjeto4 = new File('log5.txt');
$arquivoObjeto4->excluir();//remove o arquivo

var_dump($arquivoObjeto);
