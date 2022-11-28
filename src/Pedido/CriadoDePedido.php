<?php


namespace Alura\DesignPattern\Pedido;


use Alura\DesignPattern\Orcamento;

class CriadoDePedido
{
	/** @var TemplatePedido[] */
	private array $templates = [];
	
	public function criaPedido(string $nomeCliente, string $dataFormatada, Orcamento $orcamento) : Pedido
	{
		$templatePedido = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
		$pedido = new Pedido();
		$pedido->orcamento = $orcamento;
		$pedido->templatePedido = $templatePedido;
		
		return $pedido;
	}
	
	public function gerarTemplatePedido(string $nomeCliente, string $dataFormatada): TemplatePedido
	{
		$hash = md5($nomeCliente . $dataFormatada);
		if (!array_key_exists($hash, $this->templates)) {
			$templatePedido = new TemplatePedido($nomeCliente, new \DateTimeImmutable($dataFormatada));
			$this->templates[$hash] = $templatePedido;
		}
		
		return $this->templates[$hash];
	}
}