<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\inventoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello/{Angelo}', function($name) {

    return 'hi ' . $name; // It will say "hi" followed by whatever name you typed (like "hi John")

});

Route::resource('/inventory', InventoryController::class);