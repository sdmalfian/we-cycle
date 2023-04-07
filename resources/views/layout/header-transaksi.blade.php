@extends('layout.main')

@section('content')
<header class="navbar navbar-light bg-white text-dark" style="max-width: 428px; width: 100%">
    {{-- Nav Header --}}
    <div class="container px-4 border-bottom">
        <div class="row">
            <div class="col py-3 d-flex align-items-center text-start text-dark">
                <a href="{{ url('dashboard') }}">
                    <i class="bi bi-arrow-left me-3"></i>
                </a>
                <h6 class="fw-bold m-0" style="letter-spacing: 1px;">
                    @yield('transaction-title')
                </h6>
            </div>
        </div>
    </div>
</header>
@yield('transaction-content')
@endsection

@yield('scripts')