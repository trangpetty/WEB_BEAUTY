@extends('layouts.app')
@section('content')
<div class="box-products">
    <div class="header-box">
        <a title>
            <b>LIPSTICK</b>
        </a>
    </div>
    <div class="body-box mt-3">
        @foreach ($lipstick as $item)
        <div class="item">
            <div class="box-image border-bottom">
                <a href="">
                    <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                </a>
            </div>
            <div class="box-content h-25">
                <div class="m-0">
                    <a href="">{{ $item->desc }}</a>
                </div>
                <div class="m-0 text-center bottom-0">
                    <span class="price">{{ $item->price }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="box-products">
    <div class="header-box">
        <a title>
            <b>EYELINER</b>
        </a>
    </div>
    <div class="body-box mt-3">
        @foreach ($eyeliner as $item)
        <div class="item">
            <div class="box-image border-bottom">
                <a href="">
                    <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                </a>
            </div>
            <div class="box-content h-25">
                <div class="m-0">
                    <a href="">{{ $item->desc }}</a>
                </div>
                <div class="m-0 text-center bottom-0">
                    <span class="price">{{ $item->price }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="box-products">
    <div class="header-box">
        <a title>
            <b>MASCARA</b>
        </a>
    </div>
    <div class="body-box mt-3">
        @foreach ($mascara as $item)
        <div class="item">
            <div class="box-image border-bottom">
                <a href="">
                    <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                </a>
            </div>
            <div class="box-content h-25">
                <div class="m-0">
                    <a href="">{{ $item->desc }}</a>
                </div>
                <div class="m-0 text-center bottom-0">
                    <span class="price">{{ $item->price }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="box-products">
    <div class="header-box">
        <a title>
            <b>EYESHADOW</b>
        </a>
    </div>
    <div class="body-box mt-3">
        @foreach ($eyeshadow as $item)
        <div class="item">
            <div class="box-image border-bottom">
                <a href="">
                    <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                </a>
            </div>
            <div class="box-content h-25">
                <div class="m-0">
                    <a href="">{{ $item->desc }}</a>
                </div>
                <div class="m-0 text-center bottom-0">
                    <span class="price">{{ $item->price }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection