<?php

require __DIR__ . "/../../vendor/autoload.php";

use App\Router;

$router = new Router();

$router->register(
    "/",
    [App\Home::class, 'index']
)->register("/invoices", [App\Invoice::class, "index"])
    ->register("/invoices/create", [App\Invoice::class, "create"]);

$baseUri = "/dashboard/Elzero/src/public";
$requestUri = str_replace($baseUri, '', $_SERVER["REQUEST_URI"]);
$router->resolve(requestUri: $requestUri);

echo $router->resolve($_SERVER['REQUEST_URI']);