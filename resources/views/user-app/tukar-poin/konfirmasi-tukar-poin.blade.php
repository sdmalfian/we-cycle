@extends('layout.header-transaksi')
@section('title', 'Konfirmasi Tukar Poin | We-Cycle')

@section('transaction-content')
@section('transaction-title', 'KONFIRMASI')
<main class="main-container" style="min-height: calc(100vh - 64px);">
    <div class="pt-3 mx-3">
        <h5 class="fw-bold">
            Detail Transaksi
        </h5>
        <section class="pt-3">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Nama Pengguna
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0">
                        {{ auth()->user()->username }}
                    </p>
                </div>
            </div>
            <div class="row pt-2 d-flex align-items-center">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Waktu Penukaran
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0">
                        {{ $time }}
                    </p>
                </div>
            </div>
            <div class="row pt-2 d-flex align-items-center">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Produk
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0">
                        {{ $reward->name }}
                    </p>
                </div>
            </div>
            <div class="row pt-2 d-flex align-items-center">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Stok tersedia
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0">
                        {{ $reward->stock }}
                    </p>
                </div>
            </div>
            <hr>
        </section>
        <section>
            <div class="row">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Total
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        {{ $reward->price }} Poin
                    </p>
                </div>
            </div>
            <h5 class="fw-bold pt-3 pb-1">
                Pembayaran
            </h5>
            <div class="row">
                <div class="col">

                    <p class="mb-0 fw-bold">
                        <i class="bi bi-cash-coin"></i>
                        Poin Saya
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold text-secondary">
                        {{ $point->total_points }} Poin
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Sisa Poin
                    </p>
                </div>
                <div class="col text-end">
                    @if ($point_left < $reward->price)
                        <p class="mb-0 fw-bold text-danger">
                            {{ ($point->total_points - $reward->price) }} Poin
                        </p>
                        @elseif ($reward->stock < 1) <div class="row mt-5 mx-4">
                            <a class="btn btn-danger disabled rounded-pill fw-bold my-2 px-4 py-2" href="#">
                                Stok tidak tersedia <i class="bi bi-chevron-right"></i>
                            </a>
                </div>
                @else
                <p class="mb-0 fw-bold text-secondary">
                    {{ ($point->total_points - $reward->price) }} Poin
                </p>
                @endif
            </div>
    </div>
    </section>
    @if ($point->total_points < $reward->price)
        <div class="row mt-5 mx-4">
            <a class="btn btn-danger disabled rounded-pill fw-bold my-2 px-4 py-2" href="#">
                Poin tidak cukup <i class="bi bi-chevron-right"></i>
            </a>
        </div>
        @else
        <div div class="row mt-5 mx-4">
            <form action="{{ url('/tukar-poin/reward/'.$reward->id) }}" method="post">
                @csrf
                <button class="btn btn-primary rounded-pill fw-bold my-2 px-4 w-100" href="/tukar-poin/success">
                    Konfirmasi <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </div>
        @endif
        </div>
</main>
@endsection