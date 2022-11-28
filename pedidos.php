<?php

use Alura\DesignPattern\TemplatePedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require 'vendor/autoload.php';

$pedidos = [];

$dadosPedido = new TemplatePedido(md5('a'), new DateTimeImmutable());

for ($i = 0; $i < 10000; $i++) {
	$pedido = new Pedido();
	$pedido->orcamento = new Orcamento();
	$pedido->templatePedido = $dadosPedido;
	
	$pedidos[] = $pedido;
}

echo memory_get_peak_usage();
