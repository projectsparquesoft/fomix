<?php


Route::get('/', function () {
    return view('auth.login2');
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

// PARAMETROS

Route::resource('proponente', 'ProponenteController', ['except' => [
    'destroy', 'show', 'create', 'edit'
]]);

Route::resource('indicadores', 'IndicadorController', ['except' => [
    'destroy', 'show', 'create', 'edit'
]]);

Route::resource('lineas', 'Lineacontroller', ['except' => [
    'destroy', 'show', 'create', 'edit'
]]);

Route::resource('tipopoblacion', 'TipoPoblacionController', ['except' => [
    'destroy', 'show', 'create', 'edit'
]]);

Route::resource('poblacion', 'PoblacionController', ['except' => [
    'destroy', 'show', 'create', 'edit'
]]);

Route::resource('documentos', 'DocumentoController', ['except' => [
    'destroy', 'show', 'create', 'edit'
]]);
Route::resource('ejes', 'EjeController', ['except' => [
    'destroy', 'show', 'create', 'edit'
]]);


// ESTADOS
Route::get('tipopoblacion/estado/{id}', 'TipoPoblacionController@changeStatus')->name('tipopoblacion.status');
Route::get('indicador/estado/{id}', 'IndicadorController@changeStatus')->name('indicador.status');
Route::get('lineas/estado/{id}','LineaController@changeLineas')->name('lineas.status');


// SOLICITUDES VARIADAS
Route::get('change/municipalities/{id}', 'MunicipioController@changeMunicipalities');
Route::post('solicitantes/search', 'SolicitanteController@action')->name('solicitante.search');
