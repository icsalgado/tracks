<?php


$arq = 'log1.txt';
$a = fopen($arq, 'a+');
fwrite($a, "Impacta<br>\n");var_dump($a);
fclose($a);

