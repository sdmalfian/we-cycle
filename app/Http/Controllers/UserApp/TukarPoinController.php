<?php

namespace App\Http\Controllers\UserApp;

use App\Http\Controllers\Controller;
use App\Models\Point;
use App\Models\Reward;
use App\Models\TukarPoin;

class TukarPoinController extends Controller
{
    public function index()
    {
        $hiasan = Reward::where('category', 'hiasan')->get()->all();
        $peralatan = Reward::where('category', 'peralatan')->get()->all();
        $perlengkapan = Reward::where('category', 'perlengkapan')->get()->all();
        $point = Point::where('user_id', auth()->user()->id)->first();

        return view('user-app.tukar-poin.tukar-poin-page')->with([
            'hiasan' => $hiasan,
            'peralatan' => $peralatan,
            'perlengkapan' => $perlengkapan,
            'point' => $point
        ]);
    }

    public function show($id)
    {
        $reward = Reward::findOrFail($id);
        $point = Point::where('user_id', auth()->user()->id)->first();
        return view('user-app/tukar-poin/reward')->with(['reward' => $reward, 'point' => $point]);
    }

    public function confirm($id)
    {
        $reward = Reward::findOrFail($id);
        $point = Point::where('user_id', auth()->user()->id)->first();
        $time = date("Y-m-d");
        $point_left = $point->total_points - $reward->price;
        return view('user-app/tukar-poin/konfirmasi-tukar-poin')->with([
            'reward' => $reward,
            'point' => $point,
            'time' => $time,
            'point_left' => $point_left
        ]);
    }

    public function store($id)
    {
        $reward = Reward::findOrFail($id);
        $point = Point::where('user_id', auth()->user()->id)->first();

        if ($point->total_points >= $reward->price && $reward->stock >= 1) {
            TukarPoin::create([
                'user_id' => auth()->user()->id,
                'reward_id' => $reward->id,
                'quantity' => 1,
                'total_price' => $reward->price,
                'status' => 'Pending'
            ]);

            $reward->update([
                'stock' => ($reward->stock - 1)
            ]);

            $point->update([
                'total_points' => ($point->total_points - $reward->price)
            ]);

            return view('user-app/tukar-poin/success');
        }

        return view('user-app/tukar-poin/failed');
    }
}
