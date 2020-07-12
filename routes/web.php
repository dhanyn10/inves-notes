<?php

Route::get('/', function () {
    return view('index');
});

Route::get('login', 'Auth\Login@index')->name('login');
Route::get('logout', 'Auth\Logout@index')->name('logout');
Route::group([
        'middleware' => 'login',
        'as' => 'user.'
    ], function(){
    Route::get('dashboard', 'Dashboard@index')->name('dashboard');
    Route::get('pribadi', 'User\Pribadi@index')->name('pribadi');
    Route::get('keuangan', 'User\Keuangan@index')->name('keuangan');
});

Route::post('login', 'Auth\Login@login');