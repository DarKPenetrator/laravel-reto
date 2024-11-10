<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greet()
    {
        return response()->json('hello world');
    }

    public function greetWithName($name)
    {
        return response()->json("hello world $name");
    }

    public function greetWithParams(Request $request)
    {
        $name = $request->query('name', 'world');
        return response()->json("hello world $name");
    }
}
