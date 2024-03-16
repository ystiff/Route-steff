<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/hello', function () {
    return 'Hello steff';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 
Route::get('/user', [UserController::class, 'index']);

Route::match(['put', 'patch', 'post'], '/updateUserInfo', function() {
    return "welcome to my World";
});

Route::get('/users', function (Request $request){
    return $request->name . '-'.$request->email;
});

