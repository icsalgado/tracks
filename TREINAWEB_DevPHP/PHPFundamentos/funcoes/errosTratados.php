<?php

error_reporting(E_ALL);

$divisor = 0;

try{
    if($divisor === 0){
        throw new Exception("Divisão por zero\n", 1);
    }
    $valor = 100/$divisor;
} catch (\Throwable $th){
    echo $th->getmessage();
}
 