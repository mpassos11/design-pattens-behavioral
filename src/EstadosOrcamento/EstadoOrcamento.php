<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
	/**
	 * @throws \DomainException
	 */
	abstract public function calculaDescontoExtra(Orcamento $orcamento): float;
	
	public function aprova(Orcamento $orcamento)
	{
		throw new \DomainException('Este or�amento n�o pode ser aprovado');
	}
	
	public function reprova(Orcamento $orcamento)
	{
		throw new \DomainException('Este or�amento n�o pode ser aprovado');
	}
	
	public function finaliza(Orcamento $orcamento)
	{
		throw new \DomainException('Este or�amento n�o pode ser aprovado');
	}
}