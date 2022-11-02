<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.2.0-web/css/all.min.css') }}">
    <script src="{{ asset('jquery-3.6.1.min.map') }}"></script>
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/web.js') }}"></script>
    <title>Web Admin</title>
</head>
<body>
    <div class="header">
        <ul class="d-flex nav-header m-0">
            <li class="mx-auto">
                <div class="navbar-brand">
                    Beauty
                    <i class="fa-solid fa-wand-sparkles icon-logo"></i>
                </div>
            </li>
            <li class="px-4 text-center mx-auto">
                <a class="link" href="/makeup/admin">Makeup</a>
            </li>
            <li class="text-center px-4 mx-auto">
                <a class="link" href="/skincare/admin">Skincare</a>
            </li>
            <li class="text-center px-4 mx-auto">
                <a class="link" href="/hair/admin">Hair</a>
            </li>
            <li class="text-center ms-auto me-3 d-flex text-white align-items-center fs-5">
                <i class='fas fa-right-to-bracket me-2'></i>
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </div>

    @yield('content')
    <footer class="bg-light py-4 mt-3">
        <div class="contact d-flex justify-content-center">
            <p class="border-end px-2">Le Thi Thuy Trang</p>
            <p class="border-end px-2 ">Zalo: 0358080953</p>
            <p class="px-2">Email: trang200164@nuce.edu.vn</p>
        </div>
        <div class="link-contact d-flex justify-content-center">
            <a href="" class="text-dark text-center">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="text-dark text-center">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-dark text-center">
                <i class="fab fa-github"></i>
            </a>
            <a href="" class="text-dark text-center">
                <i class="fab fa-tiktok"></i>
            </a>
        </div>
    </footer>
</body>
</html>
