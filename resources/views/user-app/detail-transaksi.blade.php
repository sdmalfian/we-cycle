@extends('layout.header-transaksi')
@section('title', 'Detail Transaksi')

@section('transaction-content')
@section('transaction-title', 'DETAIL TRANSAKSI')
<main class="main-container" style="min-height: calc(100vh - 64px);">
    <div class="pt-3 mx-3">
        <p class="btn btn-outline-primary rounded-pill text-dark">
            ID #{{ $transaction->id }}
        </p>
        <section>
            <div class="row d-flex align-items-center">
                <h6 class="fw-bold text-muted">
                    Sampah Ditukarkan Oleh
                </h6>
                <div class="col">
                    <p class="mb-0 fw-bold">
                        {{ auth()->user()->username }}
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        {{ $transaction->created_at->format('d-m-Y') }}
                    </p>
                </div>
            </div>
            <div class="row pt-2 d-flex align-items-center">
                <h6 class="fw-bold text-muted">
                    Sampah Diterima oleh
                </h6>
                <div class="col">
                    <p class="mb-0 fw-bold">
                        {{ $admin->name }}
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        {{ $transaction->created_at->format('d-m-Y') }}
                    </p>
                </div>
            </div>
            <hr>
        </section>
        <section>
            <h6 class="fw-bold text-muted">
                Jenis Sampah
            </h6>
            <div class="row pt-1">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        {{ $sampah->name }}
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        {{ $transaction->total_weight }} Kg
                    </p>
                </div>
            </div>
            <hr>
        </section>
        <section>
            <div class="row">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Total Pendapatan
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        Rp. {{ $transaction->total_income }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Jumlah Poin Didapat
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold text-secondary">
                        {{ $transaction->point_received }} Poin
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection