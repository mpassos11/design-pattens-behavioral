<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
	public function calculaDescontoExtra(Orcamento $orcamento) : float
	{
		throw new \DomainException('Or�amentos reprovados n�o podem receber desconto extra');
	}
	
	public function finaliza(Orcamento $orcamento)
	{
		$orcamento->estadoAtual = new Finalizado();
	}
}