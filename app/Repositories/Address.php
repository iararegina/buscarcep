<?php

namespace App\Repositories;
class Address {

    public $logradouro;
    public $bairro;
    public $uf;
    
    public function get_addres($cep){
        //dd($cep);
        $cep = preg_replace("/[^0-9]/", "", $cep);
       //faltava a barra entre"ws" e "$cep"
       $url = "http://viacep.com.br/ws/$cep/xml/";
        
       $xml = simplexml_load_file($url, $Address = "SimpleXMLElement");

       return $xml;
    }

    }

?>