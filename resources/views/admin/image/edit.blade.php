@extends('admin.main.layout')

@section('title')
    Изменение изображения
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Изменить изображение</h3>
                    </div>
                    <form method='POST' action="{{ route('admin.image.update', $image->id) }}" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="image">Файл</label>
                                <div class="text-center w-25 mb-4">
                                    <img src="{{ asset('storage/' . $image->image) }}" class="rounded w-50 h-50" alt="image">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name='image' id="image">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                @error('image')
                                <p class="text-danger">Это поле необходимо заполнить</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subcategory_id">Выберите продукт:</label>
                                <select class="form-control" name="product_id">
                                    @foreach ($product as $row)
                                        <option value="{{ $row->id }}" @if($row->id == $image->product_id)
                                            {{ 'selected' }}
                                                @endif >{{ $row->name }}</option>
                                    @endforeach
                                </select>
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
