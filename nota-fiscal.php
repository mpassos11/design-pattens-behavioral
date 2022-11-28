<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscal();
$notaFiscal = $builder->paraEmpresa('123456', 'Empresa TESTE')
	->comObservacoes('Esta nota fiscal foi construida com um construtor')
	->comItem(new ItemOrcamento())
	->comItem(new ItemOrcamento())
	->comItem(new ItemOrcamento())
	->constroi();
