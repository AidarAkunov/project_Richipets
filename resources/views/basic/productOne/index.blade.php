@extends('basic.main.layout')

@section('title')
    Товар
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('basic.main.index') }}">Главная</a></li>
                            @foreach($category as $row)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('basic.subcategory.index', $row->id) }}">{{ $row->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="{{ route('basic.main.delivery') }}" class="cart"><span class="ti-truck"></span></a></li>
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
                    <input type="text" class="form-control" id="search_field" name="search_field" placeholder="Поиск товара">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>{{ $productOne->name }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!--================Single Product Area =================-->
    <section class="mb-5">
        <div class="product_image_area">
            <div class="container">
                <div class="row s_product_inner">
                    <div class="col-lg-6">
                        <div class="s_Product_carousel">
                            @foreach($productOne->image as $row)
                            <div class="single-prd-item">
                                <img class="img-fluid" src="{{ asset('storage/' . $row->image) }}" alt="image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="s_product_text">
                            <h3>{{ $productOne->name }}</h3>
                            <h2>{{ $productOne->price }}</h2>
                            <p>{{ $productOne->description }}</p>
                            <div class="product_count">
                                <label for="qty">Quantity:</label>
                                <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                            <div class="card_area d-flex align-items-center">
                                <a class="primary-btn" href="#">В корзину</a>
                                <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Single Product Area =================-->
@endsection
