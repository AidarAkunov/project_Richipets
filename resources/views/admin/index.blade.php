<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href = '<?php echo asset('css/app.css') ?>'>
        <title>Админ панель</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-warning" href="<?php echo route('basic.index') ?>">Richipets</a>
            </div>
            <div class="container-fluid">
                <span class="navbar-text">АДМИНИСТРАТИВНАЯ ПАНЕЛЬ</span>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li>
                                <a href="<?php echo route('admin.main.index') ?>" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Главная страница</span></a>
                            </li>
                            <li>
                                <a href="<?php echo route('admin.subcategory.index') ?>" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Страница подкатегорий</span></a>
                            </li>
                            <li>
                                <a href="<?php echo route('admin.product.index') ?>" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Страница товаров</span></a>
                            </li>
                            <li>
                                <a href="<?php echo route('admin.profile.index') ?>" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Страница профиля товара</span></a>
                            </li>
                            <li>
                                <a href="<?php echo route('admin.service.index') ?>" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Страница вет.сервиса</span></a>
                            </li>
                            <li>
                                <a href="<?php echo route('admin.analysis.index') ?>" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Страница анализа</span></a>
                            </li>
                            <li>
                                <a href="<?php echo route('admin.allProduct.index') ?>" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Все товары</span></a>
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