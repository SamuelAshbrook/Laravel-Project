<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Get the welcome view on home URL
Route::get('/', function () {
    return view('welcome');
});

// Get some text on /about slug
Route::get('/about', function () {
    return "About Page";
});

// Get some text on /contact slug
Route::get('/contact', function () {
    return "Contact Page";
});

// Get some text using variables and function parameters
Route::get("/post/{id}/{name}", function($id, $name){
    return "This is post number: " . $id . "" . $name;
});

// Assign name to URL
Route::get("/admin/posts/example", array('as'=>'admin.home', function(){
    $url = route('admin.home');
    return "This url is " . $url;
}));