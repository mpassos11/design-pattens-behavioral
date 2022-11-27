<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostoCom2Aliquotas
{
	public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
	{
		return $orcamento->valor > 500;
	}
	
	public function calculaTaxaMaxima(Orcamento $orcamento): float
	{
		return $orcamento->valor * 0.03;
	}
	
	public function calculaTaxaMinima(Orcamento $orcamento): float
	{
		return $orcamento->valor * 0.02;
	}
}