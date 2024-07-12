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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->group(['prefix' => 'api/v1/testing'], function() use ($router){
//     $router->get('/', ['uses' => 'UserController@index']);
// 	$router->post('/', ['uses' => 'UserController@create ']);
// 	$router->get('/{id}', ['uses' => 'UserController@show']);
// 	$router->delete('/{id}', ['uses' => 'UserController@destroy']);
// 	$router->put('/{id}', ['uses' => 'UserController@update']);
// });

$router->group(['prefix' => 'api/v1/testing','middleware' => 'auth'], function() use ($router){
    $router->get('/', ['uses' => 'UserController@index']);
});

$router->group(['prefix' => 'api/v1/customers','middleware' => 'auth'], function() use ($router){
    $router->get('/', ['uses' => 'CustomerController@index']);
    $router->post('/', ['uses' => 'CustomerController@store']);
    $router->get('/{id}', ['uses' => 'CustomerController@show']);
    $router->put('/{id}', ['uses' => 'CustomerController@update']);
    $router->delete('/{id}', ['uses' => 'CustomerController@destroy']);
});

$router->group(['prefix' => 'api/v1/products','middleware' => 'auth'], function() use ($router){
    $router->get('/', ['uses' => 'ProductController@index']);
    $router->post('/', ['uses' => 'ProductController@store']);
    $router->get('/{id}', ['uses' => 'ProductController@show']);
    $router->put('/{id}', ['uses' => 'ProductController@update']);
    $router->delete('/{id}', ['uses' => 'ProductController@destroy']);
});

$router->group(['prefix' => 'api/v1/order','middleware' => 'auth'], function() use ($router){
    $router->get('/', ['uses' => 'OrderController@index']);
    $router->post('/', ['uses' => 'OrderController@store']);
    $router->get('/{id}', ['uses' => 'OrderController@show']);
    $router->put('/{id}', ['uses' => 'OrderController@update']);
    $router->delete('/{id}', ['uses' => 'OrderController@destroy']);
});

$router->group(['prefix' => 'api/v1/orderitem', 'iddleware' => 'auth'], function() use ($router) {
    $router->get('/', ['uses' => 'OrderitemController@index']);
    $router->post('/', ['uses' => 'OrderitemController@store']);
    $router->get('/{id}', ['uses' => 'OrderitemController@show']);
    $router->put('/{id}', ['uses' => 'OrderitemController@update']);
    $router->delete('/{id}', ['uses' => 'OrderitemController@destroy']);
});

$router->group(['prefix' => 'api/v1/payment', 'iddleware' => 'auth'], function() use ($router) {
    $router->get('/', ['uses' => 'PaymentController@index']);
    $router->post('/', ['uses' => 'PaymentController@store']);
    $router->get('/{id}', ['uses' => 'PaymentController@show']);
    $router->put('/{id}', ['uses' => 'PaymentController@update']);
    $router->delete('/{id}', ['uses' => 'PaymentController@destroy']);
}); // added semicolon here