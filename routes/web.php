<?php

use App\Http\Controllers\CategoyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('layout.master', function () {
    return view('layout.master');
})->name("master");

// Route::get('/services', function () {
//     return view('services');
// });

Route::get('services',[CategoyController::class , 'affiche'] );

Route::get('admin/dashbord', function () {
    return view('admin');
})->name("admin");


Route::get('/contact', function () {
    return view("contact");
});

Route::get('auth', function () {
    return view("layouts.auth");
});

Route::get('layouts/app', function () {
    return view("app");
})->name("home");

Route::get('pages/auth', function () {
    return view("addService");
})->name("addService");


Route::view('about', 'about');
Route::view('login', 'login');
Route::view('admin', 'admin/dashbord');
Route::view('create', 'posts/create');

// Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
Route::post('/posts/insert', [App\Http\Controllers\PostController::class, 'insert'])->name('insert');

// Route::get('test', [App\Http\Controllers\TestController::class, 'testing'])->name('test');

// Route::resource('users',App\Http\Controllers\TestResourceContr::class);

Route::resource('addserve',App\Http\Controllers\ServicrControl::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('category', 'category');
