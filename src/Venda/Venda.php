<?php


namespace Alura\DesignPattern\Venda;


abstract class Venda
{
	private \DateTimeInterface $dataRealizacao;
	
	public function __construct(\DateTimeInterface $dataRealizacao)
	{
		$this->dataRealizacao = $dataRealizacao;
	}
}