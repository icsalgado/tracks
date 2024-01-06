<?php

class File
{
    protected $arquivo;
    protected $recurso;
    function __construct($arquivo) //aqui o $arquivo é um parâmetro
    {
        $this->arquivo = $arquivo; //this aponta para o objeto que terá uma propriedade arquivo e receberá o conteúdo da variável $arquivo
        /**
         * Vai testar se o arquivo existe, se não existir vai criar usando a variavel recurso e no modo w+ de escrita com ponteiro no inicio
         */
        if(!file_exists($arquivo)){
            //$recurso = fopen($arquivo, 'w+');
            $this->abrir('w+');
            $this->fechar();
        }
    }
    protected function abrir($modo)
    {
        /**
         * Fica responsável por abrir, criar, etc, tudo que envolve a função nativa fopen
         * caso precise de manutenção fica em apenas um lugar
         */
        $this->recurso = fopen($this->arquivo,$modo);
    }
    protected function fechar()
    {
        fclose($this->recurso);
    }
    public function escrever($texto)
    {
        $this->abrir('a+'); //não é responsavel de abrir
        fwrite($this->recurso,$texto); //essa é a responsabilidade do metodo
        $this->fechar(); //não é repoinsavel por fechar
    }
    public function ler()
    {
        return file_get_contents($this->arquivo); // essa função do PHP já abre, le e fecha o arquivo
    }
    function mover($target) //target vai ser um novo nome ou um novo caminho
    {
        rename($this->arquivo,$target);
        $this->arquivo=$target;//atualiza o conteudo da propriedade arquivo
    }
    function excluir()
    {
        unlink($this->arquivo);//função nativa para remover
    }


    /* function __destruct()
    {
        $this->fechar();
    } */
}