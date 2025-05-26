<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Notificacion;

class Notificaciones extends Component
{
    public $notificaciones;

    public function mount()
    {
        $this->notificaciones = Notificacion::where('usuario_id', auth()->id())
            ->where('leida', false)
            ->orderBy('fecha_envio', 'desc')
            ->limit(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.notificaciones');
    }
}
