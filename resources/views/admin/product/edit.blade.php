<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel='stylesheet' href="{{ asset('css/app.css') }}">
      <title>Изменить товар</title>
  </head>
  <body>
    <form method='POST' action="{{ route('admin.product.update', $product->id) }}">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="{{ $product->name }}" name='name' id="name" aria-describedby="name">
      </div>
      <div class="form-group">
        <label for="price">Цена</label>
        <input type="text" class="form-control" value="{{ $product->price }}" name='price' id="price" aria-describedby="price">
      </div>
      <div class="form-group">
        <label for="count">Количество</label>
        <input type="text" class="form-control" value="{{ $product->count }}" name='count' id="count" aria-describedby="count">
      </div>
        <div class="mb-3">
            <label for="brand_id" class="form-label">Выберите бренд:</label>
            <select name="brand_id">
                @foreach ($brand as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
        <input type='hidden' name='_token' value="{{ csrf_token() }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>
