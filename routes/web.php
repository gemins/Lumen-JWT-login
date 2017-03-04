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

//Root of lumen
$app->get('/', function () use ($app) {
    return $app->version();
});

//Function to generate a random Key
$app->get('/key', function() {
    return str_random(32);
});

//Route to login users
$app->post('/auth/login', 'AuthController@postLogin');

//GRoup with protection to login users.
$app->group(['middleware' => 'auth:api'], function($app)
{
    $app->get('/test', function() {
        return response()->json([
            'message' => 'Hello World!',
        ]);
    });
});
