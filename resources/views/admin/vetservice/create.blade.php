@extends('admin.main.layout')

@section('title')
    Добавление сервиса
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Добавить сервис</h3>
                    </div>
                    <form method='POST' action="{{ route('admin.vetservice.store') }}" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Название</label>
                                <input type="text" value="{{ old('name') }}" class="form-control" name='name' id="name"
                                       placeholder="Введите название сервиса">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" value="{{ old('description') }}" class="form-control"
                                       name='description' id="description" placeholder="Введите описание">
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Телефон</label>
                                <input type="text" value="{{ old('phone') }}" class="form-control" name='phone'
                                       id="phone" placeholder="Введите контактный номер">
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Добавить фото</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name='image' id="image">
                                        <label class="custom-file-label">Выберите изображение</label>
                                    </div>
                                </div>
                                @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="link">Ссылка</label>
                                <input type="text" value="{{ old('link') }}" class="form-control" name='link' id="link"
                                       placeholder="Введите ссылку">
                                @error('link')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subcategory_id">Выберите подкатегорию:</label>
                                <select class="form-control" name="subcategory_id">
                                    @foreach ($subcategory as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
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
