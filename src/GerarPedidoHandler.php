<?php


namespace Alura\DesignPattern;


class GerarPedidoHandler
{
	public function __construct(/*PedidoRepository, MailService...*/)
	{
	}
	
	public function execute(GerarPedido $gerarPedido)
	{
		$orcamento = new Orcamento();
		$orcamento->valor = $gerarPedido->getValorOrcamento();
		$orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
		
		$pedido = new Pedido();
		$pedido->orcamento = $orcamento;
		$pedido->dataFinalizacao = new \DateTimeImmutable();
		$pedido->nomeCliente = $gerarPedido->getNomeCliente();
		
		// PedidoRepository
		echo 'Criar pedido no banco de dados ' . PHP_EOL;
		
		// MailService
		echo 'Envia e-mail para o cliente ' . PHP_EOL;
		
		// Log
		echo 'Gerar log de criação de pedido ' . PHP_EOL;
	}
}