@extends('layout.header-transaksi')
@section('title', 'Riwayat Transaksi')

@section('transaction-content')
@section('transaction-title', 'RIWAYAT TRANSAKSI')
<main class="main-container" style="min-height: calc(100vh - 64px);">
    @if (isset($transactions) || !empty($transactions))
    @forelse ($transactions as $transaction)
    <div class="pt-3 mx-3">
        <a href="{{ url('/transaction/'.$transaction->id.'/detail') }}" class="text-decoration-none text-dark">
            <div class="card border-0 shadow mb-2">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-7 text-start">
                            <p class="mb-0 fw-bold">
                                Setoran Sampah
                                <span class="rounded-pill text-light bg-green-main px-2 fw-bold">
                                    {{ $transaction->point_received }}
                                </span>
                            </p>
                            <p class="mb-0">
                                Total:
                                <span class="fw-bold" style="color: #0575E6">
                                    {{ $transaction->total_weight }} Kg
                                </span>
                            </p>
                            <p class="mb-0 font-sm text-muted">
                                {{ $transaction->created_at }}
                            </p>
                        </div>
                        <div class="col-5 text-end">
                            <p class="mb-0 fw-bold">
                                Pendapatan
                            </p>
                            <p class="mb-0 pe-3 text-secondary fw-bold">
                                Rp. {{$transaction->total_income}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @empty
    <div class="mx-3 py-2">
        <div class="card border-0 shadow mb-2">
            <h5 class="text-center text-danger">
                Maaf, Kamu belum pernah melakukan transaksi!
            </h5>
        </div>
    </div>
    @endforelse
    @endif
</main>
@endsection