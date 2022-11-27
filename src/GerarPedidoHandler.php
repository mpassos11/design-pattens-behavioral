<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
	/**
	 * @var AcaoAposGerarPedido[]
	 */
	private array $acoesAoGerarPedido = [];
	
	public function __construct(/*PedidoRepository, MailService...*/)
	{
	}
	
	public function addAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
	{
		$this->acoesAoGerarPedido[] = $acao;
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
		
		foreach ($this->acoesAoGerarPedido as $acao) {
			$acao->executaAcao($pedido);
		}
	}
}