@extends('layout.header-transaksi')
@section('title', 'Riwayat Poin')

@section('transaction-content')
@section('transaction-title', 'RIWAYAT POIN')
<main class="main-container" style="min-height: calc(100vh - 64px);">
    <div class=" pt-3 mx-3">
        @if (isset($transactions) || !empty($transactions))
        @forelse ($transactions as $transaction)
        <div class="card border-0 shadow mb-2">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-7 text-start">
                        <p class="mb-0 fw-bold">
                            Setoran Sampah
                        </p>
                        <p class="mb-0 font-sm text-muted">
                            {{ $transaction->created_at }}
                        </p>
                    </div>
                    <div class="col-5 text-end">
                        <p class="mb-0 pe-3 fw-bold text-main">
                            + {{ $transaction->point_received }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="card border-0 shadow mb-2">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col text-center text-danger">
                        <p class="mb-0 fw-bold">
                            Anda belum pernah melakukan transaksi
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforelse
        @endif
    </div>
</main>
@endsection