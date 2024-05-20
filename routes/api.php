<?php

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

Route::middleware('token')->get('/user', function (Request $request) {
 return $request->user();
});