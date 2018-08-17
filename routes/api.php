<?php

use Illuminate\Http\Request;
Use App\Cliente;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});






Route::get('clientes', 'ClienteController@index');
Route::get('clientes/{id}', 'ClienteController@show');
Route::post('clientes', 'ClienteController@store');
Route::put('clientes/{id}', 'ClienteController@update');
Route::delete('clientes/{id}', 'ClienteController@delete');