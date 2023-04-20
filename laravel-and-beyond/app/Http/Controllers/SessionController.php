<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    //  Instantiate a new LoginRegisterController instance
   


    // Display a registration form
    public function register()
    {
        return view('user.register');
    }


    public function handleRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect('/profile')
        ->withSuccess('You have successfully registered & logged in!');
    }
    public function login()
    {

        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([ 
        'email' => 'required|email',
        'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) 
        {                      
            $request->session()->regenerate();  
            return redirect('/profile')
                ->withSuccess('You have successfully logged in!');                
        }

            return back()->withErrors([
                'email' => 'Your provided credentials do not match',
        ])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
