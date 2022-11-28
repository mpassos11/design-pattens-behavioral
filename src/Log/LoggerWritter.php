<?php


interface LoggerWritter
{
	public function escreve(string $mensagemFormatada) : void;
}