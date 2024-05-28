<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partida
 *
 * @property $id
 * @property $id_usuario
 * @property $resultado
 * @property $fecha
 * @property $opcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Partida extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_usuario', 'resultado', 'fecha', 'opcion'];


}
