@extends('layout.main')
@section('title', 'Profil | We-Cycle')

@section('content')
<div id="profile-detail" class="main-container" style="min-height: 100vh">
    <header id="profile-header" class="mx-auto py-4" style="max-width: 428px; width: 100%">
    </header>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <img class="rounded-circle border border-3 border-white" style="z-index:11;" width="150px"
                src="{{ $user->picture ?? asset('/images/profile3.png') }}">
        </div>
    </div>
    <div class="row mt-3 mx-3">
        <form action="/profile" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-1">
                <label for="picture" class="form-label fw-bold mt-2 mb-1">Update Foto Profil</label>
                <input type="file" class="form-control" id="picture" name="picture">
            </div>
            <div class=" col-12">
                <label for="username" class="form-label fw-bold mt-2 mb-1">Username</label>
                <input type="text" class="form-control" id="username" name="username"
                    value="{{ $user->username ?? 'Anonim' }}">
            </div>
            <div class="col-12">
                <label for="email" class="form-label fw-bold mt-2 mb-1">Email</label>
                <input type="email" id="email" name="email" class="form-control"
                    value="{{ $user->email ?? 'abc@gmail.com' }}" disabled>
            </div>
            <div class="col-12">
                <label for="address" class="form-label fw-bold mt-2 mb-1">Alamat</label>
                <input type="text" id="address" name="address" class="form-control"
                    value="{{ $user->address ?? 'Ciputat' }}">
            </div>
            <div class="col-12">
                <label for="phone-number" class="form-label fw-bold mt-2 mb-1">No. Handphone</label>
                <input type="number" id="phone_number" name="phone_number" class="form-control"
                    value="{{ $user->phone_number ?? '112233122' }}">
            </div>
            <div class="col-12">
                <label class="form-label fw-bold mt-2 mb-1">Password</label>
                <input type="password" class="form-control" value="password" disabled readonly>
            </div>
            <div class="row mt-4 mx-4 mb-5 pb-5">
                <button type="submit" class="btn btn-primary rounded-pill fw-bold my-2 px-4 py-2">
                    Edit Profile
                </button>
            </div>
        </form>

    </div>

</div>
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
            <a class=" btn btn-lg border-0 px-1 py-auto" href="/settings" role="button">
                <i class="bi bi-gear" style="font-size: 1.5rem; color:#0575E6;"></i>
                <p class="text-dark fw-bold font-sm p-0 m-0">Pengaturan</p>
            </a>
        </div>
    </div>
</div>
@endsection