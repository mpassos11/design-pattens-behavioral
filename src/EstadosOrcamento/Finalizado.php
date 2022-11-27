<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
	public function calculaDescontoExtra(Orcamento $orcamento) : float
	{
		throw new \DomainException('Orçamentos finalizados não podem receber desconto extra');
	}
}