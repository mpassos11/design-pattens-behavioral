<?php

use Alura\DesignPattern\Pedido\CriadoDePedido;
use Alura\DesignPattern\Pedido\TemplatePedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido\Pedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedidos = new CriadoDePedido();

for ($i = 0; $i < 10000; $i++) {
	$orcamento = new Orcamento();
	$pedido = $criadorPedidos->criaPedido('Matheus Passos', date('Y-m-d'), $orcamento);
	$pedidos[] = $pedido;
}

echo memory_get_peak_usage();
