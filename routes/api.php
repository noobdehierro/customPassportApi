<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

// Route::get('/callback', function (Request $request) {

//     $http = new GuzzleHttp\Client;
//     $response = $http->post('http://pass3.test/oauth/token', [
//         'form_params' => [
//             'grant_type' => 'password',
//             'client_id' => 2,
//             'client_secret' => 'DNoqh6KIXcB2IwxWkOwWLtkNWnSXlhWTFJRiEqMk',
//             'username' => 'jreyes@saycocorporativo.com',
//             'password' => '12345678',
//             'scope' => '',

//         ]
//     ]);
//     return json_decode((string) $response->getBody(), true);
// });


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});