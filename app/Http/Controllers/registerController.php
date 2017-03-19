<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function get()
    {
        return view('register');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5'
        ]);

        $newUser = User::create($request->all());
        $newUser->code = str_random(40);
        $newUser->save();

        //send verification email
    }

    public function created(){
        return view('created');
    }

    public function verify($id, $code)
    {
        $user = \App\User::find($id);
        $status = 0;
        if ($user->code == $code) {
            $user->verified = 1;
            $user->save();
            $status = 'Your account has been activated';
        } else {
            $status = "Problem in activation";
        }

        return view('verify', compact('status'));
    }
}
