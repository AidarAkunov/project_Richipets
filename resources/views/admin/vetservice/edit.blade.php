<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel ='stylesheet' href="{{ asset('css/app.css') }}">
      <title>Изменить сервис</title>
  </head>
  <body>
    <form method='POST' action="{{ route('admin.vetservice.update', $vetservice->id) }}">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value ="{{ $vetservice->name }}" name='name' id="name" aria-describedby="name">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" value ="{{ $vetservice->description }}" name='description' id="description" aria-describedby="description">
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" value ="{{ $vetservice->phone }}" name='phone' id="phone" aria-describedby="phone">
      </div>
      <div class="form-group">
        <label for="link">Link</label>
        <input type="text" class="form-control" value ="{{ $vetservice->link }}" name='link' id="link" aria-describedby="link">
      </div>
      <input type='hidden' name='subcategory_id' value="{{ $vetservice->subcategory_id }}">
        <input type='hidden' name='_token' value="{{ csrf_token(); }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
  </body>
</html>