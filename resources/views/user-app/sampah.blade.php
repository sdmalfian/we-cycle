@extends('layout.main')
@section('title', 'Kategori Sampah | We-Cycle')

@section('content')
<header class="gradient-brand-toRight mx-auto rounded-bottom" style="max-width: 428px; width: 100%">
    {{-- Nav Header --}}
    <div class="container text-center px-4 py-4">
        <div class="row">
            <div class="col py-4 text-center text-light">
                <h4 class="mb-0 fw-bold" style="letter-spacing: 1px;">
                    KATEGORI PEMILAHAN <br>
                    SAMPAH
                </h4>
            </div>
        </div>
    </div>
</header>
<main style="min-height: calc(100vh - 150px);" class="main-container">
    <div class="container pt-4">
        <div class="row mx-auto mt-3">
            <h5 class="fw-bold mb-3">
                SAMPAH PLASTIK
            </h5>
            @foreach ($data as $sampah)
            <div class="col-6 mb-3">
                <div class="card border border-primary">
                    <img style="height: 110px;" src="{{ $sampah->image }}" class="card-img-top min-w-100" alt="...">
                    <div class="card-body text-center">
                        <h6 class="card-title my-0 fw-bold">
                            {{ $sampah->price_per_kg }}
                        </h6>
                        <p class="card-text font-sm mt-0">
                            {{ $sampah->name }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mx-1 mt-3">
            <h5 class="fw-bold mb-3">
                SAMPAH PLASTIK
            </h5>
            <div class="col-6 m-0">
                <div class="card border border-primary">
                    <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                    <div class="card-body text-center">
                        <h6 class="card-title my-0 fw-bold">
                            500 Poin
                        </h6>
                        <p class="card-text font-sm mt-0">
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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