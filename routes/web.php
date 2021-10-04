<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//// General routes
$router->get('/', function () {
    return ['message' => 'API'];
});


$router->group(['prefix' => 'consumer'], function ($router) {
    $router->post('/', ['as' => 'consumer', 'uses' => 'ConsumerController@store']);
});
