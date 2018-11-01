<?php
return [
	'settings' => [
		'displayErrorDetails' => true, // set to false in production
		'addContentLengthHeader' => false, // Allow the web server to send the content-length header

		// Renderer settings
		'renderer' => [
			'template_path' => __DIR__ . '/../templates/',
		],

		// db settings
		'db' => [
			'dbuser' => 'username',
			'dbpassword' => 'password', 
			'dbname' => 'database',
			'dbhost' => 'localhost'
		],

		// Monolog settings
		'logger' => [
			'name' => 'slim-api-app',
			'level' => \Monolog\Logger::DEBUG,
		],


	],
];
