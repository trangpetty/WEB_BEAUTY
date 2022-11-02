<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.2.0-web/css/all.min.css') }}">
    <script src="{{ asset('jquery-3.6.1.min.js') }}"></script>
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

@extends('layouts.login')
@section('content')
    <div class="d-flex w-100 m-0 form-login">
        <div class="text-center pt-5" style="width: 60%">
            <h1 class="fw-bold header-login text-pink">Login to Your Account</h1>
            <p class="text-pink fs-5">Login using social networks</p>
            <div class="link-login d-flex justify-content-center">
                <a href="" class="mx-2 text-center text-primary">
                    <i class="fab fa-facebook "></i>
                </a>
                <a href="" class="mx-2 text-center text-danger">
                    <i class="fab fa-google-plus"></i>
                </a>
                <a href="" class="mx-2 text-center text-dark">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <hr class="hr-text w-50 mx-auto" data-content="OR">
            <form action="{{ route('post_login') }}" method="POST" class="login">
                @csrf
                <p class="text-pink">
                    @if ($errors->has('errorMessage'))
                        {{ $errors->first('errorMessage') }}
                    @endif
{{--                    {{ isset($errormsg) }}--}}
                </p>
                <div class="my-3">
                    <input type="email" name="email" class="w-50 rounded-pill p-3 shadow-sm" placeholder="Email">
                </div>
                <div class="my-3">
                    <input type="password" name="password" class="w-50 rounded-pill p-3 shadow-sm password" id="password-login" placeholder="Password">
                    <br>
                    <button type="button" class="btn-show_password" id="show_password-login">Show</button>
                </div>
                <button type="submit" class="p-3 h5 w-25 my-3 btn-login shadow-lg text-white rounded-pill">
                    Login
                </button>
            </form>
        </div>

{{--        FORM SIGN UP--}}
        <div class="signup_ready text-center">
            <h1 class="fw-bold header-login text-white">New Here</h1>
            <p class="text-white fs-4">Signup and discover a great amount of new opportunities!</p>
            <button class="p-3 h5 w-50 my-3 btn-signup text-pink rounded-pill" id="btn-signup">
                Sign Up
            </button>
        </div>
        <div class="signup_form text-center">
            <button type="button" class="btn-close btn-close-white top-0 float-end" aria-label="Close" id="btn-close"></button>
            <h1 class="fw-bold header-login text-white mt-4">Create New Account</h1>
            <form action="{{ route('post_signup') }}" method="POST" class="mt-5">
                @csrf
                <div class="my-3">
                     <input type="text" name="username_new" class="rounded-pill p-3 shadow-lg" placeholder="Username" value="">
                    <p class="text-white">
                        @if ($errors->has('username_new'))
                            {{ $errors->first('username_new') }}
                        @endif
                    </p>
                </div>
                <div class="mt-3">
                    <input type="email" name="email_new" class="rounded-pill p-3 shadow-lg" placeholder="Email" value="">
                    <p class="text-white">
                        @if ($errors->has('email_new'))
                            {{ $errors->first('email_new') }}
                        @endif
                    </p>
                </div>
                <div class="mt-3">
                    <input type="password" name="password_new" class="rounded-pill p-3 shadow-lg" id="password-signup" placeholder="Password" value="">
                    <p class="text-white">
                        @if ($errors->has('password_new'))
                            {{ $errors->first('password_new') }}
                        @endif

                    </p>
                </div>
                <button type="button" class="btn-show_password text-white" id="show_password-signup">Show</button>
                <br>
                <button class="p-3 h5 w-50 mb-3 btn-signup text-pink rounded-pill" id="btn-signup_submit" type="submit">
                    Sign Up
                </button>
            </form>

        </div>
    </div>
    <script src="{{ asset('js/web.js') }}"></script>
@endsection
</body>
</html>
