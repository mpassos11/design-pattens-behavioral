<?php


namespace Alura\DesignPattern;


class GerarPedido
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
	
	/**
	 * @return string
	 */
	public function getNomeCliente(): string
	{
		return $this->nomeCliente;
	}
	
	/**
	 * @return int
	 */
	public function getNumeroItens(): int
	{
		return $this->numeroItens;
	}
	
	/**
	 * @return float
	 */
	public function getValorOrcamento(): float
	{
		return $this->valorOrcamento;
	}
}