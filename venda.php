<?php

use Alura\DesignPattern\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

$fabricaVenda = new VendaServicoFactory('Matheus Passos');
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);