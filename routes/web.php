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


Route::get('services',[CategoyController::class , 'affiche'] );

Route::get('admin/dashbord', function () {
    return view('admin');
})->name("admin");


Route::get('/contact', function () {
    return view("contact");
});

Route::get('auth', function () {
    return view("layouts.auth");
})->name('auth');

Route::get('layouts/app', function () {
    return view("app");
})->name("home");

Route::get('pages/auth', function () {
    return view("addService");
})->name("addService");

Route::get('addService', function () {
    return view("pages.addService");
})->name("addService");

Route::get('test', function () {
    return view("pages.test");
})->name("test");

Route::get('update', function () {
    return view("pages.update");
})->name("update");

Route::get('addCategorie', function () {
    return view("pages.addCategorie");
})->name("addCategorie");

Route::get('updateServe', function () {
    return view("pages.updateServe");
})->name("updateServe");

Route::get('serviceAction', function () {
    return view("pages/serviceAction");
})->name("serviceAction");

Route::get('pages/categorieAction', function () {
    return view("pages/categorieAction");
})->name("categorie");



Route::view('about', 'about');
Route::view('login', 'login');
Route::view('admin', 'admin/dashbord');
Route::view('create', 'posts/create');


Route::get('serviceAction/index', [App\Http\Controllers\ServiceController::class, 'index'])->name('showServe');
Route::post('serviceAction/add', [App\Http\Controllers\ServiceController::class, 'add'])->name('addServe');
Route::get('serviceAction/edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('editServe');
Route::post('serviceAction/update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('updateServe');
Route::get('serviceAction/delate/{id}', [App\Http\Controllers\ServiceController::class, 'delate'])->name('delateServe');


Route::get('categorieAction/index', [App\Http\Controllers\CategoyController::class, 'index'])->name('show');
Route::post('categorieAction/add', [App\Http\Controllers\CategoyController::class, 'insert'])->name('addCategorie');
Route::get('categorieAction/edit/{id}', [App\Http\Controllers\CategoyController::class, 'edit'])->name('editCategorie');
Route::post('categorieAction/update/{id}', [App\Http\Controllers\CategoyController::class, 'update'])->name('updateCategorie');
Route::get('categorieAction/delate/{id}', [App\Http\Controllers\CategoyController::class, 'delate'])->name('delateCategorie');


// Route::resource('serviceAction',App\Http\Controllers\ServicrControl::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('category', 'category');
