<?php

Route::get('/', function () {
    return view('index');
});

Route::get('login', 'Auth\Login@index')->name('login');
Route::get('logout', 'Auth\Logout@index')->name('logout');
Route::group([
        'middleware' => 'login'
    ], function(){
    Route::get('dashboard', 'Dashboard@index')->name('dashboard');
    Route::get('pendapatan', 'Keuangan\Pendapatan@index')->name('pendapatan');
    Route::get('pribadi', 'Pribadi@index')->name('pribadi');
    Route::get('keuangan', 'Keuangan@index')->name('keuangan');

    Route::post('/tambahPendapatan', 'Keuangan\Pendapatan@tambah');
});


Route::post('login', 'Auth\Login@login');