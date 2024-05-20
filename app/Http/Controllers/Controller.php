<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}


use Illuminate\Support\Facades\DB;
 
$users = DB::table('users')->get();
 
foreach ($users as $user) {
   echo $user->name;
}
