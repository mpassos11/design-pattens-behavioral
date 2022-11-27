<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

class Ikcv extends ImpostoCom2Aliquotas
{
	public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
	{
		return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
	}
	
	public function calculaTaxaMaxima(Orcamento $orcamento): float
	{
		return $orcamento->valor * 0.04;
	}
	
	public function calculaTaxaMinima(Orcamento $orcamento): float
	{
		return $orcamento->valor * 0.025;
	}
}