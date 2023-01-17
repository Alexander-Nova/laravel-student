<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grado
 *
 * @property $id_grado
 * @property $nombre
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grado extends Model
{

    protected $primaryKey = 'id_grado';

    static $rules = [
        // 'id_grado' => 'required',
        'nombre' => ['required', 'min:3',],
        // 'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'id_grado', 'id_grado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->hasMany('App\Models\Profesor', 'id_grado', 'id_grado');
    }
}
