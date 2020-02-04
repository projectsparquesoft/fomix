<?php


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('solicitante', 'SolicitanteController', ['except' => [
    'destroy', 'create',
]]);

Route::resource('dependencia', 'DependenciaController', ['except' => [
    'destroy', 'show',
]]);

Route::resource('empleados', 'EmpleadoController', ['except' => [
    'destroy', 'show',
]]);
Route::resource('solicitud', 'SolicitudController', ['except' => [
    'destroy', 'show',
]]);
Route::resource('proyecto', 'proyectoController', ['except' => [
    'destroy', 'show',
]]);
Route::resource('presupuesto', 'PresupuestoController', ['except' => [
    'destroy', 'show',
]]);

Route::get('change/municipalities/{id}', 'MunicipioController@changeMunicipalities');

Route::post('solicitantes/search', 'SolicitanteController@action')->name('solicitante.search');
