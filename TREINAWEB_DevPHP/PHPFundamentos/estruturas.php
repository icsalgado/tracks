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

$variavelControle = 0;

while($variavelControle < 10){
    echo $variavelControle, " ";
    $variavelControle++;
}

echo "\n";

for($i  = 0; $i < 10; $i++){
    echo $i, " ";
}

echo "\n";

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as $valor){
    echo $valor, " ";
}

echo "\n";

$curso = [
    "PHP" => [
        "nome_curso" => "PHPfundamentos", 
        "versao" => 7.4, 
        "carga_horaria" => 40, 
        "status" => true
    ],
    "Java" => [
        "nome_curso" => "Javafundamentos", 
        "versao" => 6, 
        "carga_horaria" => 40, 
        "status" => false
    ],
];

foreach ($curso as $linguagem){
    echo $linguagem['nome_curso'];
    echo " - ", $linguagem['status'];
    echo "\n";
}

echo "\n";

foreach ($curso as $linguagem){
    echo $linguagem['nome_curso'];
    if($linguagem['status'] == 1){
        continue;
    }
    echo " - ", $linguagem['status'];
    echo "\n";
}

echo "\n";

foreach ($curso as $linguagem){
    echo $linguagem['nome_curso'];
    if($linguagem['status'] == 1){
        break;
    }
    echo " - ", $linguagem['status'];
    echo "\n";
}

echo "\n";
