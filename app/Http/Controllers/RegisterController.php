<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() 
    {
        return view('register.create');
    }

    public function store()
    {
        //create submit 
        return(request()->all());
        /*
        request()->validate([
            'firstName' => ['required', 'max:255'], 
            'lastName' => ['required', 'max:255'], 
            'username' => ['required', 'max:255', 'min:3'], 
            'emailAdress' => ['required', 'email', 'max:255'], 
            'subjectSelect' => 'required', 
            'textereainfo' => 'required'
        ]);
        */
    }
}