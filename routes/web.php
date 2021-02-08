<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::get("/", [App\Http\Controllers\BlogController::class,'index'])->name('index');
    Route::get("/create",[App\Http\Controllers\BlogController::class,'create'])->name('create');
    Route::post("/", [App\Http\Controllers\BlogController::class,'store'])->name('store');
    Route::get("/{id}", [App\Http\Controllers\BlogController::class,'show'])->name('show');
    Route::delete("/{id}",[App\Http\Controllers\BlogController::class,'destroy'])->name('destroy');

    Route::get("/createPost/{id}", [App\Http\Controllers\PostController::class,'createPost'])->name('createPost');
    Route::get("/showPost/{id}", [App\Http\Controllers\PostController::class,'showPost'])->name('showPost');
    Route::post("/storePost/{id}", [App\Http\Controllers\PostController::class,'storePost'])->name('storePost');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');     //queremos que la pag principal del proj sea index
// Route::prefix("blog")->group(function(){
    
// });

// Route::prefix("post")->group(function(){
//     Route::get("/createPost/{id}", [App\Http\Controllers\PostController::class,'createPost'])->name('createPost');
//     Route::get("/showPost/{id}", [App\Http\Controllers\PostController::class,'showPost'])->name('showPost');
//     Route::post("/storePost/{id}", [App\Http\Controllers\PostController::class,'storePost'])->name('storePost');
// });
