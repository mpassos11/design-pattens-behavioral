<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

require "vendor/autoload.php";

/*
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Impostos\Icms());
*/

$calculadoraDescontos = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 5;
$orcamento->valor = 100;

echo $calculadoraDescontos->calculaDescontos($orcamento);
