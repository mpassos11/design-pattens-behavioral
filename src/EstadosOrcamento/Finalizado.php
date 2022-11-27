<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
	public function calculaDescontoExtra(Orcamento $orcamento) : float
	{
		throw new \DomainException('Or�amentos finalizados n�o podem receber desconto extra');
	}
}