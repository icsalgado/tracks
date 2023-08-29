<?php

$escola = "Treinaweb";
$curso = " PHP ";

var_dump($curso . $escola); //concatena duas strings

$string1 = "Formacao $curso na $escola\n"; //template string
echo $string1;//interpreta o conteudo das variaveis
$string3 = "Formacao {$curso} na {$escola}\n";
echo $string3;//interpreta o conteudo das variaveis
$string2 = 'Formacao $curso na $escola\n'; //micro otimizacao para processamento
echo $string2;//nao interpreta o conteudo da variavel com aspas simples nem a quebra de linha
