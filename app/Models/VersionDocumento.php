<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VersionDocumento extends Model
{
    protected $table = 'Version_Documento';  # Nombre exacto
    protected $primaryKey = 'version_id';
    public $timestamps = false;  # No usa created_at/updated_at

    protected $fillable = [
        'documento_id', 'numero_version', 'usuario_id',
        'fecha_modificacion', 'cambios', 'hash_version'
    ];

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'documento_id');
    }
}