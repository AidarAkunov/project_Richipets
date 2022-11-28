@extends('admin.layout')
@section('title')
    Бренды
@endsection
@section('content')
    <div class="container mt-3 col-10">
        <a href="{{ route('admin.brand.create') }}">
            <button type="button" class="btn btn-primary">Добавить бренд</button></a><br><br>
        <a href="{{ route('admin.index') }}" class="nav-link px-0 align-middle">
            <button type="button"  class="btn btn-primary">На главную</button></a>
        <table class="table table-bordered table-striped">
            <div class="h4 text-center">
                <p class="fw-bold">Бренды</p>
            </div>
            <thead>
            <tr class="text-center">
                <th>Бренды</th>
                <th>Подкатегории</th>
                <th>Редактирование</th>
                <th>Удаление</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($brand as $row)
                <tr>
                    <td><a href = "{{ route('admin.product.index', $row->id) }}">{{ $row->name }}</a></td>
                    <td>{{ $row->subcategory_id }}</td>
                    <td><a href = "{{ route('admin.brand.edit', $row->id) }}">Редактировать</a></td>
                    <td><a href = "{{ route('admin.brand.destroy', $row->id) }}">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
