<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/active/page', 'Auth\ActiveController@showEmailActivePage');
Route::get('/active/link/{token}', 'Auth\ActiveController@activeAccount');
Route::get('/active/email', 'Auth\ActiveController@sendActiveEmail');

Route::get('/demand/url', ['middleware' => ['auth', 'auth.active'], function () {
    return view('demand.demand-url');
}]);

Route::post('/demand/preview', [
    'middleware' => ['auth', 'auth.active'],
    'uses'=>'Demand\AppDemandController@preview'
]);


Route::get('/home', 'HomeController@index');
