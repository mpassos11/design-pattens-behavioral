<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();

$item1 = new ItemOrcamento();
$item2 = new ItemOrcamento();

$item1->valor = 500;
$item2->valor = 300;

$orcamento->addItemOrcamento($item1);
$orcamento->addItemOrcamento($item2);

echo $orcamento->valor();