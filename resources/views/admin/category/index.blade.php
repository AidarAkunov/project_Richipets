@extends('admin.main.layout')

@section('title')
    Категории
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 fw-bold text-center">Категории</h1>
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
                        <a href="{{ route('admin.category.create') }}">
                            <button type="button" class="btn btn-primary float-sm-right">Добавление категории</button>
                        </a>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr class="text-center">
                        <th>Название</th>
                        <th colspan="2" class="text-center">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($category as $row)
                        <tr>
                            <td><a href="{{ route('admin.subcategory.index', $row->id) }}">{{ $row->name }}</a></td>
                            <td><a href="{{ route('admin.category.edit', $row->id) }}">Изменить</a></td>
                            <td><a href="{{ route('admin.category.destroy', $row->id) }}">Удалить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
