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
global $app;

//Root of lumen
$router->get('/', function () use($app){
    return $app->version();
});

//Function to generate a random Key
$router->get('/key', function() {
    return str_random(32);
});

//Route to login users
$router->post('/auth/login', 'AuthController@postLogin');

//GRoup with protection to login users.
$router->group(['middleware' => 'auth:api'], function($app)
{
    $app->get('/test', function() {
        return response()->json([
            'message' => 'Hello World!',
        ]);
    });
});
