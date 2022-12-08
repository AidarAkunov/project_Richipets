@extends('admin.main.layout')

@section('title')
    Изменение товара
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Изменить товар</h3>
                    </div>
                    <form method='POST' action="{{ route('admin.product.update', $product->id) }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Название</label>
                                <input type="text" value="{{ $product->name }}" class="form-control" name='name'
                                       id="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" value="{{ $product->description }}" class="form-control" name='description'
                                       id="description">
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="original_cost">Себестоимость</label>
                                <input type="text" value="{{ $product->original_cost }}" class="form-control"
                                       name='original_cost' id="original_cost">
                                @error('original_cost')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Цена</label>
                                <input type="text" value="{{ $product->price }}" class="form-control" name='price'
                                       id="price">
                                @error('price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="count">Количество</label>
                                <input type="text" value="{{ $product->count }}" class="form-control" name='count'
                                       id="count">
                                @error('count')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Выберите бренд:</label>
                                <select class="form-control" name="brand_id">
                                    @foreach ($brand as $row)
                                        <option value="{{ $row->id }}" @if($row->id == $product->brand_id)
                                            {{ 'selected' }}
                                                @endif >{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subcategory_id">Выберите подкатегорию</label>
                                <select class="form-control" name="subcategory_id">
                                    @foreach ($subcategory as $row)
                                        <option value="{{ $row->id }}" @if($row->id == $product->subcategory_id)
                                            {{ 'selected' }}
                                            @endif >{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                @error('subcategory_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="{{ csrf_token() }}" name='_token' class="form-control"
                                       id="_token">
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
