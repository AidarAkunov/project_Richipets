@extends('basic.main.layout')

@section('title')
    Все товары
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
                            @foreach($category as $row)
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
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
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
                    <h1>Все товары</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-filter mt-0">
                    <div class="top-filter-head">Фильтрация</div>
                    <div class="common-filter">
                        <div class="head">{{ $subcategory->name }}</div>
                    </div>
                    <div class="common-filter">
                        <div class="head">Бренды</div>
                        <form class="filter_form" action="#">
                            @foreach($brand as $row)
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" value="{{ $row->id }}" id="brand" name="brand"><label for="brand">{{ $row->name }}</label></li>
                                </ul>
                            @endforeach
                        </form>
                    </div>
                    @foreach ($property as $row)
                        <div class="common-filter">
                            <div class="head">{{ $row->name }}</div>
                            <form action="#">
                                @foreach($row->propertyValue as $row)
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" value="{{ $row->id }}" id="brand" name="property"><label for="brand">{{ $row->name }}</label></li>
                                </ul>
                                @endforeach
                            </form>
                        </div>
                    @endforeach
                    <div class="common-filter">
                        <div class="head">Price</div>
                        <div class="price-range-area">
                            <div id="price-range"></div>
                            <div class="value-wrapper d-flex">
                                <div class="price">Price:</div>
                                <span>$</span>
                                <div id="lower-value"></div>
                                <div class="to">to</div>
                                <span>$</span>
                                <div id="upper-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        @foreach($productAll as $row)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <a href="{{ route('basic.productOne.index', $row->id) }}">
                                    <img class="img-fluid" src="img/product/p4.jpg" alt="">
                                    <div class="product-details">
                                        <h6>{{ $row->name }}</h6>
                                        <div class="price">
                                            <h6>{{ $row->price }}</h6>
                                        </div>
                                        <div class="prd-bottom">
                                            <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">В корзину</p>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script>
        $("form :input").change(function(){
        console.log($(this).closest('form').serialize())
{{--          $.ajax({url: "demo_test.txt", success: function(result){--}}
{{--            $("#div1").html(result);--}}
{{--          }});--}}
        });
    </script>

@endsection
