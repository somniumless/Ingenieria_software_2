<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario'; // Nombre real de la tabla

    protected $primaryKey = 'usuario_id'; // Clave primaria personalizada

    public $timestamps = false; // Si no usas created_at y updated_at

    protected $fillable = [
        'rol_id',
        'nombre',
        'email',
        'password_hash',
        'fecha_creacion',
        'ultimo_login',
        'activo',
        'intentos_fallidos',
        'fecha_bloqueo'
    ];
}
