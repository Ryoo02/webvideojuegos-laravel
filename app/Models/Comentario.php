<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentario
 *
 * @property $id
 * @property $id_videojuego
 * @property $usuario
 * @property $puntaje
 * @property $reseña
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comentario extends Model
{
    
    static $rules = [
		'id_videojuego' => 'required',
		'usuario' => 'required|string',
		'puntaje' => 'required',
		'reseña' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_videojuego','usuario','puntaje','reseña'];



}
