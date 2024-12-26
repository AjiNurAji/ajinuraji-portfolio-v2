<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware("maintenance");

Route::post("/configurate-database", function () {
    Artisan::call("migrate:fresh --seed");
    return response()->json([
        "success" => true,
        "message" => "Database has been configured"
    ]);
});
