@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="col-sm-6">
            <a href="{{ route('admin.main.index') }}">
                <button type="button" class="btn btn-primary m-0 text-center">Перейти в администретивную панель</button>
            </a>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
