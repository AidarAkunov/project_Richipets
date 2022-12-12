
        <h2 class="text-lg-center text-warning">{{ $content->name }}</h2>
<section class="mb-5">
    <div class="container">
        <div class="row col-lg-12">
            @foreach($data as $row)
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <a href="{{ route('basic.productOne.index', $row->id) }}">
                            <div class="s_Product_carousel">
                                @foreach($row->image as $brand)
                                    <div class="single-prd-item">
                                        <img class="img-fluid" src="{{ asset('storage/' . $brand->image) }}" alt="image">
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
