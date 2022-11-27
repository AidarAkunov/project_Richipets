<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Админ панель</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark px-5" style="background-color: #a6a6a6">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="{{ route('basic.index') }}">
                <span class="navbar-text text-dark h4 fw-bold">Richipets</span></a>
            </div>
            <div class="container-fluid">
                <span class="navbar-text text-dark h4 fw-bold">АДМИНИСТРАТИВНАЯ ПАНЕЛЬ</span>
            </div>
        </nav>
        
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #a6a6a6">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li>
                                <a href="{{ route('admin.category.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light table-striped">Категории</button></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.subcategory.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light">Подкатегории</button></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.brand.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light">Бренды</button></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.product.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light">Товары</button></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.vetservice.index') }}" class="nav-link px-0 align-middle">
                                <button type="button" class="btn btn-light">Вет.сервисы</button></a>
                            </li>
                            <li>
                                <div class="dropdown dropend">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                    Главная страница
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Слайдер</a></li>
                                        <li><a class="dropdown-item" href="#">Рекомендации</a></li>
                                        <li><a class="dropdown-item" href="#">Акции и скидки</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <hr>
                    </div>
                </div>
                <div class="col py-3">
                    Поле для Google Analytics
                </div>
            </div>
        </div>
    </body>
</html>