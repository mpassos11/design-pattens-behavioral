<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\GerarPedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedido->execute();
