<?php

use Illuminate\Support\Facades\Route;



//Ruta principal
Route::get('/news', 'newsController@getNews')->name('news');
Route::get('/', 'newsController@getNews')->name('news');

//Ruta de noticia
Route::get('/new/{id}','newsController@getNote');
