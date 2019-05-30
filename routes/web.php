<?php

Route::get('/', function () {
    return view('login');
});


Route::post('/iniciar-sesion', 'AuthenticacionesController@iniciarSesion');
