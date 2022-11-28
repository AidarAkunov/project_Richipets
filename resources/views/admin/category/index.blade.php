@extends('admin.layout')
@section('title')
    Категории
@endsection
@section('content')
    <div class="container mt-3 col-10">
        <a href="{{ route('admin.category.create') }}">
            <button type="button"  class="btn btn-primary">Добавить категорию</button></a><br><br>
        <a href="{{ route('admin.index') }}" class="nav-link px-0 align-middle">
            <button type="button"  class="btn btn-primary">На главную</button></a>
        <table class="table table-bordered table-striped">
            <div class="h4 text-center">
                <p class="fw-bold">Категории</p>
            </div>
            <thead>
                <tr class="text-center">
                    <th>Категории</th>
                    <th>Редактирование</th>
                    <th>Удаление</th>
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
@endsection
