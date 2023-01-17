<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id_alumno
 * @property $nombres
 * @property $apellidos
 * @property $carnet
 * @property $id_grado
 * @property $nombre_de_madre
 * @property $nombre_de_padre
 * @property $edad
 * @property $nota_final
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Grado $grado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{

  protected $primaryKey = 'id_alumno';

  static $rules = [
    // 'id_alumno' => 'required',
    'nombres' => ['required', 'alpha'],
    'apellidos' => ['required', 'alpha'],
    'carnet' => ['required', 'alpha_num'],
    'id_grado' => 'required',
    'nombre_de_madre' => ['required', 'alpha'],
    'nombre_de_padre' => ['required', 'alpha'],
    'edad' => ['required', 'numeric', 'min:0', 'max:100'],
    'nota_final' => ['required', 'numeric', 'min:0.0', 'max:10.0'],
    // 'estado' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombres', 'apellidos', 'carnet', 'id_grado', 'nombre_de_madre', 'nombre_de_padre', 'edad', 'nota_final'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function grado()
  {
    return $this->hasOne('App\Models\Grado', 'id_grado', 'id_grado');
  }
}
