<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['module' => 'Admin', 'middleware' => 'web', 'namespace' => "App\Modules\Admin\Controllers"], function () {

    // Login/Authenticate
    Route::get("admin/login", ["as" => "admin.login", "uses" => "Login@login"]);
    Route::post("admin/login", ["as" => "admin.login_request", "uses" => "Login@login_request"]);
    Route::get("admin/logout", ["as" => "admin.logout", "uses" => "Login@logout"]);

    Route::group(["prefix" => "admin", 'middleware' => 'auth:admin'], function () {
        Route::get("/", ["as" => "admin.index", "uses" => "Admin@index"]);
    });
});
