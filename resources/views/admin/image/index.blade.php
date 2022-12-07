@extends('admin.main.layout')

@section('title')
    Изображения
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 fw-bold text-center">Изображения</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{ route('admin.main.index') }}">
                            <button type="button" class="btn btn-primary m-0 text-center">На главную</button>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('admin.image.create') }}">
                            <button type="button" class="btn btn-primary float-sm-right">Добавить изображение</button>
                        </a>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr class="text-center">
                        <th>Изображение</th>
                        <th>Продукт</th>
                        <th>Дата</th>
                        <th colspan="2" class="text-center">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($image as $row)
                        <tr>
                            <td>
                                <div class="text-center h-25 w-25">
                                    <img src="{{ asset('storage/' . $row->image) }}" class="rounded w-50 h-50"
                                         alt="name">
                                </div>
                            </td>
                            <td>{{ $row->product_id }}</td>
                            <td>{{ $row->created_at->format('d/m/y H:m:s')}}</td>
                            <td><a href="{{ route('admin.image.edit', $row->id) }}">Изменить</a></td>
                            <td><a href="{{ route('admin.image.destroy', $row->id) }}">Удалить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
