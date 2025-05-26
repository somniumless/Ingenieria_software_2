<form action="{{ route('documentos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Documento</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="archivo" class="form-label">Archivo</label>
        <input type="file" class="form-control" id="archivo" name="archivo" required>
    </div>
    <button type="submit" class="btn btn-primary">Subir</button>
</form>