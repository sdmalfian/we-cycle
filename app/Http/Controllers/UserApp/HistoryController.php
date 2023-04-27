<?php

namespace App\Http\Controllers\UserApp;

use App\Models\Sampah;
use App\Models\TukarPoin;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        $sampah = Sampah::where('id', $transaction->sampah_id)->first();
        $admin = DB::table('cms_users')->where('id', $transaction->admin_id)->first();
        return view('user-app/detail-transaksi')->with([
            'transaction' => $transaction,
            'sampah' => $sampah,
            'admin' => $admin
        ]);
    }

    public function transactionHistory()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)->latest()->get()->all();
        return view('user-app/riwayat-transaksi')->with(['transactions' => $transactions]);
    }

    public function pointHistory()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)->latest()->get()->all();
        return view('user-app/riwayat-poin')->with(['transactions' => $transactions]);
    }

    public function tukarPointHistory()
    {
        $tukarPoin_history = TukarPoin::where('user_id', auth()->user()->id)->latest()->get()->all();
        return view('user-app/riwayat-pesanan')->with(['tukarPoin_history' => $tukarPoin_history]);
    }
}
