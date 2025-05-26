<?php

namespace App\Observers;

use App\Models\Documento;

class DocumentoObserver
{
    /**
     * Handle the Documento "created" event.
     */
    public function created(Documento $documento): void
    {
        //
    }

    /**
     * Handle the Documento "updated" event.
     */
    public function updated(Documento $documento): void
    {
        //
    }

    /**
     * Handle the Documento "deleted" event.
     */
    public function deleted(Documento $documento): void
    {
        //
    }

    /**
     * Handle the Documento "restored" event.
     */
    public function restored(Documento $documento): void
    {
        //
    }

    /**
     * Handle the Documento "force deleted" event.
     */
    public function forceDeleted(Documento $documento): void
    {
        //
    }
}
