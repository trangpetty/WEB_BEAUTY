@extends('layouts.app')
@section('content')
    <div class="slider">
        <figure>
            <div class="slide">
                <img src="{{ asset('image/header/cocoon-my-pham-thuan-chay-viet-nam.jpg') }}" alt="" class="w-100">
            </div>
            <div class="slide">
                <img src="{{ asset('image/header/maybeline.jpg') }}" alt="" class="w-100">
            </div>
            <div class="slide">
                <img src="{{ asset('image/header/dove.webp') }}" alt="" class="w-100">
            </div>
            <div class="slide">
                <img src="{{ asset('image/header/la-roche-posay.jpeg') }}" alt="" class="w-100">
            </div>
        </figure>
    </div>

    <div class="main">
        <div class="box-products">
            <div class="header-box">
                <a title>
                    <b>FEATURED PRODUCTS</b>
                </a>
            </div>
            <div class="body-box mt-3">
                <div class="item">
                    <div class="box-image">
                        <a href="">
                            <img src="{{ asset('image/makeup/sunscreen.jpg') }}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-content">
                        <div class="m-0 h-50">
                            <a href="">Sunscreen Cesll Fufsion C Laser 35ml</a>
                        </div>
                        <div class="m-0 text-center">
                            <span class="price">220,000₫</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="">
                            <img src="{{ asset('image/makeup/klairs.jpg') }}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-content">
                        <div class="m-0 h-50">
                            <a href="">Toner Klairs Supple Preparation</a>
                        </div>
                        <div class="m-0 text-center">
                            <span class="price">260,000₫</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="">
                            <img src="{{ asset('image/makeup/cushion.jpg') }}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-content">
                        <div class="m-0 h-50">
                            <a href="">Skin Hero Cushion SPF50+/PA++++ 12gr x 2</a>
                        </div>
                        <div class="m-0 text-center">
                            <span class="price">430,000₫</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="">
                            <img src="{{ asset('image/makeup/retinol.jpg') }}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-content">
                        <div class="m-0 h-50">
                            <a href="">Obagi Meical Retinol 1.0 Cream</a>
                        </div>
                        <div class="m-0 text-center">
                            <span class="price">1,150,000₫</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="">
                            <img src="{{ asset('image/makeup/obagi.jpg') }}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-content">
                        <div class="m-0 h-50">
                            <a href="">Obagi Medical Salicylic Acid</a>
                        </div>
                        <div class="m-0 text-center">
                            <span class="price">650,000</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-image">
                        <a href="">
                            <img src="{{ asset('image/makeup/larocheposay.jpg') }}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-content">
                        <div class="m-0 h-50">
                            <a href="">Obagi Medical Salicylic Acid</a>
                        </div>
                        <div class="m-0 text-center">
                            <span class="price">650,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        MAKEUP    --}}
        <div class="box-products">
            <div class="header-box">
                <a title>
                    <b>MAKEUP</b>
                </a>
            </div>
            <div class="body-box mt-3">
                @foreach ($makeup as $item)
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
{{--    SKINCARE    --}}
        <div class="box-products">
            <div class="header-box">
                <a title>
                    <b>SKINCARE</b>
                </a>
            </div>
            <div class="body-box mt-3">
                @foreach ($skincare as $item)
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
{{--    HAIR    --}}
        <div class="box-products">
            <div class="header-box">
                <a title>
                    <b>HAIR</b>
                </a>
            </div>
            <div class="body-box mt-3">
                @foreach ($hair as $item)
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
    </div>

@endsection
