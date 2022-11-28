<?php


namespace Alura\DesignPattern;


class LogDesconto
{
	public function informar(float $descontoCalculado): void
	{
		// lib de log
		echo "Salvando log de desconto: {$descontoCalculado}" . PHP_EOL;
	}
}