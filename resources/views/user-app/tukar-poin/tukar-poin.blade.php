@extends('layout.header-tukar-poin')

@section('tukar-point-content')
<div class="container">
    {{-- MENU --}}
    <div class="row mx-3 mt-3">
        <div class="col p-0 d-flex justify-content-between">
            <a class=" btn btn-light text-dark rounded-4 py-2 px-3 shadow fw-bold mt-1" href="#">
                <i style="color: #0575E6" class="bi bi-file-earmark-text-fill pe-1"></i>
                <span>Riwayat Poin</span>
            </a>
            <a class="btn btn-light text-dark rounded-4 py-2 px-3 shadow fw-bold mt-1" href="#">
                <i style="color: #0575E6" class="bi bi-bag-dash-fill pe-1"></i>
                <span>Pesanan Saya</span>
            </a>
        </div>
    </div>
</div>
{{-- REWARD --}}
<div class="container pb-5 mb-5">
    <div class="row mt-5 mx-3">
        <h5 class="fw-bold ps-0 mb-3">Hiasan</h5>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Reward Kategori 2 --}}
    <div class="row mt-4 mx-3">
        <h5 class="fw-bold ps-0 mb-3">Peralatan</h5>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Reward Kategori 3 --}}
    <div class="row mt-4 mx-3">
        <h5 class="fw-bold ps-0 mb-3">Perlengkapan</h5>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide me-3 w-50">
                    <div class="card">
                        <img src="{{ asset('images/kaos.png') }}" class="card-img-top min-w-100" alt="...">
                        <div class="card-body">
                            <h6 class="card-title my-0 fw-bold">
                                500 Poin
                            </h6>
                            <p class="card-text reward-name font-sm mt-0">
                                Kaos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navigation-menu">
    <div class="container d-flex justify-content-evenly">
        <div>
            <a class="btn btn-lg border-0 px-1 py-auto" href="#!">
                <i class="bi bi-house" style="font-size: 1.5rem; color:#0575E6;"></i>
                <p class="text-dark fw-bold font-sm p-0 m-0">Beranda</p>
            </a>
        </div>
        <div>
            <a class="btn btn-lg border-0 px-1 py-auto" href="#!">
                <i class="bi bi-trash" style="font-size: 1.5rem; color:#0575E6;"></i>
                <p class="text-dark fw-bold font-sm p-0 m-0">Kategori</p>
            </a>
        </div>
        <div>
            <a class="btn btn-lg border-0 px-1 py-auto" href="#!">
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
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
</script>
@endsection