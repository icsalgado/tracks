<?php

$idade1 = 17; //essa variavel vai ser testada no resultado1
$idade2; //a ideia eh saber se eh nula ou indefinida e testar no resultado2

/**
 * o operador ?: vai atribuir 1(true) ao $resultado1 caso o retorno da condicao seja verdadera
 * se o retorno for falso vai atribuir o padrao indicado, nesse caso 'Menor'
 * a variavel $idade1 precisa estar definida
 */
$resultado1 = $idade1 >= 18 ?: 'Menor'; 

/**
 * o operador ?? atribui o valor da variavel $idade2 ao $resultado2 caso o retorno seja verdadeiro
 * se for falso vai atribuir o padrao indicado
 * a variavel $idade2 pode ser indefinida ou NULL
 */
$resultado2 = $idade2 ?? 'Nao definida';

echo $resultado1;
echo PHP_EOL;
echo PHP_EOL;

echo $resultado2;
echo PHP_EOL;