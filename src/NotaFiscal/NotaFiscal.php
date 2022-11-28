<?php


namespace Alura\DesignPattern\NotaFiscal;


use Alura\DesignPattern\ItemOrcamento;

class NotaFiscal
{
	public string $cnpjEmpresa;
	public string $razaoSocialEmpresa;
	public array $itens;
	public string $observacoes;
	public \DateTimeInterface $dataEmissao;
	public float $valorImpostos;
	
	public function valor(): float
	{
		return array_reduce(
			$this->itens,
			fn (float $valorAcumulado, ItemOrcamento $itemAtual) => $valorAcumulado + $itemAtual->valor,
			0
		);
	}
	
	public function __clone()
	{
		$this->dataEmissao = new \DateTimeImmutable();
	}
}