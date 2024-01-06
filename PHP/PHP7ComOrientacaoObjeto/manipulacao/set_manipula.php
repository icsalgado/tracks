<?php

$arquivo = 'log1.txt';

//vai criar
$retorno = fopen('log1.txt', 'a+'); //arquivo a ser manipulado e como será acessado, retorna um resource.
//vai escrever
fwrite($retorno, "PHP Poo IMPACTA\n");

//o php já fecha o arquivo por padrão mas é uma boa prática fecha-lo
fclose($retorno);

var_dump($retorno);
