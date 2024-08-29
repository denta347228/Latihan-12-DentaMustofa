<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class,'register']);

route::group(['middleware'=> ['api']], function () {

Route::post('logout', [AuthController::class,'logout']);
Route::post('me', [AuthController::class,'me']);

});