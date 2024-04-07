<?php
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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


 
// Route::get('/greetings', [UserController::class,'index']);


Route::middleware('auth:sanctum')->get('/users ', function (Request $request) {
    return $request->user();
});

// Route::middleware('extract.token')->group (function () {
//     Route::get('/user', function(){
//         return 'users'  ;
//     });

// Route::middleware('extract.token')->group (function (){
//     Route::get('/users', [UserController::class, 'index']); 
//     Route::patch('/users/{user}', [UserController::class, 'update']);
//     Route::post('/posts', [PostController::class, 'store']);
//     Route::put('/posts/{post}', [PostController::class, 'update']);
//     Route::delete('/posts/{post}', [PostController::class, 'destroy']);
    
// });

// });
Route::middleware('extract.token')->group(function(){
    Route::GET('/test', function() {
        return 'HTTP Request: Get';
    });
    Route::POST('/test', function(){
        return 'HTTP Request: Post';
    });
    Route::PUT('/test', function(){
        return 'HTTP Request: Put';
    });
    Route::PATCH('/test', function(){
        return 'HTTP Request: Patch';
    });
    Route::DELETE('/test', function(){
        return 'HTTP Request: Delete';
    });

});