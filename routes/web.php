<?php


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('solicitante', 'SolicitanteController', ['except' => [
    'destroy', 'create',
]]);

Route::get('change/municipalities/{id}', 'MunicipioController@changeMunicipalities');

Route::post('solicitantes/search', 'SolicitanteController@action')->name('solicitante.search');
