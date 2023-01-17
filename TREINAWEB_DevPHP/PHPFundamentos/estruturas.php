<?php

//condicional

$variavelA = 60;
$variavelB = 50;

if($variavelA > $variavelB){
    echo "Variavel A e maior que a B \n";
}elseif($variavelA == $variavelB){
    echo "As variaveis sao iguais \n";
}else{
    echo "Variavel B e maior que a A \n";
}

if($variavelA > $variavelB) //o bloco pode ser usado sem as {} se for apenas uma linha de código mas não é recomendado
    echo "Variavel A e maior que a B \n";
else if($variavelA == $variavelB) //else if pode ser usado separado mas é recomendado o uso do elseif
    echo "As variaveis sao iguais \n";
else
    echo "Variavel B e maior que a A \n";

switch($variavelA){
    case 20:
        echo "A variavel é 20 \n";
        break;
    case 30:
        echo "A variavel é 30 \n";
        break;
    case $variavelA > 50:
    case 60:
    case 70:
        echo "50, 60 ou 70 \n";
        break;
    default:
        echo "Não é 20 nem 30 \n";
}