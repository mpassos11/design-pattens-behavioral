<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\ArquivoXMLExportado;
use Alura\DesignPattern\Relatorio\ArquivoZIPExportado;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXML = new ArquivoXMLExportado('orcamento.xml');
$orcamentoExportadoZIP = new ArquivoZIPExportado('orcamento.zip');

echo "Arquivo XML: " . $orcamentoExportadoXML->salvar($orcamentoExportado) . PHP_EOL;
echo "Arquivo ZIP: " . $orcamentoExportadoZIP->salvar($orcamentoExportado) . PHP_EOL;
