<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//cambiar contraseña
//Route::get('usuarios/contrasenia/cambiar', 'UsuarioController@vistacontrasenia')->name('usuario.vistacontrasenia');
//Route::post('usuarios/contrasenia/cambiar/finalizar', 'UsuarioController@cambiarcontrasenia')->name('usuario.cambiarcontrasenia');

Route::get('/home', 'HomeController@index')->name('home');


//GRUPO DE RUTAS PARA LOS MENUS
Route::group(['middleware' => ['auth'], 'prefix' => 'menu'], function() {
    Route::get('usuarios', 'MenuController@usuarios')->name('menu.usuarios');
    Route::get('admisiones', 'MenuController@admisiones')->name('menu.admisiones');
});


//GRUPO DE RUTAS PARA LA ADMINISTRACIÓN DE USUARIOS
Route::group(['middleware' => ['auth'], 'prefix' => 'usuarios'], function() {
    //MODULOS
    Route::resource('modulo', 'ModuloController');
    //PAGINAS O ITEMS DE LOS MODULOS
    Route::resource('pagina', 'PaginaController');
    //GRUPOS DE USUARIOS
    Route::resource('grupousuario', 'GrupousuarioController');
    Route::get('grupousuario/{id}/delete', 'GrupousuarioController@destroy')->name('grupousuario.delete');
    Route::get('privilegios', 'GrupousuarioController@privilegios')->name('grupousuario.privilegios');
    Route::get('grupousuario/{id}/privilegios', 'GrupousuarioController@getPrivilegios');
    Route::post('grupousuario/privilegios', 'GrupousuarioController@setPrivilegios')->name('grupousuario.guardar');
    //USUARIOS
    Route::resource('usuario', 'UsuarioController');
    Route::get('usuario/{id}/delete', 'UsuarioController@destroy')->name('usuario.delete');
    Route::post('operaciones', 'UsuarioController@operaciones')->name('usuario.operaciones');
    Route::post('usuarios/contrasenia/cambiar/admin/finalizar', 'UsuarioController@cambiarPass')->name('usuario.cambiarPass');
    Route::post('acceso', 'HomeController@confirmaRol')->name('rol');
    Route::get('inicio', 'HomeController@inicio')->name('inicio');
});


//GRUPO DE RUTAS PARA LOS PROCESOS DE ADMISIÓN Y SELECCIÓN
Route::group(['middleware' => ['auth'], 'prefix' => 'admisiones'], function() {
    //PAISES
    Route::resource('pais', 'PaisController');
    Route::get('pais/{id}/delete', 'PaisController@destroy')->name('pais.delete');
    Route::get('pais/{id}/estados', 'PaisController@estados')->name('pais.estados');
    //ESTADOS
    Route::resource('estado', 'EstadoController');
    Route::get('estado/{id}/delete', 'EstadoController@destroy')->name('estado.delete');
    Route::get('estado/{id}/ciudades', 'EstadoController@ciudades')->name('estado.ciudades');
    //CIUDADES
    Route::resource('ciudad', 'CiudadController');
    Route::get('ciudad/{id}/delete', 'CiudadController@destroy')->name('ciudad.delete');
    Route::get('ciudad/{id}/sectores', 'CiudadController@sectores')->name('ciudad.sectores');
    //TIPO DE DOCUMENTOS
    Route::resource('tipodoc', 'TipodocController');
    Route::get('tipodoc/{id}/delete', 'TipodocController@destroy')->name('tipodoc.delete');
    //SEXO
    Route::resource('sexo', 'SexoController');
    Route::get('sexo/{id}/delete', 'SexoController@destroy')->name('sexo.delete');
    //ENITDAD SALUD
    Route::resource('entidadsalud', 'EntidadsaludController');
    Route::get('entidadsalud/{id}/delete', 'EntidadsaludController@destroy')->name('entidadsalud.delete');
    //ETNIA
    Route::resource('etnia', 'EtniaController');
    Route::get('etnia/{id}/delete', 'EtniaController@destroy')->name('etnia.delete');
    //ESTRATO
    Route::resource('estrato', 'EstratoController');
    Route::get('estrato/{id}/delete', 'EstratoController@destroy')->name('estrato.delete');
    //OCUPACION LABORAL
    Route::resource('ocupacion', 'OcupacionController');
    Route::get('ocupacion/{id}/delete', 'OcupacionController@destroy')->name('ocupacion.delete');
    //PERIODO ACADEMICO
    Route::resource('periodoacademico', 'PeriodoacademicoController');
    Route::get('periodoacademico/{id}/delete', 'PeriodoacademicoController@destroy')->name('periodoacademico.delete');
    //GRADOS(AÑOS ESCOLARES)
    Route::resource('gradoacademico', 'GradoController');
    Route::get('gradoacademico/{id}/delete', 'GradoController@destroy')->name('gradoacademico.delete');
    //CON QUIEN VIVE    
    Route::resource('conquienvive', 'ConquienviveController');
    Route::get('conquienvive/{id}/delete', 'ConquienviveController@destroy')->name('conquienvive.delete');
    //RANGO SISBEN    
    Route::resource('rangosisben', 'RangosisbenController');
    Route::get('rangosisben/{id}/delete', 'RangosisbenController@destroy')->name('rangosisben.delete');
    //SITUACION AÑO ANTERIOR     
    Route::resource('situacionanterior', 'SituacionanioanteriorController');
    Route::get('situacionanterior/{id}/delete', 'SituacionanioanteriorController@destroy')->name('situacionanterior.delete');
    //UNIDAD    
    Route::resource('unidad', 'UnidadController');
    Route::get('unidad/{id}/delete', 'UnidadController@destroy')->name('unidad.delete');
    //JORNADA  
    Route::resource('jornada', 'JornadaController');
    Route::get('jornada/{id}/delete', 'JornadaController@destroy')->name('jornada.delete');
    //PROGRAMAR PERIODO ACADEMICO 
    Route::resource('periodounidad', 'PeriodounidadController');
    Route::get('periodounidad/{id}/delete', 'PeriodounidadController@destroy')->name('periodounidad.delete');
    //PROGRAMAR AGENDA DE ENTREVISTAS
    Route::resource('agendacita', 'AgendacitasController');
    Route::get('agendacita/{id}/delete', 'AgendacitasController@destroy')->name('agendacita.delete');
    Route::get('agendacita/{id}/crear', 'AgendacitasController@create')->name('agendacita.crear');
    //FECHAS DE PROCESOS
    Route::resource('fechaprocesos', 'FechasprocesosacademicoController');
    Route::get('fechaprocesos/{id}/index2', 'FechasprocesosacademicoController@index')->name('fechaprocesos.index2');
    Route::get('fechaprocesos/{per}/{proceso}/{jornada}/{unidad}/fechas', 'FechasprocesosacademicoController@listID')->name('fechaprocesos.fechas');
    Route::post('fechaprocesos/set', 'FechasprocesosacademicoController@set')->name('fechaprocesos.set');
    Route::get('fechaprocesos/{id}/delete', 'FechasprocesosacademicoController@destroy')->name('fechaprocesos.delete');
    //CONVOCATORIA 
    Route::resource('convocatoria', 'ConvocatoriaController');
    Route::get('convocatoria/{id}/delete', 'ConvocatoriaController@destroy')->name('convocatoria.delete');
    
});
