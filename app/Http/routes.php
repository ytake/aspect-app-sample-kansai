<?php

/** @var \Illuminate\Routing\Router $router */
$router->get('/', ['uses' => 'HomeController@index', 'as' => 'index']);
$router->post('product/reserve', 'Product\\ReserveController@reserve');
$router->post('product/purchase', 'Product\\PaymentController@purchase');

$router->post('product/aspect/reserve', 'Product\\Aspect\\ReserveController@reserve');
$router->post('product/aspect/purchase', 'Product\\Aspect\\PaymentController@purchase');

