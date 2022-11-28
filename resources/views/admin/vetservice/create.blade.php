<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel ='stylesheet' href="{{ asset('css/app.css') }}">
      <title>Добавить сервис</title>
  </head>
  <body>
    <form method='POST' action="{{ route('admin.vetservice.store') }}">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" value="{{ old('name') }}" class="form-control" name='name' id="name" aria-describedby="name" placeholder="Enter name">
          @error('name')
          <p class="text-danger">{{ $message }}</p>
          @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" value="{{ old('description') }}" class="form-control" name='description' id="description" aria-describedby="description" placeholder="Enter description">
          @error('description')
          <p class="text-danger">{{ $message }}</p>
          @enderror
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" value="{{ old('phone') }}" class="form-control" name='phone' id="phone" aria-describedby="phone" placeholder="Enter phone">
          @error('phone')
          <p class="text-danger">{{ $message }}</p>
          @enderror
      </div>
      <div class="mb-3">
        <label for="link" class="form-label">Link</label>
        <input type="text" value="{{ old('link') }}" class="form-control" name='link' id="link" aria-describedby="link" placeholder="Enter link">
          @error('link')
          <p class="text-danger">{{ $message }}</p>
          @enderror
      </div>
      <div class="mb-3">
        <label for="subcategory_id" class="form-label">Выберите подкатегорию:</label>
            <select name="subcategory_id">
              @foreach ($subcategory as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
              @endforeach
            </select>
      </div>
      <input type='hidden' name='_token' value="{{ csrf_token() }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>
