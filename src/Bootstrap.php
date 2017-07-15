<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$environment = 'development';

$whoops = new \Whoops\Run;

if ($environment == 'development') {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
    $whoops->pushHandler(function($e) {
        echo 'Todo: Friendly error handling';
    });
}

$whoops->register();

$request = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
$response = new \Http\HttpResponse;

$response->setContent('404 - Page not found');
$response->setStatusCode(404);

foreach ($response->getHeaders() as $header) {
    header($header, false);
}

echo $response->getContent();