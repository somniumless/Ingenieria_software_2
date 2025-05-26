<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'Notificacion';
    protected $primaryKey = 'notificacion_id';
    public $timestamps = false;

    protected $fillable = [
        'usuario_id', 'tipo', 'titulo', 'mensaje', 
        'fecha_envio', 'leida', 'url_accion'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}