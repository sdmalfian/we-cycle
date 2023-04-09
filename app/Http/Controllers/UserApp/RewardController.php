<?php

namespace App\Http\Controllers\UserApp;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function index()
    {
        $data = Reward::all();
        return view('user-app.tukar-poin.tukar-poin-page')->with('data', $data);
    }
}
