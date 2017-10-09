<?php

/*Route::get('/', function () {
    return view('welcome');
});Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sischool','AlunoController@index');
