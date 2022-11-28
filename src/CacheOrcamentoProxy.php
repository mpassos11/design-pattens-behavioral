<?php


namespace Alura\DesignPattern;


class CacheOrcamentoProxy extends Orcamento
{
	
	private float $valorCache = 0;
	private Orcamento $orcamento;
	
	public function __construct(Orcamento $orcamento)
	{
		$this->orcamento = $orcamento;
	}
	
	public function addItem(Orcavel $item)
	{
		throw new \DomainException('N�o � poss�vel adicionar um item ao or�amento cacheado');
	}
	
	public function valor(): float
	{
		if ($this->valorCache == 0) {
			$this->valorCache = $this->orcamento->valor();
		}
		
		return $this->valorCache;
	}
	
}