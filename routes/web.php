<?php

Route::get('/', "BlogController@overview")
->name('overview');

Route::get('post/add', "PostController@add")
->name('add');

Route::post('post/add', "PostController@store")
->name('store');

Route::get('post/{id}', "PostController@view")
    ->name('view');

Route::get('delete/{id}', "PostController@delete")
    ->name('delete');
