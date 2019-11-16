<?php

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

/**
 * App Version
 */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * Hello Controller
 */
$router->get('/hello', 'HelloController@hello');

/**
 * Hello with params
 */
$router->group(['prefix' => 'hello'], function () use ($router){

    // Get method
    $router->get('/get/{name}', 'HelloController@getHello');

    // Post method
    $router->post('/post', 'HelloController@postHello');

});