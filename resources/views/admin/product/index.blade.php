@extends('admin.layout')

@section('title')
    Товары
@endsection
@section('content')
    <div class="container mt-3 col-10">
        <a href="{{ route('admin.product.create') }}">
            <button type="button" class="btn btn-primary">Добавить товар</button></a><br><br>
        <a href="{{ route('admin.index') }}" class="nav-link px-0 align-middle">
            <button type="button"  class="btn btn-primary">На главную</button></a>
        <table class="table table-bordered table-striped">
            <div class="h4 text-center">
                <p class="fw-bold">Товары</p>
            </div>
            <thead>
            <tr class="text-center">
                <th>Товары</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Бренды</th>
                <th>Редактирование</th>
                <th>Удаление</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($product as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->price }}</td>
                    <td>{{ $row->count }}</td>
                    <td>{{ $row->brand_id }}</td>
                    <td><a href = "{{ route('admin.product.edit', $row->id) }}">Редактировать</a></td>
                    <td><a href = "{{ route('admin.product.destroy', $row->id) }}">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
