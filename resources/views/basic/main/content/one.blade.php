<h2 class="text-lg-center text-warning">{{ $content->name }}</h2>
<section>
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_Product_carousel">
                        @foreach($data->image as $row)
                            <div class="single-prd-item">
                                <img class="img-fluid" src="{{ asset('storage/' . $row->image) }}" alt="image">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $data->name }}</h3>
                        <h2>{{ $data->price }}</h2>
                        <p>{{ $data->description }}</p>
                        <p class="fw-bold">В наличии: {{ $data->count }} шт.</p>
                        <div class="card_area d-flex align-items-center">
                            <a class="primary-btn" href="https://wa.me/996550990770">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
