@extends('admin.main.layout')

@section('title')
    Главный Контент
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 fw-bold text-center">Контент</h1>
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
                        <a href="{{ route('admin.mainContent.createProduct') }}">
                            <button type="button" class="btn btn-primary float-sm-right">Добавление продукта</button>
                        </a>
                        <a href="{{ route('admin.mainContent.createBrand') }}">
                            <button type="button" class="btn btn-primary float-sm-right">Добавление бренда</button>
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
                    @foreach ($BasicBrands as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            @if ($row->type == \App\Models\Basic\BasicBrands::TYPE_BRAND)
                                <td><a href="{{ route('admin.mainContent.editBrand', $row->id) }}">Изменить</a></td>
                            @else
                                <td><a href="{{ route('admin.mainContent.editProduct', $row->id) }}">Изменить</a></td>
                            @endif
                                <td><a href="{{ route('admin.mainContent.destroy', $row->id) }}">Удалить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
