<?php

class Numeros
{
    const NUMERO_PI = 3.1416;
    public static $par;
    protected static $impar;
    public static $cont;
    private $primos;
    public static function estatico()
    {
        echo "\nMetodo Estatico\n";
    }
    public static function setImpar($valor)
    {
        //$this->impar = $valor; não existe um objeto para ser apontado pelo $this
        self::$impar = $valor; //isso seria como Numeros::impar mas precisa usar o $ por que caso contrário seria uma constante
    }
    public static function getImpar()
    {
        return self::$impar;
    }
    function __construct($valor)
    {
        $this->primos = $valor;
        self::$cont++;
    }
}

/* 

//para chamar a constante, nesse caso vai retornar o membro da classe Numeros, ou seja, seu valor, ele não pertence aos objetos e sim a classe, os objetos poderão acessa-lo
echo "membro da classe: " . Numeros::NUMERO_PI;
echo "\n\n";

$objeto = new Numeros();
echo "Tenta acessar o membro da classe por um objeto\n";
$objeto->par = 10;
var_dump($objeto); //Accessing static property Numeros::$par as non static retorna esse informe por que a propriedade é estatica e está sendo acessada por um objeto

echo "\n\n";
Numeros::$par = 20;
echo "Acessa o membro da classe usando a classe: " . Numeros::$par;

echo "\n\n";
echo "Propriedades do objeto\n";
$objeto2 = new Numeros();
var_dump($objeto2);

echo "Chamado pela classe:";
Numeros::estatico(); //um metodo não declarado como estatico sendo chamado diretamente pela classe gera lentidão no processamento
echo "Chamado pelo objeto:";
$objeto3 = new Numeros();
$objeto3->estatico();
echo PHP_EOL;

Numeros::setImpar(35);
echo Numeros::getImpar() . PHP_EOL; 

*/

$objeto4 = new Numeros(15); //a variavel primos da classe vai receber 15
var_dump($objeto4);
echo Numeros::$cont . PHP_EOL;
$objeto5 = new Numeros(16);
var_dump($objeto5);
echo Numeros::$cont . PHP_EOL;