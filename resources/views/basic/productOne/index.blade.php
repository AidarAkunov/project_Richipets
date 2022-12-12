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
                        <div>
                            <h3>{{ $productOne->name }}</h3><br>
                            <h3 class="fw-bold">Цена: </h3>
                            @if($productOne->new_price != null)
                                <h4 style="text-decoration: line-through">{{ $productOne->price }}</h4>
                                <h4>{{ $productOne->new_price }}</h4>
                            @else
                                <h4>{{ $productOne->price }}</h4>
                            @endif
                            <p>{{ $productOne->description }}</p>
                            <p class="fw-bold">В наличии: {{ $productOne->count }} шт.</p>
                            <div class="card_area d-flex align-items-center">
                                <a class="primary-btn" href="https://wa.me/996550990770">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Single Product Area =================-->
    {{--    Похожие товары--}}
    <div class="row col-lg-12 col-md-6 m-5">
        <div>
            <h2 class="text-lg-center text-warning">Похожие товары</h2>
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="row col-lg-12">
                @foreach($productLike->slice(0, 4) as $row)
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
                                        <h6> {{ $row->price }}</h6>
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
@endsection
