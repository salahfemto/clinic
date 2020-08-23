<?php

use Illuminate\Support\Facades\Route;

Route::get("login", "web@login");
Route::post("login", "web@login_post");

Route::group(['middleware' => 'login'], function () {
    
   Route::get("/", "web@home");
   Route::get("/logout", "web@logout");
   Route::get("add", "web@add");
   Route::post("add", "web@add_post");
   Route::get("add-date", "web@add_date");
   Route::post("add-date", "web@add_date_post");
   Route::get("view", "web@view");
   Route::get("view-today", "web@view_today");
   Route::get("getInfo/{id}", "web@getInfo");
   Route::post("add-info", "web@add_info");
   Route::get("patient/{id}", "web@patient");

});