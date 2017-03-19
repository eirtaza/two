<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function get(){
        return view('register');
    }

    public function post(Request $request){
        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5'
        ]);

        User::create($request->all());

    }
}
