@extends('admin.main.layout')

@section('title')
    Добавление пользователя
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Добавить пользователя</h3>
                    </div>
                    <form method='POST' action="{{ route('admin.user.store') }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Имя</label>
                                <input type="text" value="{{ old('name') }}" class="form-control" name='name' id="name"
                                       placeholder="Введите имя пользователя">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Почта</label>
                                <input type="text" value="{{ old('email') }}" class="form-control" name='email' id="email"
                                       placeholder="Введите почту">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="text" value="{{ old('password') }}" class="form-control" name='password' id="password"
                                       placeholder="Введите пароль">
                                @error('password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="role">Выберите роль:</label>
                                <select class="form-control" name="role">
                                    @foreach ($role as $id => $row)
                                        <option value="{{ $id }}"
                                            {{ $id == old('role_id') ? 'selected': '' }}>
                                            {{ $row }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
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
