<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel='stylesheet' href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.skinFlat.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/51/2/intl/ru_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/51/2/intl/ru_ALL/util.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    </head>
    <body>

    @yield('content')

    <!-- start footer Area -->
    <footer class="text-center text-lg-start bg-dark text-white-50">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Мы в социальных сетях:</span>
            </div>
            <div>
                    <a href="https://www.instagram.com/richipets_/" class="me-4 text-reset"><i class="fa fa-instagram me-2"></i>Instagram</a>
                    <a href="https://www.facebook.com/Richipets" class="mr-4 text-reset"><i class="fa fa-facebook me-2"></i>Facebook</a>
                    <a href="https://wa.me/996550990770" class="me-4 text-reset"><i class="fa fa-whatsapp me-2"></i>WhatsApp</a>
            </div>
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                        <a href="{{ route('basic.main.index') }}">
                            <img class="w-75" src="{{ asset('logo/logo3.jpg') }}" alt="logo">
                        </a>
                        <p class="mt-3 text-reset">
                            Richipets - магазин стильных аксессуаров для счасливой жизни Ваших питомцев!
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                        <h6 class="text-white fw-bold mb-4">График работы</h6>
                        <p>Ежедневно</p>
                        <p>12:00 - 20:00</p>
                    </div>
                    <div class="col-md-5 col-lg-3 col-xl-4 mx-auto mb-md-0 mb-4">
                        <h6 class="text-white fw-bold mb-4">Наш адрес</h6>
                        <p>
                            <a href="https://go.2gis.com/trjw9" class="text-reset"><i class="fa fa-location-arrow me-3"></i>2GIS</a>
                        </p>
                        <p><i class="fa fa-home me-3"></i> г. Бишкек, Октябрьский район, 12-й микрорайон д.9/1, 720049</p>
                        <p><i class="fa fa-phone me-3"></i> + 996 553 23 30 20</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="{{ route('basic.main.index') }}">Richipets.kg</a>
        </div>
    </footer>

    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('js/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
