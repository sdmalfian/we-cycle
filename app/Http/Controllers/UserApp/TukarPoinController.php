<?php

namespace App\Http\Controllers\UserApp;

use App\Http\Controllers\Controller;
use App\Models\Point;
use App\Models\Reward;
use Illuminate\Http\Request;

class TukarPoinController extends Controller
{
    public function index()
    {
        $hiasan = Reward::where('category', 'hiasan')->get()->all();
        $peralatan = Reward::where('category', 'peralatan')->get()->all();
        $perlengkapan = Reward::where('category', 'perlengkapan')->get()->all();
        $point = Point::where('user_id', auth()->user()->id)->first();

        // dd($hiasan, $peralatan);

        return view('user-app.tukar-poin.tukar-poin-page')->with([
            'hiasan' => $hiasan,
            'peralatan' => $peralatan,
            'perlengkapan' => $perlengkapan,
            'point' => $point
        ]);
    }
}
