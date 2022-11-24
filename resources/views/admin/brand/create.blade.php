<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel ='stylesheet' href="{{ asset('css/app.css') }}">
      <title>Добавить бренд</title>
  </head>
  <body>
    <form method='POST' action="{{ route('admin.brand.store') }}">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name='name' id="name" aria-describedby="name" placeholder="Enter name">
      </div>
      <div class="mb-3">
        <label for="subcategory_id" class="form-label">Выберите подкатегорию:</label>
            <select name="subcategory_id">
              @foreach ($subcategory as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
              @endforeach
            </select>
      </div>
      <input type='hidden' name='_token' value="{{ echo csrf_token(); }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
  </body>
</html>