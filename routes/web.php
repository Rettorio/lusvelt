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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


// $router->get('/api/data', function () {
//     return response()->json(['message' => 'Hello from Lumen API']);
// });

$router->get('/api/data', ['as' => 'data', 'uses' => 'ApiController@getData']);

$router->get('/{any:.*}', function () use ($router) {
    return view('index');
});