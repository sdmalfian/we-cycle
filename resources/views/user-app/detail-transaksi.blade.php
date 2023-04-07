@extends('layout.header-transaksi')
@section('title', 'Detail Transaksi')

@section('transaction-content')
@section('transaction-title', 'DETAIL TRANSAKSI')
<main class="main-container" style="min-height: calc(100vh - 64px);">
    <div class="pt-3 mx-3">
        <p class="btn btn-outline-primary rounded-pill text-dark">
            #ID 991233
        </p>
        <section>
            <div class="row">
                <h6 class="fw-bold text-muted">
                    Sampah Ditukarkan Oleh
                </h6>
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Dwi Oktaviani Arifin
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        11.33 <br>
                        03 Maret 2023
                    </p>
                </div>
            </div>
            <div class="row pt-2">
                <h6 class="fw-bold text-muted">
                    Sampah Diterima oleh
                </h6>
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Admin Dimas
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        12.00 pm <br>
                        03 Maret 2023
                    </p>
                </div>
            </div>
            <hr>
        </section>
        <section>
            <h6 class="fw-bold text-muted">
                Jenis Sampah
            </h6>
            <div class="row">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Sampah Plastik
                    </p>
                    <p class="mb-0">
                        Plastik PET
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        1kg <br>
                        Rp. 1000
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 fw-bold">
                        Sampah Kaca
                    </p>
                    <p class="mb-0">
                        Kaca Belin
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-0 fw-bold">
                        1kg <br>
                        Rp. 1999
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
                        Rp. 3000
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
                    <p class="mb-0 fw-bold">
                        500pts
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection