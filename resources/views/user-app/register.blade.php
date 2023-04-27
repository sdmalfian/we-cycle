<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Register | We-Cycle
    </title>
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('images/favicon//site.webmanifest') }}">
    {{-- Typography --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    {{-- Template Stylesheet --}}
    <link href="{{ asset('we-cycle-app/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('we-cycle-app/bootstrap/css/by-silmy/register.css') }}" rel="stylesheet" />
    <!-- Font awesome Icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main class="loginscreen">
        <div class="bulatgradasi">
        </div>
        <div class="boxlogin">
            <img class="logodark" src="{{ asset('images/logo-dark.png') }}" alt="logodark">
            <div class="ikonkon">
                <form action="/register" method="post" style="max-width:327px;margin:auto">
                    @csrf
                    @if($errors->any())
                    {!! implode('', $errors->all('<div class="mx-1 font-sm text-danger">:message</div>')) !!}
                    @endif
                    <div class="input-icons">
                        <i class="fa fa-user icon">
                        </i>
                        <input class="input-field" id="username" name="username" type="text required"
                            placeholder="Username">
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-envelope icon">
                        </i>
                        <input class="input-field" id="email" name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-key icon">
                        </i>
                        <input class="input-field" id="password" name="password" type="password" placeholder="Password"
                            required>
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-key icon">
                        </i>
                        <input class="input-field" id="password_confirmation" name="password_confirmation" required
                            type="password" placeholder="Konfirmasi Password">
                    </div>
                    <div class="tombol">
                        <button type="submit" class="btn1">DAFTAR</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="loakun">
            <p>Sudah Punya Akun?
                <a href="/login" class="linkregis">Masuk Disini</a>
            </p>
        </div>

    </main>
</body>

</html>