@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Documentos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Tamaño (MB)</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documentos as $doc)
            <tr>
                <td>{{ $doc->nombre }}</td>
                <td>{{ $doc->tipo }}</td>
                <td>{{ $doc->tamaño_mb }}</td>
                <td>
                    <a href="{{ route('documentos.show', $doc->documento_id) }}" 
                       class="btn btn-sm btn-primary">
                        Ver
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $documentos->links() }}
</div>
@endsection