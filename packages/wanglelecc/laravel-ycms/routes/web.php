<?php

use Illuminate\Routing\Router;

Route::get('/ycms', function () {
    return 'ycms...';
});

Route::get('/log', '\Wanglelecc\Ycms\Controllers\LogController@index');
