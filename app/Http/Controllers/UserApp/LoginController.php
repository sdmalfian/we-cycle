<?php

namespace App\Http\Controllers\UserApp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Point;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('user-app/login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $points = Point::where('user_id', auth()->user()->id)->firstOrFail();
        $transactions = Transaction::where('user_id', auth()->user()->id)->get()->all();



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
            dd($points, $transactions);
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function login()
    {
        return view('user-app/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
