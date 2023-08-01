<?php

use App\Http\Controllers\CategoyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
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
    return view('Accueil');
})->name("Accueil");

Route::get('layout.master', function () {
    return view('layout.master');
})->name("master");


Route::get('categorie',[CategoyController::class , 'affiche'] );
Route::get('transport/{id}',[ServiceController::class , 'transport'] );
Route::get('transport/imprimer/{id}',[ServiceController::class , 'imprimer'] );
Route::get('transport/imprimer/print/{id}',[ServiceController::class , 'print'] );

Route::get('admin/dashbord', function () {
    return view('admin');
})->name("admin");


Route::get('/contact', function () {
    return view("contact");
});
Route::get('/transport', function () {
    return view("/transport");
})->name('more');


Route::get('/education', function () {
    return view("/education");
})->name('education');

Route::get('auth', function () {
    return view("layouts.auth");
})->name('auth');

Route::get('layouts/app', function () {
    return view("app");
})->name("home");

Route::get('auth', function () {
    return view("layouts/auth");
})->name("auth");

Route::get('addService', function () {
    return view("pages.addService");
})->name("addService");

Route::get('test', function () {
    return view("pages.test");
})->name("test");

Route::get('update', function () {
    return view("pages.update");
})->name("update");

// Route::get('addCategorie', function () {
//     return view("pages.addCategorie");
// })->name("addCategorie");

// Route::get('updateServe', function () {
//     return view("pages.updateServe");
// })->name("updateServe");

// Route::get('serviceAction', function () {
//     return view("pages/serviceAction");
// })->name("serviceAction");

// Route::get('categorieAction', function () {
//     return view("pages/categorieAction");
// })->name("categorie");

Route::view('login', 'login');
Route::view('about', 'about');



Route::middleware(['auth'])->group(function () {

        Route::prefix('categorieAction')->group(function () {

        Route::get('/', [App\Http\Controllers\CategoyController::class, 'index'])->name('show');
        Route::post('/add', [App\Http\Controllers\CategoyController::class, 'insert'])->name('addCategorie');
        Route::get('/edit/{id}', [App\Http\Controllers\CategoyController::class, 'edit'])->name('editCategorie');
        Route::post('/update/{id}', [App\Http\Controllers\CategoyController::class, 'update'])->name('updateCategorie');
        Route::post('/delate/{id}', [App\Http\Controllers\CategoyController::class, 'delate'])->name('delateCategorie');
        Route::post('/search', [App\Http\Controllers\CategoyController::class, 'search'])->name('searchCategory');
    });

        Route::prefix('serviceAction')->group(function () {

            Route::get('/', [App\Http\Controllers\ServiceController::class, 'index'])->name('showServe');
            Route::post('/add', [App\Http\Controllers\ServiceController::class, 'add'])->name('addServe');
            Route::get('/edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('editServe');
            Route::post('/update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('updateServe');
            Route::post('/delate/{id}', [App\Http\Controllers\ServiceController::class, 'delate'])->name('delateServe');
    });

        Route::prefix('userAction')->group(function () {
            Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('showUsers');
            Route::post('/add', [App\Http\Controllers\UserController::class, 'insert'])->name('addUser');
            Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('editUser');
            Route::post('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('updateUser');
            Route::get('/delate/{id}', [App\Http\Controllers\UserController::class, 'delate'])->name('delateuser');
    });

        Route::prefix('structAction')->group(function () {
        Route::get('/', [App\Http\Controllers\StructureController::class, 'index'])->name('showStucture');
        Route::post('/add', [App\Http\Controllers\StructureController::class, 'insert'])->name('addStucture');
        Route::get('/edit/{id}', [App\Http\Controllers\StructureController::class, 'edit'])->name('editStucture');
        Route::post('/update/{id}', [App\Http\Controllers\StructureController::class, 'update'])->name('updateStucture');
        Route::get('/delate/{id}', [App\Http\Controllers\StructureController::class, 'delate'])->name('delateStucture');
    });
});

// Route::resource('serviceAction',App\Http\Controllers\ServicrControl::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
