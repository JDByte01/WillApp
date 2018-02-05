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

Route::get('/info',function() {
	return "Desarrollado por Daniel Lopez";
});

Route::resource('categorias','Categoria',['except'=>['edit','create'] ]);

Route::resource('permisos','Permiso',['except'=>['edit','create'] ]);

Route::resource('marcas','Marca',['except'=>['edit','create'] ]);

Route::resource('acciones','Accion',['except'=>['edit','create'] ]);

Route::resource('listas','Lista',['except'=>['edit','create'] ]);


//

Route::resource('usuarios.permisos','Usuario',['except'=>['edit','create'] ]);

Route::resource('equipamientos.modelos','Equipamiento',['except'=>['edit','create'] ]);

Route::resource('equipos.marcas.modelos.salas','Equipo',['except'=>['edit','create'] ]);

Route::resource('usuarios.permisos','Usuario',['except'=>['edit','create'] ]);

Route::resource('lugares.categorias','Lugar',['except'=>['edit','create'] ]);

Route::resource('historiales.usuarios.acciones','Historial',['except'=>['edit','create'] ]);

Route::resource('logs.usuarios','Log',['except'=>['edit','create'] ]);

Route::resource('salas.lugares','Sala',['except'=>['edit','create'] ]);