<?php

namespace App\Http\Controllers\UserApp;

use App\Models\User;
use App\Models\Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user-app/register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        Point::create([
            'user_id' => $user->id,
            'total_points' => 0
        ]);

        return redirect('/login')->with('success', 'Registration Succesful! Please Login.');
    }
}
