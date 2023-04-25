@extends('layout.main')

@section('title', 'User Dashboard | We-Cycle')

@section('content')
<header class="dashboard-header gradient-top-bottom">
    <div class="header-user">
        <div class="container text-center px-4">
            <img class="mt-2" src="{{ asset('images/logo-hero.png') }}" alt="we-cycle-logo" srcset="">
            <div class="row mt-4 ">
                <div class="col d-flex justify-content-between text-start text-light">
                    <div class="text">
                        <p style="font-weight: 600; letter-spacing: 1px;">
                            Hi,<br>
                            {{ $user->username }}
                        </p>
                    </div>
                    <div class="profile">
                        <img src="{{ $user->picture ?? asset('images/profile3.png') }}" alt="profile"
                            style="width: 48px; height:48px;" class="rounded-circle">
                    </div>
                </div>
            </div>
            <div class="row mt-4 mx-3 py-2 rounded-pill bg-light">
                <div class="col">
                    <p class="m-0 fw-bold">{{ $point->total_points }}</p>
                    <p class="m-0 font-sm">Points</p>
                </div>
                <div class="col border-start border-end border-2">
                    <p class="m-0 fw-bold">
                        {{ $transactions->sum('total_income') }}
                    </p>
                    <p class="m-0 font-sm">Profit</p>
                </div>
                <div class="col">
                    <p class="m-0 fw-bold">1000</p>
                    <p class="m-0 font-sm">Reward</p>
                </div>
            </div>
        </div>
    </div>
</header>
<main id="dashboard-page" class="main-container">
    <div class="container pt-4 px-5">
        <a href="/tukar-poin" class="card rounded-4 mb-1 landing-card-shadow border-light"
            style="background-color: #0575E6 ">
            <div class="row g-0">
                <div class="col-3 d-flex justify-content-center align-items-center text-center">
                    <img class="max-w-100" src="{{ asset('images/icons/gift-light.png') }}"
                        class="img-fluid rounded-start" alt="reward">
                </div>
                <div class="col-9 d-flex align-items-center px-2 py-3">
                    <div class="card-body text-light">
                        <h6 class="card-title fw-bold mb-0">
                            Tukar Poinmu Sekarang!
                        </h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <section class="container mt-4 pb-4">
        <div class="d-flex justify-content-between mx-3">
            <h6 class="fw-bold">
                Riwayat Transaksi
            </h6>
            <a class="text-dark fs-6" href="/history/transaction">
                Lihat Semua
            </a>
        </div>
        @if (isset($transactions) || !empty($transactions))
        @forelse ($transactions as $transaction)
        <div class="mt-3 mx-1">
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
        </div>
        @empty
        <div class="mt-3 mx-1">
            <div class="card p-2 border-0 shadow mb-2">
                <h5 class="text-center text-danger">
                    Anda belum pernah melakukan transaksi.
                </h5>
            </div>
        </div>
        @endforelse
        @endif

    </section>
    {{-- NAVIGATION MENU --}}
    <div class="navigation-menu">
        <div class="container d-flex justify-content-evenly">
            <div>
                <a class="btn btn-lg border-0 px-1 py-auto" href="/dashboard">
                    <i class="bi bi-house" style="font-size: 1.5rem; color:#0575E6;"></i>
                    <p class="text-dark fw-bold font-sm p-0 m-0">Beranda</p>
                </a>
            </div>
            <div>
                <a class="btn btn-lg border-0 px-1 py-auto" href="/kategori-sampah">
                    <i class="bi bi-trash" style="font-size: 1.5rem; color:#0575E6;"></i>
                    <p class="text-dark fw-bold font-sm p-0 m-0">Kategori</p>
                </a>
            </div>
            <div>
                <a class="btn btn-lg border-0 px-1 py-auto" href="/profile">
                    <i class="bi bi-person" style="font-size: 1.5rem; color:#0575E6;"></i>
                    <p class="text-dark fw-bold font-sm p-0 m-0">Profil</p>
                </a>
            </div>
            <div>
                <a class=" btn btn-lg border-0 px-1 py-auto" href="#!" role="button">
                    <i class="bi bi-gear" style="font-size: 1.5rem; color:#0575E6;"></i>
                    <p class="text-dark fw-bold font-sm p-0 m-0">Pengaturan</p>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection