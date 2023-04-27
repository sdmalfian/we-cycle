<?php

namespace App\Http\Controllers\UserApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function profile()
    {
        return view('user-app/profile');
    }

    public function settings()
    {
        return view('user-app/pengaturan');
    }
}
