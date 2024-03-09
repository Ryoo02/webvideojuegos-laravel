<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Videojuego
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $genero
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Videojuego extends Model
{
    
    static $rules = [
		'nombre' => 'required|string',
		'descripcion' => 'required|string',
		'genero' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','genero'];



}
