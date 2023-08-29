<?php

function f1()
{
    echo "antes da excecao\n\n";
}

function f2($int)
{
    if(!is_int($int))
    {
        throw new Exception("Não é um tipo esperado");
    }else
    {
        echo "F2 esta na excecao\n\n";
    }
}

function f3()
{
    echo "Depois da excecao\n\n";
}

f1();
f2(
    int: 5
); //php8
f3();