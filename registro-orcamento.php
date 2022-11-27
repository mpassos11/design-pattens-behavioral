<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactPHPHttpAdapater;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

//$registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter());
$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapater());
$registroOrcamento->registrar(new Orcamento());
