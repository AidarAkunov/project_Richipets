<?php

use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use App\Models\Basic\BasicBrands;

?>

@extends('basic.main.layout')

@section('title')
    Доставка
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
                            @foreach ($category as $row)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('basic.subcategory.index', $row->id) }}">{{ $row->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="{{ route('basic.main.delivery') }}" class="cart"><span class="ti-truck"></span></a></li>
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
                    <h1>Доставка</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <section class="sample-text-area">
        <div class="container">
            <h3 class="text-heading">Оформление заявок и доставка</h3>
            <p class="sample-text">
                Приём заявок осуществляется ежедневно с <b>12.00 до 21.00</b>
                Время доставки определяется по согласованию с Вами.
                Доставка производится через <b>курьерские службы.</b><br> (Доставку в регионы страны уточняйте по телефону).</p>

            <h3 class="text-heading">Оплата</h3>
            <p class="sample-text">
                Оплата осуществляется <b>наличными</b> курьеру при доставке заказа, а так же посредством <b>интернет-банкинга</b> систем Optima Bank, Банк Кыргызстан (MBank).</p>

            <h3 class="text-heading">Условия возврата</h3>
            <p class="sample-text">
            В случае, если вдруг вы решите вернуть уже оплаченный товар, вы можете позвонить по телефону +996 553 23 30 20<br>
            Срок возврата товара надлежащего качества составляет <b>14 дней</b>  с момента получения товара.</p>
        </div>
    </section>
@endsection
