<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['module' => 'Admin', 'middleware' => 'admin', 'namespace' => "App\Modules\Admin\Controllers"], function () {

    Route::group(["prefix" => "admin"], function () {
        Route::get('/', function () {
            dd(1);
        });
    });
});
