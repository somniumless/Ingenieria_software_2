<?php

namespace App\Listeners;

use App\Events\DocumentoSubido;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Notificacion;

class EnviarNotificacionDocumento
{
    public function handle(DocumentoSubido $event)
    {
        Notificacion::create([
            'usuario_id' => $event->documento->usuario_id,
            'tipo' => 'DOCUMENTO',
            'titulo' => 'Nuevo documento subido',
            'mensaje' => 'Se ha subido el documento: ' . $event->documento->nombre,
            'fecha_envio' => now(),
            'leida' => false,
            'url_accion' => route('documentos.show', $event->documento->documento_id)
        ]);
    }
}
