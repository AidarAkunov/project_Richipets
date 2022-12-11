@extends('admin.main.layout')

@section('title')
    Характеристики
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 fw-bold text-center">Значение характеристик</h1>
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
                        <a href="{{ route('admin.property.propertyValue.create', $property->id) }}">
                            <button type="button" class="btn btn-primary float-sm-right">Добавление значение Характеристики</button>
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
                    @foreach ($property_value as $row)
                        <tr>
                            <td>{{ $row->name }}</a></td>
                            <td><a href="{{ route('admin.property.propertyValue.destroy', $row->id) }}">Удалить</a></td>
                            <td><a href="{{ route('admin.property.propertyValue.edit', $row->id) }}">Изменить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
