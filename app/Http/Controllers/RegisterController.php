<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.create');
    }

    public function create(Request $request)
    {
        //create submit 
        dd($request);
    }
}