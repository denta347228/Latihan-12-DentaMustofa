<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\GeminiAIController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=> 'sarch'] , function () {
    Route::get('/', [UserController::class,"searchUser"]);
    Route::get('/{$id}', [UserController::class,"searchUser"]);

});

Route::get('/chat', function () {
    return view('chat');
});

Route::post('/chat', [GeminiAIController::class, 'handleChat'])->name('chat');

Route::resource('/history_chat', GeminiAIController::class);

//kontroler biodata
Route::resource('/biodata', BiodataController::class);

// Route::group(['prefix'=> 'sarch'] , function () {
//     Route::POST('/', [UserController::class,"searchUser"]);
//     Route::POST('/{$id}', [UserController::class,"searchUser"]);

// });



// Route::get("/search", [UserController::class,"searchUser"]);
// Route::get("/finduser/{id}", [UserController::class,"finduser"]);

Route::get('/admin', function () {
    return view('admin.kategori');
});

Route::get('/adminkategori', [KategoriController::class, 'index']);




