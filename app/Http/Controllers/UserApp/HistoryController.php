<?php

namespace App\Http\Controllers\UserApp;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function transactionHistory()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)->latest()->get()->all();
        return view('user-app/riwayat-transaksi')->with(['transactions' => $transactions]);
    }

    public function pointHistory()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)->latest()->get()->all();
        // dd($transactions);
        return view('user-app/riwayat-poin')->with(['transactions' => $transactions]);
    }
}
