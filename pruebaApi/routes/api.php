<?php

use Illuminate\Http\Request;

// estas rutas se pueden acceder sin proveer de un token válido.
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
// estas rutas requiren de un token válido para poder accederse.
Route::post('recover', 'AuthController@recover');
Route::resource('/rutas', 'RutasController')->except([
    'create', 'edit'
]);
Route::resource('/barrio', 'BarrioController')->except([
    'create', 'edit'
]);
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::post('/logout', 'AuthController@logout');
    Route::get('test', function () {
        return response()->json(['foo' => 'bar']);
    });
});
Route::post('/estadisticas', 'EstadisticasController@registerEstadisticas');
Route::get('/barrio{id}', 'BarrioController@show');