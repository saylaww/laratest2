<?php

use App\Http\Controllers\AuthorController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('person',[Controller::class,'all'])->middleware('auth:sanctum');
Route::get('post',[PostController::class,'index'])->middleware('auth:sanctum');
Route::get('music',[MusicController::class,'index']);

Route::get('/mono/test', [PostController::class,'test2'])->middleware('auth:sanctum');

Route::post('login',[AuthorController::class,'login']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('author/test', [AuthorController::class, 'test'])->middleware('auth:sanctum');


