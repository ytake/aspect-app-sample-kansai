<?php

/** @var \Illuminate\Routing\Router $router */
$router->get('/', ['uses' => 'HomeController@index', 'as' => 'index']);
