<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'Meta';
    protected $primaryKey = 'meta_id';
    public $incrementing = false;

    public function documentos()
    {
        return $this->belongsToMany(Documento::class, 'Documento_Meta', 'meta_id', 'documento_id')
            ->withPivot(['tipo_relacion', 'usuario_relacion']);
    }
}