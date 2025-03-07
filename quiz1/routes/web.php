<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello/{Angelo}', function($name) {

    return 'hi ' . $name; // It will say "hi" followed by whatever name you typed (like "hi John")

});