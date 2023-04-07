@extends('layout.main')

@section('content')
<header class="gradient-top-bottom mx-auto" style="max-width: 428px; width: 100%">
    {{-- Nav Header --}}
    <div class="container text-center px-4">
        <div class="row">
            <div class="col py-4 d-flex align-items-center justify-content-between text-start text-light">
                <div>
                    <p class="mb-0" style="font-weight: 500; letter-spacing: 1px;">
                        Dwi Oktaviani Arifin
                    </p>
                </div>
                <div class="profile">
                    <img src="{{ asset('images/profile.png') }}" alt="profile">
                </div>
            </div>
        </div>
    </div>
</header>
<div id="tukar-poin-page" class="main-container">
    <div class="container pt-4">
        <div class="row mt-2 mx-3 py-3 rounded-3 text-light gradient-brand-toRight">
            <div class="col my-auto text-center">
                <img class="m-0" src="{{ asset('images/logo-hero.png') }}" alt="we-cycle-logo" srcset="">
                <p class="m-0 fw-bold">Points</p>
            </div>
            <div class="col border-start border-2">
                <p class="m-0 font-sm">Poin Saat ini</p>
                <p class="m-0 fw-bold fs-5">
                    9999999
                </p>
                <p class="m-0" style="font-size: 0.7rem">Berlaku Hingga</p>
                <p class="m-0" style="font-size: 0.7rem">31-12-2023</p>
            </div>
            <div class="col-3 d-flex align-items-center">
                <img class="m-0 pb-1" src="{{ asset('images/icons/hand-coin.png') }}" alt="coin" srcset="">
            </div>
        </div>
    </div>
    @yield('tukar-point-content')
</div>
@endsection

@yield('scripts')