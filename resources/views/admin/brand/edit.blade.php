<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel ='stylesheet' href="{{ asset('css/app.css') }}">
      <title>Изменить бренд</title>
  </head>
  <body>
    <form method='POST' action="{{ route('admin.brand.update', $brand->id) }}">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" value ="{{ $brand->name }}" name='name' id="name" aria-describedby="name">
      </div>
      <input type='hidden' name='subcategory_id' value="{{ $brand->subcategory_id }}">
        <input type='hidden' name='_token' value="{{ csrf_token(); }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
  </body>
</html>