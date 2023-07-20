<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['module' => 'Admin', 'middleware' => 'web', 'namespace' => "App\Modules\Admin\Controllers"], function () {

    // Login/Authenticate
    Route::get("admin/login", ["as" => "admin.login", "uses" => "AuthC@login"]);


    Route::group(["prefix" => "admin", 'middleware' => 'auth:admin'], function () {
        Route::get('/', function () {
            dd(1);
        });
    });
});
