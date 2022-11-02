@extends('layouts.app')
@section('content')
<div class="box-products">
        <div class="header-box">
            <a title>
                <b>SHAMPOO</b>
            </a>
        </div>
        <div class="body-box mt-3">
            @foreach ($shampoo as $item)
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
                    <div class="m-0 mt-1 text-center h-25">
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
                <b>CONDITIONER</b>
            </a>
        </div>
        <div class="body-box mt-3">
            @foreach ($conditioner as $item)
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
                    <div class="m-0 mt-1 text-center h-25">
                        <span class="price">{{ $item->price }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection