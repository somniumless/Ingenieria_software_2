<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button">
        Notificaciones @if($notificaciones->count()) <span class="badge bg-danger">{{ $notificaciones->count() }}</span> @endif
    </button>
    <ul class="dropdown-menu">
        @forelse($notificaciones as $notif)
        <li>
            <a class="dropdown-item" href="{{ $notif->url_accion }}">
                <strong>{{ $notif->titulo }}</strong>
                <small class="text-muted">{{ $notif->fecha_envio->diffForHumans() }}</small>
            </a>
        </li>
        @empty
        <li><span class="dropdown-item">No hay notificaciones</span></li>
        @endforelse
    </ul>
</div>