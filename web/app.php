<?php

require __DIR__.'/../var/bootstrap.php.cache';

use Symfony\Component\HttpFoundation\Request;

$app = new AppKernel($_SERVER['SYMFONY_ENV'], (bool)$_SERVER['SYMFONY_DEBUG']);

$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->send();
$app->terminate($request, $response);