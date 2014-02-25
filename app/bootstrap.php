<?php
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
$app = new Silex\Application();

$app->get('/', function(Request $request) use($app) { 
	return "Home";
});

$app->get('/home/{id}/', function(Request $request, $id) use($app) { 
	return $id; 
});

$app->run();
?>
