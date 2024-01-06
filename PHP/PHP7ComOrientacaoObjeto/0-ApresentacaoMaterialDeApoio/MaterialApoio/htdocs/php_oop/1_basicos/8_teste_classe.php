<?php

include 'class/File.php';

$arq = new File('log22.php');
$arq->excluir();

echo "<hr>";

$arq2 = new File('teste/log33.php');
$arq2->excluir();
