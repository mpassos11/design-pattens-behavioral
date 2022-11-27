<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

class LogGerarPedido implements \SplObserver
{
	public function update(\SplSubject $pedido) : void
	{
		echo 'Gerando log de geraчуo de pedido';
	}
}