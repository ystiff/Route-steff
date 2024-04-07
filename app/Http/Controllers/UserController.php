<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                "id"=> 1,
                "name" => "Leanne Graham",
                "username" => "Bret",
                "email" => "Sincere@april.biz",
                "phone" => "1-770-736-8031 x56442"
            ],
            [
                "id" => 2,
                "name" => "Ervin Howell",
                "username" => "Antonette", 
                "email" => "Sincere@april.biz",
                "phone" => "1-770-736-8031 x09125"
            ],
            [
                "id" => 3,
                "name" => "Clementine Bauch",
                "username" => "Samantha", 
                "email" => "Shanna@melissa.tv",
                "phone" => "010-692-6593 x09125"
            ]

        ];
        
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
