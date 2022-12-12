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
                            <li class="nav-item"><a href="{{ route('basic.main.delivery') }}" class="cart"><span class="ti-truck"></span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <div class="common-filter">
                                    <form action="{{ route('basic.productFilter.index') }}">
                                        <div class="input-group">
                                            <input name="search_field" type="text" class="form-control form-control"
                                                   placeholder="Поиск товара">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-md btn-default">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <!-- End Header Area -->

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-md-6">
                    <div id="foto_villa" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="margin-top: 100px">
                            {{ $i=0 }}
                            @foreach ($slider as $row)
                                <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?>
                            <div class='carousel-item <?php echo $set_; ?>'>
                                <img src="{{ asset('storage/' . $row->image) }}" class='d-block w-100'>
                            </div>
                            {{ $i++ }}
                            @endforeach
                        </div>
                        <a class='carousel-control-prev' href='#foto_villa' role='button' data-slide='prev'>
                            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                            <span class='sr-only'>Previous</span>
                        </a>
                        <a class='carousel-control-next' href='#foto_villa' role='button' data-slide='next'>
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>
                            <span class='sr-only'>Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
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

{{--    Самые дешевые--}}
    <div class="row col-lg-12 col-md-6 m-5">
        <div>
            <h2 class="text-lg-center text-warning">Самые дешевые</h2>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row col-lg-12">
                @foreach($cheap as $row)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <a href="{{ route('basic.productOne.index', $row->id) }}">
                                <div class="s_Product_carousel">
                                    @foreach($row->image as $images)
                                        <div class="single-prd-item">
                                            <img class="img-fluid" src="{{ asset('storage/' . $images->image) }}" alt="image">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="product-details">
                                    <h6>{{ $row->name }}</h6>
                                    <div class="price">
                                        <h6 class="fw-bold"> Цена:</h6>
                                        @if($row->new_price != null)
                                            <h6 class="l-through">{{ $row->price }}</h6>
                                            <h6>{{ $row->new_price }}</h6>
                                        @else
                                            <h6>{{ $row->price }}</h6>
                                        @endif
                                    </div>
                                    <div class="prd-bottom">
                                        <a href="https://wa.me/996550990770" class="social-info">
                                            <span class="fa fa-whatsapp"></span>
                                            <p class="hover-text">Заказать</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach ($basicBrands as $row)
        @if ($row->type == BasicBrands::TYPE_BRAND)
            @include(BasicBrands::getBasicFiles()[$row->type], ['data' => Product::where(['brand_id' => $row->brand_id])->limit(4)->get(), 'content' => $row]);
        @elseif ($row->type == BasicBrands::TYPE_ONE)
            @include(BasicBrands::getBasicFiles()[$row->type], ['data' => Product::find($row->product_id), 'content' => $row]);
        @endif
    @endforeach

@endsection
