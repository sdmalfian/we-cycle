@extends('layout.header-transaksi')
@section('title', 'Riwayat Tukar Poin')

@section('transaction-content')
@section('transaction-title', 'RIWAYAT TUKAR POIN')
<main class="main-container" style="min-height: calc(100vh - 64px);">
    <div class="pt-3 mx-3">
        <div class="card border-0 rounded-3 shadow mb-2">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-2">
                        <img class="min-w-100" style="height: 36px;" src=" {{ asset('images/kerajinan.jpg')}}"
                            alt="reward">
                    </div>
                    <div class="col-6 text-start">
                        <p class="mb-0 fw-bold">
                            Pot Gemoy
                        </p>
                        <p class="mb-0 font-sm text-muted">
                            03 Maret 2023
                        </p>
                    </div>
                    <div class="col-4 text-center">
                        <p class="mb-0 font-sm fw-bold text-white bg-primary rounded-3">
                            Pending
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0 rounded-3 shadow mb-2">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-2">
                        <img class="min-w-100" style="height: 36px;" src=" {{ asset('images/kerajinan.jpg')}}"
                            alt="reward">
                    </div>
                    <div class="col-6 text-start">
                        <p class="mb-0 fw-bold">
                            Pot Gemoy
                        </p>
                        <p class="mb-0 font-sm text-muted">
                            03 Maret 2023
                        </p>
                    </div>
                    <div class="col-4 text-center">
                        <p class="mb-0 font-sm fw-bold text-white bg-primary rounded-3">
                            Pending
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0 rounded-3 shadow mb-2">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-2">
                        <img class="min-w-100" style="height: 36px;" src=" {{ asset('images/kerajinan.jpg')}}"
                            alt="reward">
                    </div>
                    <div class="col-6 text-start">
                        <p class="mb-0 fw-bold">
                            Pot Gemoy
                        </p>
                        <p class="mb-0 font-sm text-muted">
                            03 Maret 2023
                        </p>
                    </div>
                    <div class="col-4 text-center">
                        <p class="mb-0 font-sm fw-bold text-white bg-primary rounded-3">
                            Pending
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection