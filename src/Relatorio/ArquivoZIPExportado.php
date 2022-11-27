<?php


namespace Alura\DesignPattern\Relatorio;


class ArquivoZIPExportado implements ArquivoExportado
{
	
	private string $nomeArquivoInterno;
	
	public function __construct(string $nomeArquivoInterno)
	{
		$this->nomeArquivoInterno = $nomeArquivoInterno;
	}
	
	public function salvar(ConteudoExportado $conteudoExportado): string
	{
		$arquivoZIP = new \ZipArchive();
		
		$caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
		$arquivoZIP->open($caminhoArquivo, \ZipArchive::CREATE);
		$arquivoZIP->addFromString($this->nomeArquivoInterno, serialize($conteudoExportado));
		$arquivoZIP->close();
		
		return $caminhoArquivo;
	}
}