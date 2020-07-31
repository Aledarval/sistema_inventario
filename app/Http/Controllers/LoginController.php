<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */

    public function login(Request $request)
    {
        return view('user.login');
    }
    public function authenticate(Request $request)
    {

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([
            $login_type => $request->input('login'),
        ]);
        $credentials = $request->only($login_type, 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'login' => 'auth.error_incorre',
                ]);
        }
    }
}