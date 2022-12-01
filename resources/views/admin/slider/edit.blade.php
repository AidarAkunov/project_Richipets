@extends('admin.layout')

@section('title')
  Изменение слайда
@endsection

@section('content')
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid mt-5">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title fw-bold">Изменить слайд</h3>
        </div>
        <form method='POST' action="{{ route('admin.slider.update', $slider->id) }}" enctype="multipart/form-data">
          <div class="card-body">
              <div class="form-group">
                  <label for="Name">Название</label>
                  <input type="text" value="{{ $slider->name }}" class="form-control" name='name' id="name">
                  @error('name')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
            <div class="form-group">
              <label for="link">Путь</label>
              <input type="file" value="{{ $slider->link }}" class="form-control" name='link' id="link">
                @error('link')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
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
