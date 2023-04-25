@extends('layout.header-transaksi')
@section('title', 'PENGATURAN')

@section('transaction-content')
@section('transaction-title', 'PENGATURAN')
<main class="main-container" style="min-height: calc(100vh - 64px);">
    <div>
        <h6 class="mx-3 pt-1 fw-bold">
            Pengaturan Akun
        </h6>
        <div class="pt-2 mx-3">
            <div class="card border-0 shadow mb-2">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-7 text-start d-flex">
                            <i class="bi bi-pencil-square me-1"></i>
                            <p class="mb-0 fw-bold">
                                Edit Profil
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow mb-2">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-7 text-start d-flex">
                            <i class="bi bi-shield-lock-fill me-1"></i>
                            <p class="mb-0 fw-bold">
                                Keamanan Akun
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow mb-2">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-7 text-start d-flex">
                            <i class="bi bi-globe me-1"></i>
                            <p class="mb-0 fw-bold">
                                Bahasa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h6 class="mx-3 pt-3 fw-bold">
            Bantuan
        </h6>
        <div class="pt-2 mx-3">
            <div class="card border-0 shadow mb-2">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-7 text-start d-flex">
                            <i class="bi bi-question-circle me-1"></i>
                            <p class="mb-0 fw-bold">
                                Pusat Bantuan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-2">
        <h6 class="mx-3 pt-3 fw-bold">
            Tentang
        </h6>
        <div class="pt-2 mx-3">
            <div class="card border-0 shadow mb-2">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-7 text-start d-flex">
                            <i class="bi bi-pencil-square me-1"></i>
                            <p class="mb-0 fw-bold">
                                Syarat Dan Ketentuan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow mb-2">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-7 text-start d-flex">
                            <i class="bi bi-shield-lock-fill me-1"></i>
                            <p class="mb-0 fw-bold">
                                Kebijakan Privasi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow mb-2">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-7 text-start d-flex">
                            <i class="bi bi-globe me-1"></i>
                            <p class="mb-0 fw-bold">
                                Tentang We-Cycle
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 mx-4 pb-5 px-3">
        <a class="btn btn-danger rounded-pill fw-bold my-2 px-4 py-2" href="#">
            LOGOUT
        </a>
    </div>
</main>
@endsection