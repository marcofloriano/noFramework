<?php
use App\Core\App;
use App\Providers\AppServiceProvider;
use League\Container\Container;

error_reporting(0);

require '../vendor/autoload.php';

$container = new Container();
// Exemplo de container em ação
// $container->add('name', function() {
// 	return 'Marco';
// });
// var_dump($container->get('name'));
// die();
$container->addServiceProvider(new AppServiceProvider());
var_dump($container->get('name'));
die();

$app = new App();

// register routes

$app->run();