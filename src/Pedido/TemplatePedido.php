<?php


namespace Alura\DesignPattern\Pedido;


class TemplatePedido
{
	private string $nomeCliente;
	private \DateTimeInterface $dataFinalizacao;
	
	public function __construct(string $nomeCliente, \DateTimeImmutable $dataFinalizacao)
	{
		$this->nomeCliente = $nomeCliente;
		$this->dataFinalizacao = $dataFinalizacao;
	}
	
	/**
	 * @return string
	 */
	public function getNomeCliente(): string
	{
		return $this->nomeCliente;
	}
	
	/**
	 * @return \DateTimeImmutable|\DateTimeInterface
	 */
	public function getDataFinalizacao() : \DateTimeImmutable
	{
		return $this->dataFinalizacao;
	}
	
	
}