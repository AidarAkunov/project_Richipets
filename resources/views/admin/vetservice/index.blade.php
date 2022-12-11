@extends('admin.main.layout')

@section('title')
    Вет. сервис
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 fw-bold text-center">Ветеринарные сервисы</h1>
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
                        <a href="{{ route('admin.vetservice.create') }}">
                            <button type="button" class="btn btn-primary float-sm-right">Добавить сервис</button>
                        </a>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr class="text-center">
                        <th>Сервисы</th>
                        <th>Описание</th>
                        <th>Телефон</th>
                        <th>Фото</th>
                        <th>Подкатегории</th>
                        <th colspan="2" class="text-center">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($vetservice as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>
                                <div class="text-center h-25 w-25">
                                    <img src="{{ asset('storage/' . $row->image) }}" class="rounded w-50 h-50"
                                         alt="image">
                                </div>
                            </td>
                            <td>{{ $row->subcategory_id }}</td>
                            <td><a href="{{ route('admin.vetservice.edit', $row->id) }}">Редактировать</a></td>
                            <td><a href="{{ route('admin.vetservice.destroy', $row->id) }}">Удалить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        {{ $vetservice->links() }}
    </div>
@endsection
