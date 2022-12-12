@extends('admin.main.layout')

@section('title')
    Изменение пользователя
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Изменить пользователя</h3>
                    </div>
                    <form method='POST' action="{{ route('admin.user.update', $user->id) }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Имя</label>
                                <input type="text" value="{{ $user->name }}" class="form-control" name='name'
                                       id="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Почта</label>
                                <input type="text" value="{{ $user->email }}" class="form-control" name='email'
                                       id="email">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="role">Выберите роль:</label>
                                <select class="form-control" name="role">
                                    @foreach ($role as $id => $row)
                                        <option value="{{ $id }}"
                                            {{ $id == $user->role ? 'selected': '' }}>
                                            {{ $row }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="{{ csrf_token() }}" name='_token' class="form-control"
                                       id="_token">
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
