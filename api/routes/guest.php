<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', 'TestController@index'); ;

Route::get('/admin/{any?}', 'EndpointController@index')
    ->where('any', '.*'); ;

Route::post('/api/admin/auth', 'Admin\Auth\AuthController@login')->name('login');
