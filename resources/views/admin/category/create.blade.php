<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel='stylesheet' href="{{ asset('css/app.css') }}">
      <title>Добавить категорию</title>
  </head>
  <body>
    <form method='POST' action="{{ route('admin.category.store') }}">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name='name' id="name" aria-describedby="name" placeholder="Enter name">
      </div>
        <input type='hidden' name='_token' value ="{{ csrf_token(); }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
  </body>
</html>