<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('templates.main')->with('titulo', "");
})->name('index');

Route::resource('cursos', 'CursoController')->middleware('NiveisAcesso: 3');
Route::resource('disciplinas', 'DisciplinaController')->middleware('NiveisAcesso: 3');
Route::resource('eixos', 'EixoController')->middleware('NiveisAcesso: 3');
Route::resource('profs', 'ProfController')->middleware('NiveisAcesso: 3');
Route::resource('docencia', 'DocenciaController')->middleware('NiveisAcesso: 3');
Route::resource('alunos', 'AlunoController')->middleware('NiveisAcesso: 3');
Route::resource('matriculas', 'MatriculaController')->middleware('NiveisAcesso: 3');

Route::get('acessoNegado', function () {
    return view('acessoNegado');
})->name('acessoNegado');
