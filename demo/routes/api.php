<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PaysController,LoginController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/pays',[PaysController::class,'index'])->middleware('auth:sanctum')->name('index');
Route::post('/pays',[PaysController::class,'store'])->name('pays.store');
Route::get('/pays/{id}',[PaysController::class,'edit'])->name('pays.edit');
Route::put('/pays/update/{id}',[PaysController::class,'update'])->name('pays.update');
Route::delete('/pays/{id}',[PaysController::class,'destroy'])->name('pays.destroy');

Route::post('/register',[LoginController::class,'register'])->name('register');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->middleware('auth:sanctum')->name('logout');
