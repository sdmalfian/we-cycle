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
        <div class="row mx-1 mt-3">
            <h5 class="fw-bold mb-3">
                SAMPAH PLASTIK
            </h5>
            <div class="col-6 m-0 rounded-5">
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
            <div class="col-6 m-0 rounded-5">
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
        <div class="row mx-1 mt-3">
            <h5 class="fw-bold mb-3">
                SAMPAH PLASTIK
            </h5>
            <div class="col-6 m-0 rounded-5">
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
            <div class="col-6 m-0 rounded-5">
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
</main>
@endsection