@extends('admin.main.layout')

@section('title')
    Изменение сервиса
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Изменить сервис</h3>
                    </div>
                    <form method='POST' action="{{ route('admin.vetservice.update', $vetservice->id) }} enctype="multipart/form-data"">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Название</label>
                                <input type="text" value="{{ $vetservice->name }}" class="form-control" name='name'
                                       id="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" value="{{ $vetservice->description }}" class="form-control"
                                       name='description' id="description">
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Телефон</label>
                                <input type="text" value="{{ $vetservice->phone }}" class="form-control" name='phone'
                                       id="phone">
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Фото</label>
                                <div class="text-center w-25 mb-4">
                                    <img src="{{ asset('storage/' . $vetservice->image) }}" class="rounded w-50 h-50" alt="image">
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
                                <label for="link">Ссылка</label>
                                <input type="text" value="{{ $vetservice->link }}" class="form-control" name='link'
                                       id="link">
                                @error('link')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subcategory_id">Выберите подкатегорию:</label>
                                <select class="form-control" name="subcategory_id">
                                    @foreach ($subcategory as $row)
                                        <option value="{{ $row->id }}" @if($row->id == $vetservice->subcategory_id)
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
