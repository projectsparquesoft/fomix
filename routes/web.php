<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('solicitante', 'SolicitanteController', ['except' => [
    'destroy', 'create',
]]);

Route::resource('solicitud', 'SolicitudController', ['except' => [
    'destroy', 'create', 'edit',
]]);

Route::resource('proyecto', 'proyectoController', ['except' => [
    'destroy', 'show',
]]);

// PARAMETROS

Route::resource('proponente', 'ProponenteController', ['except' => [
    'destroy', 'show', 'create', 'edit',
]]);

Route::resource('indicadores', 'IndicadorController', ['except' => [
    'destroy', 'show', 'create', 'edit',
]]);

Route::resource('lineas', 'Lineacontroller', ['except' => [
    'destroy', 'show', 'create', 'edit',
]]);

Route::resource('tipopoblacion', 'TipoPoblacionController', ['except' => [
    'destroy', 'show', 'create', 'edit',
]]);

Route::resource('poblacion', 'PoblacionController', ['except' => [
    'destroy', 'show', 'create', 'edit',
]]);

Route::resource('documentos', 'DocumentoController', ['except' => [
    'destroy', 'show', 'create', 'edit',
]]);
Route::resource('ejes', 'EjeController', ['except' => [
    'destroy', 'show', 'create', 'edit',
]]);

Route::resource('dependencia', 'DependenciaController', ['except' => [
    'destroy', 'show', 'create', 'edit',
]]);

Route::resource('empleados', 'EmpleadoController', ['except' => [
    'destroy', 'create', 'edit',
]]);

Route::resource('fuente_verificacion', 'FuenteVerificacionController', ['except' => [
    'destroy', 'create', 'edit',
]]);

Route::resource('management', 'ManagementController', ['only' => [
    'index', 'show',
]]);

// REPORTES
Route::resource('reportesolicitud', 'ReporteSolicitudController', ['except' => [
    'destroy', 'create', 'edit',
]]);
Route::resource('reporteproyecto', 'ReporteProyectoController', ['except' => [
    'destroy', 'create', 'edit',
]]);
Route::resource('informacionreporte', 'InformacionReporteController', ['except' => [
    'destroy', 'create', 'edit',
]]);

// ESTADOS
Route::get('tipopoblacion/estado/{id}', 'TipoPoblacionController@changeStatus')->name('tipopoblacion.status');
Route::get('indicador/estado/{id}', 'IndicadorController@changeStatus')->name('indicador.status');
Route::get('lineas/estado/{id}', 'LineaController@changeLineas')->name('lineas.status');
Route::get('empleados/estado/{id}', 'EmpleadoController@changeBoss')->name('empleados.status');

// SOLICITUDES VARIADAS
Route::get('change/municipalities/{id}', 'MunicipioController@changeMunicipalities');
//Route::post('validate/documento', 'SolicitudController@validateDocumento')->name('validate.documento');

// MOVIMIENTO DE SOLICITUDES
Route::get('solicitud/sendmanagement/{id}', 'SolicitudController@sendManagement')->name('solicitud.management');
Route::get('solicitud/deny/{id}', 'ManagementController@denySolicitud')->name('management.deny');
Route::get('solicitud/approve/{id}', 'ManagementController@approveSolicitud')->name('management.approve');

Route::group(['middleware' => ['cors']], function () {

    Route::post('solicitantes/search', 'SolicitanteController@action')->name('solicitante.search');
    Route::post('empleados/change', 'EmpleadoController@storeChangeDependencia')->name('empleados.change');
// VALIDACIONES
    Route::post('validate/solicitud', 'SolicitudController@validateSolicitud')->name('validate.solicitud');
    Route::post('validate/formato', 'SolicitudController@validateFormato')->name('validate.formato');
    Route::post('validate/poblacion', 'SolicitudController@validatePoblacion')->name('validate.poblacion');
    Route::post('validate/actividad', 'SolicitudController@validateActividad')->name('validate.actividad');
    Route::post('validate/presupuesto', 'SolicitudController@validatePresupuesto')->name('validate.presupuesto');

});
