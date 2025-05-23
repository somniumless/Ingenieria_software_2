<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\VersionDocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::with(['usuario', 'versiones'])
                        ->where('eliminado', false)
                        ->paginate(10);
        
        return view('documentos.index', compact('documentos'));
    }

    public function show($id)
    {
        $documento = Documento::with(['versiones', 'usuario'])
                        ->findOrFail($id);
        
        return view('documentos.show', compact('documento'));
    }

    public function create()
    {
        return view('documentos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'archivo' => 'required|file|max:10240',  # Máx 10MB
        ]);

        $file = $request->file('archivo');
        $hash = hash_file('sha256', $file->path());

        // Crear documento principal
        $documento = Documento::create([
            'documento_id' => 'DOC-' . Str::random(10),
            'usuario_id' => auth()->user()->usuario_id,
            'nombre' => $request->nombre,
            'tipo' => strtoupper($file->extension()),
            'tamaño_mb' => $file->getSize() / 1024 / 1024,
            'hash_archivo' => $hash,
            'ubicacion_almacenamiento' => $file->store('', 'documentos')
        ]);

        // Crear versión inicial del documento
        VersionDocumento::create([
            'documento_id' => $documento->documento_id,
            'numero_version' => 1,
            'usuario_id' => auth()->user()->usuario_id,
            'fecha_modificacion' => now(),  
            'cambios' => 'Versión inicial',
            'hash_version' => $hash
        ]);

        return redirect()->route('documentos.show', $documento->documento_id);
    }
}