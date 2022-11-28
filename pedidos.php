<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require 'vendor/autoload.php';

$pedidos = [];
$hoje = new DateTimeImmutable();
for ($i = 0; $i < 10000; $i++) {
	$pedido = new Pedido();
	$pedido->orcamento = new Orcamento();
	$pedido->nomeCliente = md5((string) rand(1, 100000));
	$pedido->dataFinalizacao = $hoje;
	
	$pedidos[] = $pedido;
}

echo memory_get_peak_usage();
