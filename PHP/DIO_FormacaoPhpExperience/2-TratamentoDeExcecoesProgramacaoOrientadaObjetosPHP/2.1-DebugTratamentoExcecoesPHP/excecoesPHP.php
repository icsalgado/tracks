<?php

//RangeException
function divisao($dividendo, $divisor)
{
    try //vai tetnar fazer o bloco
    {
        if($divisor == 0)
        {
            throw new RangeException("Divisão por zero não é possivel");
        }
    
        $resultado = $dividendo/$divisor;

        echo "Resultado: ".$resultado;
    }catch(Exception $e){ //pegando a exceção, no php 8 o $e pode ser omitido
        echo $e->getMessage();//pega a mensagem, no php8 basta o echo "mensagem do erro"
    }
    finally{
        echo "\ntratando exceção\n";//é opcional e mosta que passou pelo tratamento, sempre vai ser exibido
    }
}

//dispara a exceção
divisao(10,0);
//não dispara
//divisao(10,2);