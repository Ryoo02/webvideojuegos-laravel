@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Comentario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
            <a class="navbar-brand" href="http://127.0.0.1:8000/comentarios">Volver a la Tabla</a>
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Comentario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comentarios.update', $comentario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('comentario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
