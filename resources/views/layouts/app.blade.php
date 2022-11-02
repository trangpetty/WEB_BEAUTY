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
    <script src="{{ asset('js/web.js') }}"></script>
    <title>Web Beauty</title>
</head>
<body>
    <div class="header">
        <ul class="d-flex nav-header m-0 ps-0">
            <li class="mx-auto">
                <a class="navbar-brand" href="{{ route('main') }}">
                    Beauty
                    <i class="fa-solid fa-wand-sparkles icon-logo"></i>
                </a>
            </li>
            <li class="py-2 nav-li text-center mx-auto">
                <a class="link" href="/makeup">Makeup</a>
            </li>
            <li class="text-center nav-li py-2 mx-auto">
                <a class="link" href="/skincare">Skincare</a>
            </li>
            <li class="text-center nav-li py-2 mx-auto">
                <a class="link" href="/hair">Hair</a>
            </li>
            <li class="text-center ms-auto me-3 d-flex text-white align-items-center fs-5">
                <i class='fas fa-right-to-bracket me-2'></i>
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    @yield('content')
    <footer class="bg-light py-4">
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
