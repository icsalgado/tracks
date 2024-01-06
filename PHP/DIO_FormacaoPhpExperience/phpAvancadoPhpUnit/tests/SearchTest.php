<?php

use PHPUnit\Framework\TestCase;
use \Icsalgado\PhpAvancado\Search;

/*
class SearchTest extends TestCase
{
    //
    public function testGetAddressFromZipcodeDefaultUsage()
    {
        $resultado = "ok1";

        $this->assertEquals("ok", $resultado);
    }
}
*/

class SearchTest extends TestCase
{
    //
    public function testGetAddressFromZipcodeDefaultUsage()
    {
        $resultado = new Search;

        $resultado = $resultado->GetAddressFromZipcode('03624010');

        $esperado = [
            "cep" => "03624-010",
            "logradouro" => "Rua Luís Asson",
            "complemento" => "",
            "bairro" => "Vila Buenos Aires",
            "localidade" => "São Paulo",
            "uf" => "SP",
            "ibge" => "3550308",
            "gia" => "1004",
            "ddd" => "11",
            "siafi" => "7107"
        ];
        
        $this->assertEquals($esperado, $resultado);
    }
}