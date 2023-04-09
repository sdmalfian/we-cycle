<?php

namespace App\Http\Controllers\UserApp;

use App\Models\Sampah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampahController extends Controller
{
    public function index()
    {
        $data = Sampah::all();
        return view('user-app.sampah')->with('data', $data);
    }
}
