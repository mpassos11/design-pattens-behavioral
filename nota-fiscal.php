<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstroiNotaFiscalProduto;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;

require 'vendor/autoload.php';

$item1 = new ItemOrcamento();
$item2 = new ItemOrcamento();
$item3 = new ItemOrcamento();

$item1->valor = 500;
$item2->valor = 1500;
$item3->valor = 1000;

$builder = new ConstroiNotaFiscalProduto();
$notaFiscal = $builder->paraEmpresa('123456', 'Empresa TESTE')
	->comObservacoes('Esta nota fiscal foi construida com um construtor')
	->comItem($item1)
	->comItem($item2)
	->comItem($item3)
	->constroi();

echo $notaFiscal->valor();
