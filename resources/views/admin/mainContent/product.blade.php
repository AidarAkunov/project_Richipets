@extends('admin.main.layout')

@section('title')
    Добавление главного контента
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Добавить главный контент</h3>
                    </div>
                    <form method='POST' action="{{ route('admin.mainContent.store')}}"  enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Название</label>
                                <input type="text" value="{{ old('name') }}" class="form-control" name='name' id="name" placeholder="Введите название характеристики">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product_id">Выберите продукт:</label>
                                <select class="form-control" name="product_id">
                                    @foreach ($product as $row)
                                        <option value="{{ $row->id }}">
                                            {{ $row->name }}</option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <input type="hidden" name="type" value="{{ \App\Models\Basic\BasicBrands::TYPE_ONE }}">

                            <div class="form-group">
                                <input type="hidden" value="{{ csrf_token() }}" name='_token' class="form-control" id="_token">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
