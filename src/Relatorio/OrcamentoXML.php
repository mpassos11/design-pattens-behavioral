<?php


namespace Alura\DesignPattern\Relatorio;


use Alura\DesignPattern\Orcamento;

class OrcamentoXML
{
	public function exportar(Orcamento $orcamento) : string
	{
		$elementoOrcamento = new \SimpleXMLElement('<orcamento/>');
		$elementoOrcamento->addChild('valor', $orcamento->valor);
		$elementoOrcamento->addChild('quantidade_itens', $orcamento->quantidadeItens);
		
		return $elementoOrcamento->asXML();
	}
}