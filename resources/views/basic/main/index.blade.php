<?php

use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use App\Models\Basic\BasicBrands;

?>

@extends('basic.main.layout')

@section('title')
    Главная страница
@endsection

@section('content')
    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <div class="col-4">
                        <a class="navbar-brand logo_h" href="{{ route('basic.main.index') }}"><img class="w-50" src="{{ asset('logo/logo2.jpg') }}" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-heart"></span>
                            <span class="ti-heart"></span>
                            <span class="ti-heart"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('basic.main.index') }}">Главная</a></li>
                            @foreach ($category as $row)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('basic.subcategory.index', $row->id) }}">{{ $row->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="cart"><span class="ti-truck"></span></a></li>
                            <li class="nav-item"><a href="#" class="cart"><span class="ti-heart"></span></a></li>
                            <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                            <li class="nav-item">
                                <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="search_field" id="search_input_box">
            <div class="container">
                <form action="{{ route('basic.productAll.index') }}" class="d-flex justify-content-between">
                    <input type="search_field" class="form-control" id="search_field" placeholder="Поиск товара">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner carousel-fade">
                            @foreach($slider as $value)
                                <div class="carousel-item active border border-5 rounded" data-bs-interval="3000" style="margin-top:80px">
                                    <img src="{{ asset('storage/' . $value->image) }}" alt="papa1" class="d-block rounded" style="width:100%">
                                </div>
                            @endforeach

{{--                            <div class="carousel-item border border-5 rounded" data-bs-interval="3000" style="margin-top:80px">--}}
{{--                                <img src="https://api.papajohns.kg//images/banners/98937b5b1e1849fa7c75cc45f5823294.webp" alt="papa2" class="d-block rounded" style="width:100%">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item border border-5 rounded" data-bs-interval="3000" style="margin-top:80px">--}}
{{--                                <img src="https://api.papajohns.kg//images/banners/6a4bbf9d21418d9a7b65e1d5ece03215.webp" alt="papa3" class="d-block rounded" style="width:100%">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item border border-5 rounded" data-bs-interval="3000" style="margin-top:80px">--}}
{{--                                <img src="https://api.papajohns.kg//images/banners/738bb21b6ea53329134724d5ee42d061.webp" alt="papa4" class="d-block rounded" style="width:100%">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item border border-5 rounded" data-bs-interval="3000" style="margin-top:80px">--}}
{{--                                <img src="https://api.papajohns.kg//images/banners/a081ce55fd9627671868fe3e83c4f512.webp" alt="papa5" class="d-block rounded" style="width:100%">--}}
{{--                            </div>--}}
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <i class="ti-truck fa-3x me-3"></i>
                            <i class="ti-car fa-3x"></i>
                        </div>
                        <p>Доставка через курьерские службы</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <i class="ti-list fa-3x me-3"></i>
                            <i class="ti-check-box fa-3x"></i>
                        </div>
                        <p>Широкий ассортимент товаров</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <i class="ti-headphone-alt fa-3x me-3"></i>
                            <i class="ti-thumb-up fa-3x"></i>
                        </div>
                        <p>Качественный сервис</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->
    @foreach ($basicBrands as $row)
        @if ($row->type == BasicBrands::TYPE_BRAND)
            @include(BasicBrands::getBasicFiles()[$row->type], ['data' => Brand::find($row->brand_id)]);
        @elseif ($row->type == BasicBrands::TYPE_ONE)
            @include(BasicBrands::getBasicFiles()[$row->type], ['data' => Product::find($row->product_id)]);
        @endif
    @endforeach
@endsection
