<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('career.home');
        } else {
            return back()->withErrors(['email' => 'As credenciais informadas não coincidem com nossos registros.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}