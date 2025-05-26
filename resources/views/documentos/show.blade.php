@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $documento->nombre }}</h1>
    <p><strong>Tipo:</strong> {{ $documento->tipo }}</p>
    <p><strong>Subido por:</strong> {{ $documento->usuario->nombre }}</p>

    <h3>Versiones</h3>
    <ul>
        @foreach($documento->versiones as $version)
        <li>
            v{{ $version->numero_version }} - 
            {{ $version->fecha_modificacion->format('d/m/Y') }}
        </li>
        @endforeach
    </ul>
</div>
@endsection