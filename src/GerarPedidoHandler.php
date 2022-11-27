<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

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
		
		$pedidoRepository = new CriarPedidoNoBanco();
		$gerarLogPedido = new LogGerarPedido();
		$enviarEmailPedido = new EnviarPedidoPorEmail();
		
		$pedidoRepository->executaAcao($pedido);
		$gerarLogPedido->executaAcao($pedido);
		$enviarEmailPedido->executaAcao($pedido);
	}
}