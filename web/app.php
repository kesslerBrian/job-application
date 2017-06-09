<?php
use Symfony\Component\HttpFoundation\Request;

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../app/bootstrap.php.cache';

$env = (isset($_SERVER['SYMFONY_ENV'])) ? $_SERVER['SYMFONY_ENV'] : 'prod';
$debug = (isset($_SERVER['SYMFONY_DEBUG'])) ? $_SERVER['SYMFONY_DEBUG'] : false ;

$kernel = new AppKernel($env, $debug);

$kernel->loadClassCache();
//$kernel = new AppCache($kernel);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
