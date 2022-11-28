@extends('admin.layout')

@section('title')
    Подкатегории
@endsection
@section('content')
    <div class="container mt-3 col-10">
        <a href="{{ route('admin.subcategory.create') }}">
            <button type="button" class="btn btn-primary">Добавить подкатегорию</button></a><br><br>
        <a href="{{ route('admin.index') }}" class="nav-link px-0 align-middle">
            <button type="button" class="btn btn-primary">На главную</button></a>
        <table class="table table-bordered table-striped">
            <div class="h4 text-center">
                <p class="fw-bold">Подкатегории</p>
            </div>
            <thead>
            <tr class="text-center">
                <th>Подкатегории</th>
                <th>Категории</th>
                <th>Редактирование</th>
                <th>Удаление</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subcategory as $row)
                <tr>
                    <td><a href="{{ route('admin.brand.index', $row->id) }}">{{ $row->name }}</a></td>
                    <td>{{ $row->category_id }}</td>
                    <td><a href="{{ route('admin.subcategory.edit', $row->id) }}">Редактировать</a></td>
                    <td><a href="{{ route('admin.subcategory.destroy', $row->id) }}">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
