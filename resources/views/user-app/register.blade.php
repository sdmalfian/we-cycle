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
                <form style="max-width:327px;margin:auto">
                    <div class="input-icons">
                        <i class="fa fa-user icon">
                        </i>
                        <input class="input-field" type="text" placeholder="Username">
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-envelope icon">
                        </i>
                        <input class="input-field" type="email" placeholder="Email">
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-key icon">
                        </i>
                        <input class="input-field" type="password" placeholder="Password">
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-key icon">
                        </i>
                        <input class="input-field" type="password" placeholder="Konfirmasi Password">
                    </div>
                </form>
            </div>
            <div class="terms">
                <input type="checkbox" id="checkbox" style="float: left; margin-top: 5px">
                <label for="checkbox">Saya Menyetujui Kebijakan Privasi dan Ketentuan We-Cycle</label>
            </div>
            <div class="tombol">
                <button type="submit" class="btn1">DAFTAR</button>
            </div>
        </div>
        <div class="loakun">
            <p>Sudah Punya Akun?
                <a href="#" class="linkregis">Masuk Disini</a>
            </p>
        </div>

    </main>
</body>

</html>