<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href="{{ asset('css/app.css') }}">
        <title>Админ панель</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm justify-content-center" style="background-color: #a6a6a6">
            <div class="navbar-nav">
                <span class="navbar-text h4 fw-bold">Редактирование товаров</span><br>
            </div>
        </nav>
        <div class="container mt-3">
            <a href="{{ route('admin.product.create') }}">
            <button type="button" class="btn btn-primary">Добавить товар</button></a><br><br>
            <table class="table table-bordered table-striped">
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
                        <td><a href = "{{ route('admin.product.edit', $row->id) }}">Редактировать</td>
                        <td><a href = "{{ route('admin.product.destroy', $row->id) }}">Удалить</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('admin.index') }}" class="nav-link px-0 align-middle">
            <button type="button"  class="btn btn-primary">Назад</button></a>
        </div>
    </body>
</html>