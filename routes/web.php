<?php

/*Route::get('/', function () {
    return view('welcome');
});Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'aluno', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',            ['as' => 'aluno',                 'uses' => 'AlunoController@index']);
    Route::get('create',      ['as'=>'aluno.create',            'uses'=>'AlunoController@create']);
    Route::post('store',      ['as'=>'aluno.store',            'uses'=>'AlunoController@store']);
});