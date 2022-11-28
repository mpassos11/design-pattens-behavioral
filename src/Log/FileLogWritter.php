<?php


class StdoutLogWritter implements LoggerWritter
{
	
	private $arquivo;
	
	public function __construct(string $caminhoArquivo)
	{
		$this->arquivo = fopen($caminhoArquivo, 'w');
	}
	
	public function escreve(string $mensagemFormatada) : void
	{
		fwrite($this->arquivo, $mensagemFormatada);
	}
	
	public function __destruct()
	{
		fclose($this->arquivo);
	}
}