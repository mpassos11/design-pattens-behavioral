<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

abstract class ImpostoCom2Aliquotas extends Imposto
{
	
	public function realizaCalculoEspecifico(Orcamento $orcamento): float
	{
		if ($this->deveAplicarTaxaMaxima($orcamento)) {
			return $this->calculaTaxaMaxima($orcamento);
		}
		
		return $this->calculaTaxaMinima($orcamento);
	}
	
	abstract public function deveAplicarTaxaMaxima(Orcamento $orcamento) : bool;
	abstract public function calculaTaxaMaxima(Orcamento $orcamento) : float;
	abstract public function calculaTaxaMinima(Orcamento $orcamento) : float;
}
