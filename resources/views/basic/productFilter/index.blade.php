@extends('basic.main.layout')

@section('title')
    Товар
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <div class="col-4">
                        <a class="navbar-brand logo_h" href="{{ route('basic.main.index') }}"><img class="w-50"
                                                                                                   src="{{ asset('logo/logo2.jpg') }}"
                                                                                                   alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                        </button>
                    </div>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('basic.main.index') }}">Главная</a>
                            </li>
                            @foreach($category as $row)
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ route('basic.subcategory.index', $row->id) }}">{{ $row->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="{{ route('basic.main.delivery') }}" class="cart"><span
                                        class="ti-truck"></span></a></li>
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
                    <h1>Все товары</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start filter Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-filter mt-0">
                    <div class="top-filter-head">Фильтрация</div>
                    <div class="common-filter">
                        <div class="head">Поиск товара</div>
                        <form action="{{ route('basic.productFilter.index') }}">
                            <div class="input-group">
                                <input name="search_field" type="text" class="form-control form-control"
                                       placeholder="Название товара">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-md btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="common-filter">
                        <div class="head">Категории товаров</div>
                        <form class="filter_form" action="#">
                            @csrf
                            @foreach($subcategory as $row)
                                <ul>
                                    <li class="filter-list">
                                        <input class="pixel-radio" type="radio" value="{{ $row->id }}" id="subcategory"
                                               name="subcategory">
                                        <label for="subcategory">{{ $row->name }}</label>
                                    </li>
                                </ul>
                            @endforeach
                        </form>
                    </div>
                    <div class="common-filter">
                        <div class="head">Бренды</div>
                        <form class="filter_form" action="#">
                            @csrf
                            @foreach($brand as $row)
                                <ul>
                                    <li class="filter-list">
                                        <input class="pixel-radio" type="radio" value="{{ $row->id }}" id="brand"
                                               name="brand">
                                        <label for="brand">{{ $row->name }}</label>
                                    </li>
                                </ul>
                            @endforeach
                        </form>
                    </div>
                    <form action="#">
                        @csrf
                        @foreach ($property as $row)
                            <div class="common-filter">
                                <div class="head">{{ $row->name }}</div>
                                @foreach($row->propertyValue as $value)
                                    <ul>
                                        <li class="filter-list">
                                            <input class="pixel-radio" type="checkbox" value="{{ $value->id }}"
                                                   id="propertyValue" name="propertyValue[]">
                                            <label for="property">{{ $value->name }}</label>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 col-md-7 ">
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row ShowProduct">
                        @include('basic.partials.products', ['productAll' => $productAll])
                    </div>
                </section>
                {{ $productAll->links() }}
            </div>
        </div>
    </div>
    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("form :input").change(function(){
            var data = $(this).closest('form').serialize();
            $.ajax({
               type:'POST',
               url:"{{ route('ajaxRequest.post') }}",
               data: data,
               success:function(data)
               {
                   $('.ShowProduct').html(data);
                }
            });
        });
    </script>
@endsection
