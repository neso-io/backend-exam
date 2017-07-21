<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

$api = app(Dingo\Api\Routing\Router::class);

$api->version('v1', function($api) {

    $api->group(['namespace' => 'App\Http\Controllers\Api\V1'], function($api) {
        $api->get('health', 'HealthController@status');
        /** 
         * Create an API endpoint that will add/subtract/multiply/divide two numbers
         * Method: POST
         * Parameter:
         *   in: body
         *   type: json (you are free to decide how you the json will look like)
         * Response:
         *   answer
         *
         */
        $api->post('calculate', 'CalculateController@calculate', ['only' => ['index']]);

        /** 
         * Create an API endpoint that will only return odd or even numbers
         * Method: POST
         * Parameter 1:
         *   in: params
         *   type: string (odd or even)
         * Parameter 2:
         *   in: body
         *   type: json (the numbers)
         * Response:
         *   all numbers that fit the selected parity
         *  
         * Example:
         * Request: localhost:3000/odd, [{"Number": "1"},{"Number": "2"},{"Number": "3"},{"Number": "4"}]
         * Response: [{"Number": "1"}, {"Number": "3"}]
         *
         */
        $api->post('parity', 'ParityController@parity');

        /** 
         * Create an API endpoint that will create a file with your name in it
         * Method: POST
         * Parameter:
         *   in: params
         *   type: string
         * Response:
         *   status 200 and file directory
         *
         */
        $api->post('file', 'FileController@file');
    });
});