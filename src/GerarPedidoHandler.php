<?php


namespace Alura\DesignPattern;


use SplObserver;

class GerarPedidoHandler implements \SplSubject
{
	/**
	 * @var SplObserver[]
	 */
	private array $acoesAoGerarPedido = [];
	public Pedido $pedido;
	
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
		
		$this->pedido = $pedido;
		$this->notify();
	}
	
	public function attach(SplObserver $observer)
	{
		$this->acoesAoGerarPedido[] = $observer;
	}
	
	public function detach(SplObserver $observer)
	{
		// TODO: Implement detach() method.
	}
	
	public function notify()
	{
		foreach ($this->acoesAoGerarPedido as $acao) {
			$acao->update($this);
		}
	}
}