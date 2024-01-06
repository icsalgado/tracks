<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
/*
LOCAIS NA MEMÓRIA EM QUE PODEMOS ARMAZENAR INFORMAÇÕES
SÃO IGUAIS A VARIÁVEIS, MAS NÃO PODEM TER O SEU CONTEUDO
ALTERADO DURANTE A EXECUÇÃO DO CÓDIGO
POR PADRÃO USAR LETRAS MAIUSCULAS
NÃO SÃO PRECEDIDAS POR $
*/

define('CURSO','php');
define('B',"<br>");
define('R',"<hr>");//FALSE é o valor padrao - pode ser omitido
echo CURSO;
echo B;
echo curso;
echo R;

define('USUARIO','Marcia',TRUE);
echo Usuario;

#########################################
echo R;
//php 7
define('ALUNOS',['edu','ana','Eva','Ivo']);
echo ALUNOS[2];


###########################
ECHO R;
define('CURSO','MySql');
?>
</body>
</html>