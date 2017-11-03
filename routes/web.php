<?php

/*Route::get('/', function () {
    return view('welcome');
});Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('logins');
});




Route::get('/auxi', function () {
    return view('login-auxi');
});



Route::group(['middleware'=>'admin'], function () {

    Route::group(['middleware'=>'auth:admin'], function (){
        Route::get('/coordenador',  'CoordenadorController@index');
        Route::get('/coordenador/logout',  'CoordenadorController@logout');

    });
    Route::get('/coordenador/login',  'CoordenadorController@login');
    Route::post('/coordenador/login',  'CoordenadorController@postlogin');
});

Route::group(['middleware'=>'auxi'], function () {

    Route::group(['middleware'=>'auth:auxi'], function (){
        Route::get('/auxiliar',  'AuxiliarController@index');
        Route::get('/auxiliar/logout',  'AuxiliarController@logout');
    });

    Route::get('/auxiliar/login',  'AuxiliarController@login');
    Route::post('/auxiliar/login',  'AuxiliarController@postlogin');

});

Route::group(['middleware'=>'prof'], function () {

    Route::group(['middleware'=>'auth:prof'], function (){
        Route::get('/professor',  'ProfessorController@index');
    });

    Route::get('/professor/login',  'ProfessorController@login');
    Route::post('/professor/login',  'ProfessorController@postlogin');
    Route::get('/professor/logout',  'ProfessorController@logout');
});



Route::group(['prefix'=>'aluno', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'aluno',               'uses'=>'AlunoController@index']);
    Route::get('create',        ['as'=>'aluno.create',          'uses'=>'AlunoController@create']);
    Route::post('store',        ['as'=>'aluno.store',           'uses'=>'AlunoController@store']);
    Route::get('{id}/destroy',  ['as'=>'aluno.destroy',         'uses'=>'AlunoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'aluno.edit',            'uses'=>'AlunoController@edit']);
    Route::put('{id}/update',   ['as'=>'aluno.update',          'uses'=>'AlunoController@update']);
});

Route::group(['prefix'=>'auxiliar', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'auxiliar',               'uses'=>'AuxiliarController@listar']);
    Route::get('create',        ['as'=>'auxiliar.create',          'uses'=>'AuxiliarController@create']);
    Route::post('store',        ['as'=>'auxiliar.store',           'uses'=>'AuxiliarController@store']);
    Route::get('{id}/destroy',  ['as'=>'auxiliar.destroy',         'uses'=>'AuxiliarController@destroy']);
    Route::get('{id}/edit',     ['as'=>'auxiliar.edit',            'uses'=>'AuxiliarController@edit']);
    Route::put('{id}/update',   ['as'=>'auxiliar.update',          'uses'=>'AuxiliarController@update']);
});

Route::group(['prefix'=>'coordenador', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'coordenador',               'uses'=>'CoordenadorController@listar']);
    Route::get('create',        ['as'=>'coordenador.create',          'uses'=>'CoordenadorController@create']);
    Route::post('store',        ['as'=>'coordenador.store',           'uses'=>'CoordenadorController@store']);
    Route::get('{id}/destroy',  ['as'=>'coordenador.destroy',         'uses'=>'CoordenadorController@destroy']);
    Route::get('{id}/edit',     ['as'=>'coordenador.edit',            'uses'=>'CoordenadorController@edit']);
    Route::put('{id}/update',   ['as'=>'coordenador.update',          'uses'=>'CoordenadorController@update']);
});

Route::group(['prefix'=>'dia', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'dia',               'uses'=>'DiaController@index']);
    Route::get('create',        ['as'=>'dia.create',          'uses'=>'DiaController@create']);
    Route::post('store',        ['as'=>'dia.store',           'uses'=>'DiaController@store']);
    Route::get('{id}/destroy',  ['as'=>'dia.destroy',         'uses'=>'DiaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'dia.edit',            'uses'=>'DiaController@edit']);
    Route::put('{id}/update',   ['as'=>'dia.update',          'uses'=>'DiaController@update']);
});

Route::group(['prefix'=>'frequencia_conteudo', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'frequencia_conteudo',               'uses'=>'Frequencia_conteudoController@index']);
    Route::get('create',        ['as'=>'frequencia_conteudo.create',          'uses'=>'Frequencia_conteudoController@create']);
    Route::post('store',        ['as'=>'frequencia_conteudo.store',           'uses'=>'Frequencia_conteudoController@store']);
    Route::get('{id}/destroy',  ['as'=>'frequencia_conteudo.destroy',         'uses'=>'Frequencia_conteudoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'frequencia_conteudo.edit',            'uses'=>'Frequencia_conteudoController@edit']);
    Route::put('{id}/update',   ['as'=>'frequencia_conteudo.update',          'uses'=>'Frequencia_conteudoController@update']);
});

Route::group(['prefix'=>'horario', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'horario',               'uses'=>'HorarioController@index']);
    Route::get('create',        ['as'=>'horario.create',          'uses'=>'HorarioController@create']);
    Route::post('store',        ['as'=>'horario.store',           'uses'=>'HorarioController@store']);
    Route::get('{id}/destroy',  ['as'=>'horario.destroy',         'uses'=>'HorarioController@destroy']);
    Route::get('{id}/edit',     ['as'=>'horario.edit',            'uses'=>'HorarioController@edit']);
    Route::put('{id}/update',   ['as'=>'horario.update',          'uses'=>'HorarioController@update']);
});

Route::group(['prefix'=>'oficina', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'oficina',               'uses'=>'OficinaController@index']);
    Route::get('create',        ['as'=>'oficina.create',          'uses'=>'OficinaController@create']);
    Route::post('store',        ['as'=>'oficina.store',           'uses'=>'OficinaController@store']);
    Route::get('{id}/destroy',  ['as'=>'oficina.destroy',         'uses'=>'OficinaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'oficina.edit',            'uses'=>'OficinaController@edit']);
    Route::put('{id}/update',   ['as'=>'oficina.update',          'uses'=>'OficinaController@update']);
});

Route::group(['prefix'=>'professor', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'professor',               'uses'=>'ProfessorController@listar']);
    Route::get('create',        ['as'=>'professor.create',          'uses'=>'ProfessorController@create']);
    Route::post('store',        ['as'=>'professor.store',           'uses'=>'ProfessorController@store']);
    Route::get('{id}/destroy',  ['as'=>'professor.destroy',         'uses'=>'ProfessorController@destroy']);
    Route::get('{id}/edit',     ['as'=>'professor.edit',            'uses'=>'ProfessorController@edit']);
    Route::put('{id}/update',   ['as'=>'professor.update',          'uses'=>'ProfessorController@update']);
});

Route::group(['prefix'=>'turma', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'turma',               'uses'=>'TurmaController@index']);
    Route::get('create',        ['as'=>'turma.create',          'uses'=>'TurmaController@create']);
    Route::post('store',        ['as'=>'turma.store',           'uses'=>'TurmaController@store']);
    Route::get('{id}/destroy',  ['as'=>'turma.destroy',         'uses'=>'TurmaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'turma.edit',            'uses'=>'TurmaController@edit']);
    Route::put('{id}/update',   ['as'=>'turma.update',          'uses'=>'TurmaController@update']);
});

Route::group(['prefix'=>'turma_aluno', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'turma_aluno',               'uses'=>'Turma_alunoController@index']);
    Route::get('create',        ['as'=>'turma_aluno.create',          'uses'=>'Turma_alunoController@create']);
    Route::post('store',        ['as'=>'turma_aluno.store',           'uses'=>'Turma_alunoController@store']);
    Route::get('{id}/destroy',  ['as'=>'turma_aluno.destroy',         'uses'=>'Turma_alunoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'turma_aluno.edit',            'uses'=>'Turma_alunoController@edit']);
    Route::put('{id}/update',   ['as'=>'turma_aluno.update',          'uses'=>'Turma_alunoController@update']);
});

Route::group(['prefix'=>'report', 'where'=> ['id'=>'[0-9]+']], function () {
    Route::get('',              ['as' => 'report',               'uses'=>'ReportController@index']);
   });
