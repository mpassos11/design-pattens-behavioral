<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\OrcamentoZIP;

require 'vendor/autoload.php';

$orcamentoZip = new OrcamentoZIP();
$orcamento = new Orcamento();
$orcamento->valor = 500;

$orcamentoZip->exportar($orcamento);
