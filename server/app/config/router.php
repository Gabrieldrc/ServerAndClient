<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet(
    '/team',
    [
        'controller' => 'team',
        'action'     => 'team',
    ]
);

$router->handle($_SERVER['REQUEST_URI']);
