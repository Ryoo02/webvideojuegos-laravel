@extends('layouts.app')

@section('template_title')
    Comentario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <a class="navbar-brand" href="http://127.0.0.1:8000/videojuegos">Ir a la Tabla Videojuegos</a>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comentario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comentarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Videojuego</th>
										<th>Usuario</th>
										<th>Puntaje</th>
										<th>Reseña</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comentarios as $comentario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $comentario->id_videojuego }}</td>
											<td>{{ $comentario->usuario }}</td>
											<td>{{ $comentario->puntaje }}</td>
											<td>{{ $comentario->reseña }}</td>

                                            <td>
                                                <form action="{{ route('comentarios.destroy',$comentario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comentarios.show',$comentario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comentarios.edit',$comentario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $comentarios->links() !!}
            </div>
        </div>
    </div>
@endsection
