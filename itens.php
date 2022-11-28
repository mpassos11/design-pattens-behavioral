<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamentoAntigo = new Orcamento();
$orcamentoMaisAntigo = new Orcamento();

$item1 = new ItemOrcamento();
$item2 = new ItemOrcamento();
$item3 = new ItemOrcamento();
$item4 = new ItemOrcamento();
$item5 = new ItemOrcamento();

$item1->valor = 500;
$item2->valor = 300;
$item3->valor = 150;
$item4->valor = 50;
$item5->valor = 100;

$orcamento->addItem($item1);
$orcamento->addItem($item2);
$orcamentoAntigo->addItem($item3);
$orcamentoMaisAntigo->addItem($item4);
$orcamentoMaisAntigo->addItem($item5);

$orcamentoAntigo->addItem($orcamentoMaisAntigo);
$orcamento->addItem($orcamentoAntigo);

echo $orcamento->valor();