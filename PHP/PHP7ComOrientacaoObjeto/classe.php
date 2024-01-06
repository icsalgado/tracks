<?php

/**
 * Sem usar PSRs
 * visao basica de uma classe com atributos
 */

class Numeros
{
    //propriedades
    public $par;
    public $impar; //visibilidade pode ser acessada diretamente pelos objetos e por elementos da própria classe

    //INTRO - 6
    //public $primos;
    protected $primos; //não pode ser acessa diretamente pelos objetos
    //public $compostos;
    private $compostos;

    //INTRO - 4
    public function __construct()
    {
        echo "Metodo construtor foi chamado";
    }  

    //INTRO - 5
    public function __destruct()
    {
        echo "Destruido";
        echo PHP_EOL;
    }

    //INTRO - 3
    public function teste()
    {
        return "metodo teste";
    }

    //INTRO - 7 e 8
    public function setPrimos($valor)
    {
        //Verificação para numero primo, o correto seria ter uma função para esse teste, aplicando o conceito de responsábilidade única para o metodo
        for ($divisor = 2; $divisor < $valor/2; $divisor++){ 
            if ($valor % $divisor == 0){
                die;
            }else{
                $this->primos = $valor;
            }
        } 
    }

    public function getPrimos()
    {
        return $this->primos;
    }
}

$primeiroNumero = new Numeros();

/* INTRO - 1 e 2
$primeiroNumero->par = 2;
$primeiroNumero->impar = 5;
var_dump($primeiroNumero);

echo 'A variavel eh do tipo: ' . gettype($primeiroNumero); //funcao nativa do php para pegar o tipo
echo PHP_EOL;
*/

/* INTRO - 3 e 4*/
echo PHP_EOL;
echo $primeiroNumero->teste(); //imprime a mensagem, um metodo nunca imprime, ele retorna alguma coisa
echo PHP_EOL;

//unset($primeiroNumero); //aqui para destruir a variavel antes do final do script

/* INTRO - 6 */
/*Erro protected
$testeErro = new Numeros();
$testeErro->primos = 7; //vai estourar o erro de visibilidade para atributo protected
*/
/*Erro private
$testeErro = new Numeros();
$testeErro->compostos = 4; //vai estourar o erro de visibilidade para atributo private
*/

/*INTRO - 7 */
echo PHP_EOL;
$numeroSete = new Numeros();
$numeroSete->setPrimos(20); 
echo PHP_EOL;
echo "valor atribuido na variavel = " . $numeroSete->getPrimos();
echo PHP_EOL;
var_dump($numeroSete);
echo PHP_EOL;

/* INTRO - 5 */
echo "________"; //para ver onde o destrutor vai entrar
echo PHP_EOL;