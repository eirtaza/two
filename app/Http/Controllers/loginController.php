<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function get()
    {
        return view('login');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:5',
        ]);

        if (\Auth::attempt(['email' => $request->email, 'password' => $request->password, 'verified' => 1 ])) {
            return redirect()->intended('dashboard');
        } else
            return \Redirect::back()->withErrors(['Invalid username/password.']);
    }
}
