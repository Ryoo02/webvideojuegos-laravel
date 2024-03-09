@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a class="navbar-brand" href="http://127.0.0.1:8000/videojuegos">Ir a la Tabla de Videojuegos</a>
    <a class="navbar-brand" href="http://127.0.0.1:8000/comentarios">Ir a la Tabla de Comentarios</a>

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
