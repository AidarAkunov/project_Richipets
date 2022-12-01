@extends('admin.layout')

@section('title')
  Изменение подкатегории
@endsection

@section('content')
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid mt-5">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title fw-bold">Изменить подкатегорию</h3>
        </div>
        <form method='POST' action="{{ route('admin.subcategory.update', $subcategory->id) }}">
          <div class="card-body">
            <div class="form-group">
              <label for="Name">Название</label>
              <input type="text" value="{{ $subcategory->name }}" class="form-control" name='name' id="name">
                @error('name')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
              <label for="category_id">Выберите категорию:</label>
              <select class="form-control" name="category_id">
                @foreach ($category as $row)
                  <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <input type="hidden" value ="{{ csrf_token() }}" name='_token' class="form-control" id="_token">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
@endsection