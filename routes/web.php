<?php

Route::get('/', "BlogController@overview")
->name('overview');

Route::get('/add', "PostController@add")
->name('add');

Route::post('/add', "PostController@store")
->name('store');
