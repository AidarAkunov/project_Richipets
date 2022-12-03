<?php
    use App\Models\BasicBrands;
    use App\Models\Brand;
    use App\Models\Product;
    use App\Models\Image;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <title>Главная страница</title>
    </head>
    <body>
        <header class="text-center text-lg-start">
            <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a6a6a6">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <!-- <img src="" alt="" width="100" height="40" class="d-inline-block align-text-top"> -->
                        <p class="fw-bold">Richipets</p>
                    </a>
                    <ul class="navbar-nav justify-content-center fw-bold h5">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Доставка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Избранное</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Корзина</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Поиск товара" aria-label="text">
                        <button class="btn btn-outline-dark" type="submit">Найти</button>
                    </form>
                </div>
            </nav>
        </header>
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner carousel-fade">
                <div class="carousel-item active border border-5 rounded" data-bs-interval="2000">
                    <img
                        src="https://scontent.ffru7-1.fna.fbcdn.net/v/t39.30808-6/298457592_394909279416363_3381822786431941334_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=XUoW4vuhhhoAX812jJv&_nc_ht=scontent.ffru7-1.fna&oh=00_AfA5p4L2X4XBmne0jXaTbLRMewxYFaQf7-mBlVTP1sq4Iw&oe=6380E903"
                        alt="slide1" class="d-block rounded w-100" style="height:500px" style="width:100%">
                </div>
                <div class="carousel-item border border-5 rounded" data-bs-interval="2000">
                    <img
                        src="https://scontent.ffru7-1.fna.fbcdn.net/v/t39.30808-6/305304937_412481244325833_9021125041949916019_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=I24DCIYHuNIAX9ZYnqC&tn=o_pW8TUqizIaDZlZ&_nc_ht=scontent.ffru7-1.fna&oh=00_AfAvXwlkQWju8H5nwV6e38RwyrcuyvFOZNKdif9bG1LOAg&oe=63807BC1"
                        alt="slide2" class="d-block rounded w-100" style="height:500px" style="width:100%">
                </div>
                <div class="carousel-item border border-5 rounded" data-bs-interval="2000">
                    <img
                        src="https://scontent.ffru7-1.fna.fbcdn.net/v/t39.30808-6/312359123_455589306681693_4014639001334935107_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=V5pIEVnAKcgAX-sEQq4&_nc_ht=scontent.ffru7-1.fna&oh=00_AfDe_as-tjxAALQ2V8HRCKovGkm_BV_V_8cwSCkQVZ9v_w&oe=637FE42E"
                        alt="slide3" class="d-block rounded w-100" style="height:500px" style="width:100%">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <br>
        <nav class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #a6a6a6">
            <div class="container-fluid  justify-content-center sticky-top">
                <ul class="navbar-nav fw-bold h5">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Собаки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Кошки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Корма</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Вет. сервисы</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>

        @foreach ($basicBrands as $row)
            @if ($row->type == BasicBrands::TYPE_BRAND)
                @include(BasicBrands::getBasicFiles()[$row->type], ['data' => Brand::find($row->brand_id)]);
            @elseif ($row->type == BasicBrands::TYPE_ONE)
                @include(BasicBrands::getBasicFiles()[$row->type], ['data' => Product::find($row->product_id)]);
            @endif
        @endforeach

        <footer class="text-center text-lg-start" style="background-color: #a6a6a6">
            <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom">
                <div class="container text-center text-md-start mt-auto h5 ">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <a class="navbar-brand" href="#">
                                ЛОГОТИП<img src="#" alt="" width="200" height="180" class="d-inline-block align-text-top ">
                            </a>
                        </div>
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Местоположение магазина
                            </h6>
                            <a class="navbar-brand" href="https://go.2gis.com/uoxin"><p class="fw-bold">Ссылка 2GIS</p></a>
                            <p><i class="bi bi-geo-alt-fill"></i> г. Бишкек, Октябрьский район,<br> 12-й микрорайон д.9/1,<br>
                                720049</p>
                            <a class="navbar-brand" href="#"><p class="fw-bold">О нас</p></a>
                        </div>
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
                            <a class="nav-link" href="#"><i class="bi bi-instagram"></i> Instargam</a><br>
                            <a class="nav-link" href="#"><i class="bi bi-facebook"></i> Facebook</a><br>
                            <a class="nav-link" href="#"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                            <br>
                            <h6 class="text-uppercase fw-bold mb-4">ГРАФИК РАБОТЫ</h6>
                            <p><i class="bi bi-calendar2-week"></i> 12:00 - 20:00</p>
                            <p><i class="bi bi-telephone-fill"></i> + 996 553 23 30 20</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-2">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="#">Richipets.shop.kg</a>
            </div>
        </footer>
    </body>
</html>
