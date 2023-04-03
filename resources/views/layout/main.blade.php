<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    {{-- Typography --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    {{-- Template Stylesheet --}}
    <link href="{{ asset('we-cycle-app/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('we-cycle-app/bootstrap/css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('we-cycle-app/bootstrap/css/pages/dashboard.css') }}" rel="stylesheet" />
    <!-- Bootstrap Font Icon CSS -->
    {{-- Libraries --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    @yield('style')
</head>

<body>
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        {{-- Content Landing Page Start --}}
        @yield('content')
        {{-- Content Landing Page End --}}
    </main>
    <script src="{{ asset('we-cycle-app/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>