<?php


namespace Alura\DesignPattern;


class GerarPedido implements Command
{
	public string $nomeCliente;
	public int $numeroItens;
	public float $valorOrcamento;
	
	public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
	{
		$this->nomeCliente = $nomeCliente;
		$this->valorOrcamento = $valorOrcamento;
		$this->numeroItens = $numeroItens;
	}
	
	public function execute()
	{
		$orcamento = new Orcamento();
		$orcamento->valor = $this->valorOrcamento;
		$orcamento->quantidadeItens = $this->numeroItens;
		
		$pedido = new Pedido();
		$pedido->orcamento = $orcamento;
		$pedido->dataFinalizacao = new \DateTimeImmutable();
		$pedido->nomeCliente = $this->nomeCliente;
		
		echo 'Criar pedido no banco de dados ' . PHP_EOL;
		echo 'Envia e-mail para o cliente ' . PHP_EOL;
	}
}