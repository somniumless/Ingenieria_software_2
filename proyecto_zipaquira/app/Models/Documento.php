<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'Documento';  # Nombre exacto de tu tabla
    protected $primaryKey = 'documento_id';  # Clave primaria personalizada
    public $incrementing = false;  # IDs alfanuméricos
    protected $keyType = 'string';  # Tipo de clave

    protected $fillable = [
        'documento_id', 'usuario_id', 'nombre', 'tipo', 
        'tamaño_mb', 'fecha_subida', 'ubicacion_almacenamiento',
        'hash_archivo', 'eliminado'
    ];

    public function versiones()
    {
        return $this->hasMany(VersionDocumento::class, 'documento_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}