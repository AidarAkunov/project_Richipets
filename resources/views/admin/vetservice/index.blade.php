@extends('admin.layout')
@section('title')
    Вет. сервис
@endsection
@section('content')
    <div class="container mt-3 col-10">
        <a href="{{ route('admin.vetservice.create') }}">
            <button type="button" class="btn btn-primary">Добавить сервис</button></a><br><br>
        <a href="{{ route('admin.index') }}" class="nav-link px-0 align-middle">
            <button type="button"  class="btn btn-primary">На главную</button></a>
        <table class="table table-bordered table-striped">
            <div class="h4 text-center">
                <p class="fw-bold">Ветеринарные сервисы</p>
            </div>
            <thead>
            <tr class="text-center">
                <th>Сервисы</th>
                <th>Описание</th>
                <th>Телефон</th>
                <th>Ссылка</th>
                <th>Подкатегории</th>
                <th>Редактирование</th>
                <th>Удаление</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($vetservice as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->link }}</td>
                    <td>{{ $row->subcategory_id }}</td>
                    <td><a href = "{{ route('admin.vetservice.edit', $row->id) }}">Редактировать</a></td>
                    <td><a href = "{{ route('admin.vetservice.destroy', $row->id) }}">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
