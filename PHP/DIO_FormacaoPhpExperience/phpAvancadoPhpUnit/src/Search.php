<?php

namespace Icsalgado\PhpAvancado;

class Search
{
    private $url = "https://viacep.com.br/ws/"; 

    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode); //tudo que não for numero vai ser removido

        $get = file_get_contents(($this->url . $zipCode . "/json"));

        return (array) json_decode($get);
    }
}
