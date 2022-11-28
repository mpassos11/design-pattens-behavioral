<?php

use Alura\DesignPattern\DadosPedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require 'vendor/autoload.php';

$pedidos = [];

$dadosPedido = new DadosPedido();
$dadosPedido->dataFinalizacao = new DateTimeImmutable();
$dadosPedido->nomeCliente = md5('a');

for ($i = 0; $i < 10000; $i++) {
	$pedido = new Pedido();
	$pedido->orcamento = new Orcamento();
	$pedido->dadosPedido = $dadosPedido;
	
	$pedidos[] = $pedido;
}

echo memory_get_peak_usage();
