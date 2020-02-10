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
Route::resource('proponente', 'ProponenteController', ['except' => [
    'destroy', 'show',
]]);
Route::resource('indicadores', 'IndicadorController', ['except' => [
    'destroy', 'show',
]]);
Route::resource('lineas', 'Lineacontroller', ['except' => [
    'destroy', 'show',
]]);
Route::resource('tipopoblacion', 'TipoPoblacionController', ['except' => [
    'destroy', 'show',
]]);
Route::resource('poblacion', 'PoblacionController', ['except' => [
    'destroy', 'show',
]]);

Route::resource('documentos', 'DocumentoController', ['except' => [
    'destroy', 'show', 'create', 'edit'
]]);

Route::get('change/municipalities/{id}', 'MunicipioController@changeMunicipalities');

Route::post('solicitantes/search', 'SolicitanteController@action')->name('solicitante.search');
