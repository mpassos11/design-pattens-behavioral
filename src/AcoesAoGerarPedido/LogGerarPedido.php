<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
	public function executaAcao(Pedido $pedido) : void
	{
		echo 'Gerando log de gera��o de pedido';
	}
}