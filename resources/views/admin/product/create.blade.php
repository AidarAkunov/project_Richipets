<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel='stylesheet' href="{{ asset('css/app.css') }}">
      <title>Добавить товар</title>
  </head>
  <body>
    <form method='POST' action ="{{ route('admin.product.store') }}">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name='name' id="name" aria-describedby="name" placeholder="Enter name">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Цена</label>
        <input type="text" class="form-control" name='price' id="price" aria-describedby="price" placeholder="Enter price">
      </div>
      <div class="mb-3">
        <label for="count" class="form-label">Количество</label>
        <input type="text" class="form-control" name='count' id="count" aria-describedby="count" placeholder="Enter count">
      </div>
      <div class="mb-3">
        <label for="brand_id" class="form-label">Выберите бренд:</label>
            <select name="brand_id">
              @foreach ($brand as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
              @endforeach
            </select>
      </div>
      <input type='hidden' name='_token' value="{{ csrf_token(); }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
  </body>
</html>