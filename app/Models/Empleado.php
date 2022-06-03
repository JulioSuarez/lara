<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $roles_id
 * @property $nombre
 * @property $paterno
 * @property $materno
 * @property $sexo
 * @property $fecha_nacimiento
 * @property $fecha_ingreso
 * @property $telefono
 * @property $estado
 * @property $descripcion_turno
 * @property $hora_entrada
 * @property $hora_salida
 * @property $created_at
 * @property $updated_at
 *
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{

    static $rules = [
		'roles_id' => 'required',
		'nombre' => 'required',
		'paterno' => 'required',
		'materno' => 'required',
		'sexo' => 'required',
		'fecha_nacimiento' => 'required',
		'fecha_ingreso' => 'required',
		'telefono' => 'required',
		'estado' => 'required',
		'descripcion_turno' => 'required',
		'hora_entrada' => 'required',
		'hora_salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['roles_id','nombre','paterno','materno','sexo','fecha_nacimiento','fecha_ingreso','telefono','estado','descripcion_turno','hora_entrada','hora_salida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'roles_id');
    }


}
