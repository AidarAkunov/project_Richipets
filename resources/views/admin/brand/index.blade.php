@extends('admin.layout')

@section('title')
    Бренды
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 fw-bold text-center">Бренды</h1>
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
                    <a href="{{ route('admin.brand.create') }}">
                        <button type="button" class="btn btn-primary float-sm-right">Добавить бренд</button>
                    </a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>Название</th>
                        <th>Подкатегория</th>
                        <th colspan="2" class="text-center">Действия</th>
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
    </section>
</div>
@endsection
