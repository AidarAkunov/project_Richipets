@extends('admin.main.layout')

@section('title')
    Изменение подкатегории
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Изменить подкатегорию</h3>
                    </div>
                    <form method='POST' action="{{ route('admin.subcategory.update', $subcategory->id) }}" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Название</label>
                                <input type="text" value="{{ $subcategory->name }}" class="form-control" name='name'
                                       id="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Изображение</label>
                                <div class="text-center w-25 mb-4">
                                    <img src="{{ asset('storage/' . $subcategory->image) }}" class="rounded w-50 h-50" alt="image">
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
                                <label for="category_id">Выберите категорию:</label>
                                <select class="form-control" name="category_id">
                                    @foreach ($category as $row)
                                        <option value="{{ $row->id }}" @if($row->id == $subcategory->category_id)
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
