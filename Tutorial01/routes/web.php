<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// 1. Ruta principal (se le añade ->name("home.index") al final)
Route::get('/', [HomeController::class, 'index'])->name("home.index");

// 2. Ruta de la página About
Route::get('/about', function () { 
    $data1 = "About us - Online Store"; 
    $data2 = "About us"; 
    $description = "This is an about page ..."; 
    $author = "Developed by: Your Name"; 

    return view('home.about')
        ->with("title", $data1) 
        ->with("subtitle", $data2) 
        ->with("description", $description) 
        ->with("author", $author); 
})->name("home.about");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index"); 
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create"); 
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save"); 
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show"); 