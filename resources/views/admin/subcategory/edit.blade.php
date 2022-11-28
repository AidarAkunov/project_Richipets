<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel='stylesheet' href="{{ asset('css/app.css') }}">
      <title>Изменить подкатегорию</title>
  </head>
  <body>
    <form method='POST' action="{{ route('admin.subcategory.update', $subcategory->id) }}">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value ="{{ $subcategory->name }}" name='name' id="name" aria-describedby="name">
      </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Выберите категорию:</label>
            <select name="category_id">
                @foreach ($category as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
        <input type='hidden' name='_token' value="{{ csrf_token() }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>
