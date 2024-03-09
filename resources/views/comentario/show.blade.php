@extends('layouts.app')

@section('template_title')
    {{ $comentario->name ?? __('Show') . " " . __('Comentario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
            <a class="navbar-brand" href="http://127.0.0.1:8000/comentarios">Volver a la Tabla</a>
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Comentario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comentarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Videojuego:</strong>
                            {{ $comentario->id_videojuego }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $comentario->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Puntaje:</strong>
                            {{ $comentario->puntaje }}
                        </div>
                        <div class="form-group">
                            <strong>Reseña:</strong>
                            {{ $comentario->reseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
