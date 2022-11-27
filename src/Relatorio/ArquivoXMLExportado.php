<?php


namespace Alura\DesignPattern\Relatorio;


class ArquivoXMLExportado implements ArquivoExportado
{
	
	private string $nomeElementoPai;
	
	public function __construct(string $nomeElementoPai)
	{
		$this->nomeElementoPai = $nomeElementoPai;
	}
	
	public function salvar(ConteudoExportado $conteudoExportado): string
	{
		$elementoXML = new \SimpleXMLElement("<{$this->nomeElementoPai}/>");
		foreach ($conteudoExportado->conteudo() as $item => $valor) {
			$elementoXML->addChild($item, $valor);
		}
		
		$caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
		$elementoXML->asXML($caminhoArquivo);
		
		return $caminhoArquivo;
	}
}