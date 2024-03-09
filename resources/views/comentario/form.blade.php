<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_videojuego') }}
            {{ Form::text('id_videojuego', $comentario->id_videojuego, ['class' => 'form-control' . ($errors->has('id_videojuego') ? ' is-invalid' : ''), 'placeholder' => 'Id Videojuego']) }}
            {!! $errors->first('id_videojuego', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $comentario->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puntaje') }}
            {{ Form::text('puntaje', $comentario->puntaje, ['class' => 'form-control' . ($errors->has('puntaje') ? ' is-invalid' : ''), 'placeholder' => 'Puntaje']) }}
            {!! $errors->first('puntaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reseña') }}
            {{ Form::text('reseña', $comentario->reseña, ['class' => 'form-control' . ($errors->has('reseña') ? ' is-invalid' : ''), 'placeholder' => 'Reseña']) }}
            {!! $errors->first('reseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>