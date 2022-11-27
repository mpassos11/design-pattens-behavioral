<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdapater implements HttpAdapter
{
	
	public function post(string $url, array $data = []): void
	{
		// instacio o react php
		// preparo os dados
		// faço a request
		
		echo 'ReactPHP';
	}
}
