<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');