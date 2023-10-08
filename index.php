<?php

require __DIR__ . '/vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = strtok($uri, '?'); 

switch ($uri) {
    case '/':
        require 'routes/index.php';
        break;
    default:
        http_response_code(404);
        echo 'Page non trouvée';
        break;
}
