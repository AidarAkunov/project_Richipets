@extends('admin.layout')

@section('title')
    Товары
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 fw-bold text-center">Товары</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('admin.index') }}">
                        <button type="button"  class="btn btn-primary m-0 text-center">На главную</button>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin.product.create') }}">
                        <button type="button" class="btn btn-primary float-sm-right">Добавить товар</button>
                    </a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>Товары</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Бренд</th>
                        <th colspan="2" class="text-center">Действия</th>
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
    </section>
</div>
@endsection
