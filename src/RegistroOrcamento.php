<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Http\HttpAdapter;

class RegistroOrcamento
{
	private HttpAdapter $httpAdapter;
	
	public function __construct(HttpAdapter $httpAdapter)
	{
		$this->httpAdapter = $httpAdapter;
	}
	
	public function registrar(Orcamento $orcamento) : void
	{
		if (!$orcamento->estadoAtual instanceof Finalizado) {
			throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API');
		}
		
		$this->httpAdapter->post("http://api.registrar.orcamento", [
			'valor' => $orcamento->valor,
			'quantidadeItens' => $orcamento->quantidadeItens
		]);
	}
}