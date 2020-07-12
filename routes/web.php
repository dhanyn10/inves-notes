<?php

Route::get('/', function () {
    return view('index');
});

Route::get('login', 'Auth\Login@index')->name('login');
Route::get('dashboard', 'Dashboard@index')->name('dashboard');
Route::get('logout', 'Auth\Logout@index')->name('logout');

Route::post('login', 'Auth\Login@login');