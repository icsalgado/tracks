<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*
//array_unshift - Adiciona um ou mais elementos no início de um array 
$cesta = array("laranja", "banana");
var_dump($cesta);
echo "<hr>";
array_unshift($cesta, "melancia", "morango");
var_dump($cesta);
echo "<hr>";
*/
/* 
########################################################################
array_shift() retira o primeiro elemento de array e o retorna, diminuindo array em um elemento e movendo todos os outros elementos para trás. Todas as chaves numéricas alteradas para começar a contar a de 0 (zero), enquanto chaves string permanecerao inalteradas. Se array estiver vazio (ou se nao for um array), o valor NULL é retornado. 
*/
/*
$cesta = array("laranja", "banana", "melancia", "morango");
$fruta= array_shift($cesta);
var_dump($cesta);
echo "<hr>";
echo $fruta;
echo "<hr>";
*/
/*
#################################################################
array_pop() retira e retorna o último elemento de array, diminuindo array em um elemento. Se array estiver vazio (ou se nao for um array), o valor NULL é retornado. 
*/
/*
$cesta = array("laranja", "banana", "melancia", "morango");
$fruta = array_pop($cesta);
var_dump($cesta);
echo "<hr>";
echo $fruta;
echo "<hr>";
*/
###############################################################
/*
array_push() trata array como uma pilha, e adiciona as variáveis passadas como argumentos no final de array. O comprimento de array aumenta de acordo com o número de variáveis adicionadas. Tem o mesmo efeito de: 
$array[] = $var;
*/
/*
$cesta = array("laranja", "morango");
array_push($cesta, "melancia", "batata");
var_dump($cesta);
*/
/*
Nota: Se voce usar array_push() para adicionar um elemento na array, é melhor usar $array[] = porque deste jeito nao há uma chamada a uma funçao. 
Nota: array_push() irá emitir um aviso se o primeiro argumento nao for um array. isto é diferente do funcionamento de $var[] aonde uma nova matriz é criada. 
############################################################
array_sum - Calcula a soma dos elementos de um array - INTEIRO OU REAL
*/
/*
$a = array(2, 4, 6, 8);
echo "soma(a) = ".array_sum($a)."\n";
echo "<br>";
$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "soma(b) = ".array_sum($b)."\n";
*/
#################################################################



##############################################################    
/*    array_key_exists
(PHP 4 >= 4.0.7, PHP 5)array_key_exists - Verifica se uma chave ou índice existe em um array
*/

$cursos['livre']="PHP";
$cursos['superior']="Sistemas de Informação";
$cursos['pos']="Engenharia de softawre";
/*
if(array_key_exists('livre',$cursos)){
    echo "Tem livre";	
}
if(array_key_exists('Livre',$cursos)){//sensitive case
    echo "Tem Livre";	
}
echo "<hr>";
*/
/*
######################################################
in_array - Verifica se um valor existe em um array
*/
/*
$carros = array("HRV", "JIMMY",  "TORO"); 
if (in_array("JIMMY", $carros)) { 
    echo "Tem JIMMY";
}
if (in_array("hrv", $carros)) { 
    echo "Tem hrv";
}
 */
###################################################3
//array_reverse

$school = array_reverse($cursos);
var_dump($cursos);
var_dump($school);
/**/
?>






</body>
</html>