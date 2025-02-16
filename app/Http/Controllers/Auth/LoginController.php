<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function handle($request, Closure $next, ...$guards)
{
    if (Auth::guard($guards)->guest()) {
        return redirect()->route('login');
    }

    return $next($request);
}
    public function login(){
        return view("auth.login");
    }
    public function loginSubmit(Request $request){
        $request->validate([
        'email' => 'required', 
        'password' => 'required',
            ]);
        $credentials = $request->only('email', 'password'); 
        
        if (Auth::attempt($credentials)) {
            // Authentication passed 
        return redirect()->route('adminDashboard');
        }
        return back()->withErrors(
        [ 'email' => 'The provided credentials do not match our records.', ]
        );
    }
    public function showchangepwdform(){
    return view('auth.changepassword');
    }

    public function updatepassword(Request $request)
    {
        $request->validate([
        'new_password' => 'required', 
        'retype_password' => 'required',
        ]);
        Auth::user()->password = Hash::make($request->get('new_password'));
        Auth::user()->save();

        return redirect()->route('adminDashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

