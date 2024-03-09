@extends('layouts.app')

@section('template_title')
    {{ $videojuego->name ?? __('Show') . " " . __('Videojuego') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
            <a class="navbar-brand" href="http://127.0.0.1:8000/videojuegos">Volver a la Tabla</a>
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Videojuego</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('videojuegos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $videojuego->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $videojuego->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $videojuego->genero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
