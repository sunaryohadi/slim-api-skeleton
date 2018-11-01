<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../private/vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/../private/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../private/src/dependencies.php';

// Register middleware
require __DIR__ . '/../private/src/middleware.php';

// Register routes
require __DIR__ . '/../private/routes/root.php';

// Run app
$app->run();
