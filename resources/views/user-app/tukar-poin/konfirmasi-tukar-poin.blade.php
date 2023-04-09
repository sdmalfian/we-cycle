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
                        Dwi Oktaviani Arifin
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
                        12.00 pm <br>
                        03 Maret 2023
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
                        Pot Gemoy
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
                        500 Poin
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
                        900 Poin
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
                    <p class="mb-0 fw-bold text-secondary">
                        400 Poin
                    </p>
                </div>
            </div>
        </section>
        <div class="row mt-5 mx-4">
            <a class="btn btn-primary rounded-pill fw-bold my-2 px-4 py-2" href="#">
                Konfirmasi <i class="bi bi-chevron-right"></i>
            </a>
        </div>
    </div>
</main>
@endsection