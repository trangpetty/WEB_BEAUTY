@extends('layouts.app')
@section('content')
<div class="box-products">
        <div class="header-box">
            <a title>
                <b>SERUM</b>
            </a>
        </div>
        <div class="body-box mt-3">
            @foreach ($serum as $item)
            <div class="item">
                <div class="box-image border-bottom">
                    <a href="">
                        <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                    </a>
                </div>
                <div class="box-content">
                    <div class="m-0 h-50">
                        <a href="">{{ $item->desc }}</a>
                    </div>
                    <div class="m-0 text-center mt-2">
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
                <b>MASK</b>
            </a>
        </div>
        <div class="body-box mt-3">
            @foreach ($mask as $item)
            <div class="item">
                <div class="box-image border-bottom">
                    <a href="">
                        <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                    </a>
                </div>
                <div class="box-content">
                    <div class="m-0 h-50">
                        <a href="">{{ $item->desc }}</a>
                    </div>
                    <div class="m-0 text-center mt-2">
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
                <b>CLEANSER</b>
            </a>
        </div>
        <div class="body-box mt-3">
            @foreach ($cleanser as $item)
            <div class="item">
                <div class="box-image border-bottom">
                    <a href="">
                        <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                    </a>
                </div>
                <div class="box-content">
                    <div class="m-0 h-50">
                        <a href="">{{ $item->desc }}</a>
                    </div>
                    <div class="m-0 text-center mt-2">
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
                <b>TONER</b>
            </a>
        </div>
        <div class="body-box mt-3">
            @foreach ($toner as $item)
            <div class="item">
                <div class="box-image border-bottom">
                    <a href="">
                        <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                    </a>
                </div>
                <div class="box-content">
                    <div class="m-0 h-50">
                        <a href="">{{ $item->desc }}</a>
                    </div>
                    <div class="m-0 text-center mt-2">
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
                <b>SUNCREEN</b>
            </a>
        </div>
        <div class="body-box mt-3">
            @foreach ($sunscreen as $item)
            <div class="item">
                <div class="box-image border-bottom">
                    <a href="">
                        <img src="{{ asset('images/'.$item->image_path) }}" alt="" class="w-100">
                    </a>
                </div>
                <div class="box-content">
                    <div class="m-0 h-50">
                        <a href="">{{ $item->desc }}</a>
                    </div>
                    <div class="m-0 text-center mt-2">
                        <span class="price">{{ $item->price }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection