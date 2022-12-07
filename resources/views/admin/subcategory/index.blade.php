@extends('admin.main.layout')

@section('title')
    Подкатегории
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 fw-bold text-center">Подкатегории</h1>
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
                        <a href="{{ route('admin.subcategory.create') }}">
                            <button type="button" class="btn btn-primary float-sm-right">Добавить подкатегорию</button>
                        </a>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr class="text-center">
                        <th>Название</th>
                        <th>Изображение</th>
                        <th>Категория</th>
                        <th colspan="2" class="text-center">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($subcategory as $row)
                        <tr>
                            <td><a href="{{ route('admin.brand.index', $row->id) }}">{{ $row->name }}</a></td>
                            <td>
                                <div class="text-center h-25 w-25">
                                    <img src="{{ asset('storage/' . $row->image) }}" class="rounded w-50 h-50" alt="image">
                                </div>
                            </td>
                            <td>{{ $row->category_id }}</td>
                            <td><a href="{{ route('admin.subcategory.edit', $row->id) }}">Редактировать</a></td>
                            <td><a href="{{ route('admin.subcategory.destroy', $row->id) }}">Удалить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        {{ $subcategory->links() }}
    </div>
@endsection
