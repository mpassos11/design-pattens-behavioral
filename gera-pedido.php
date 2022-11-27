<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$orcamento = new Orcamento();
$orcamento->valor = $valorOrcamento;
$orcamento->quantidadeItens = $numeroDeItens;

$pedido = new Pedido();
$pedido->orcamento = $orcamento;
$pedido->dataFinalizacao = new \DateTimeImmutable();
$pedido->nomeCliente = $nomeCliente;

echo 'Criar pedido no banco de dados ' . PHP_EOL;
echo 'Envia e-mail para o cliente ' . PHP_EOL;
