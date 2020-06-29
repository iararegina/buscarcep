<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'BuscaCepController@buscarCep')->name('cep'); 
