<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $validationData = request()->validate([
            'firstName' => ['required', 'max:255'], 
            'lastName' => ['required', 'max:255'], 
            'username' => ['required', 'max:255', 'min:3'], 
            'emailAdress' => ['required', 'email', 'max:255'], 
            'subjectSelect' => 'required', 
            'textereaInfo' => 'required'
        ]);

        User::create($validationData);

         dd('Redirecting to home');

        return redirect(route('home'));

    }
}