<?php

namespace App\Action\Contato;

use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Mustache_Engine;

final class ContatoAction
{
	private $m;
	
	public function __construct(Mustache_Engine $m)
    {
    	$this->m= $m;
    }

    public function __invoke(ServerRequest $request, Response $response): Response
    {	
    	$result= $this->m->render("acesso_publico/contato.mustache");
    	
    	$response->getBody()->write($result);
        return $response;
    }
}
