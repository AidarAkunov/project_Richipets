<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark px-5" style="background-color: #a6a6a6">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('basic.index') }}">
                <span class="navbar-text text-white h4 fw-bold">RICHIPETS</span></a>
        </div>
        <div class="container-fluid">
            <span class="navbar-text text-white h4 fw-bold">АДМИНИСТРАТИВНАЯ ПАНЕЛЬ</span>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #a6a6a6">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="{{ route('admin.category.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light fw-bold">Категории</button></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.subcategory.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light fw-bold">Подкатегории</button></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.brand.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light fw-bold">Бренды</button></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.product.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light fw-bold">Товары</button></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.vetservice.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light fw-bold">Вет.сервисы</button></a>
                        </li>
                        <li>
                            <a href="" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light fw-bold">Слайдер</button></a>
                        </li>
                        <li>
                            <a href="" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light fw-bold">Рекомендации</button></a>
                        </li>
                        <li>
                            <a href="" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light fw-bold">Акции и скидки</button></a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    </body>
</html>
