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
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $point = Point::where('user_id', $user->id)->first();
            $transactions = Transaction::where('user_id', $user->id)->latest()->limit(3)->get();

            return redirect()->intended('dashboard')->with([
                'user' => $user,
                'point' => $point,
                'transactions' => $transactions
            ]);
        }

        return back()->with('loginError', 'Invalid credentials.');
    }

    public function login()
    {
        $user = Auth::user();
        $point = Point::where('user_id', $user->id)->first();
        $transactions = Transaction::where('user_id', $user->id)->latest()->limit(3)->get();

        return view('user-app/dashboard')->with([
            'user' => $user,
            'point' => $point,
            'transactions' => $transactions
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function profile()
    {
        return view('user-app/profile');
    }
}
