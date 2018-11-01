<?php
// DIC configuration

$container = $app->getContainer();

// ezSQL
// $db = new ezSQL_mysqli($dbuser='', $dbpassword='', $dbname='', $dbhost='localhost', $encoding='')
$container['db'] = function ($c) { 
	$settings = $c->get('settings');
	return new ezSQL_mysqli( $settings['db']['dbuser'], $settings['db']['dbpassword'], $settings['db']['dbname'], $settings['db']['dbhost'], 'utf8mb4' );
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\ErrorLogHandler(0, $settings['level']));
    return $logger;
};
