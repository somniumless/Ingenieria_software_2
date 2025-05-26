use Illuminate\Support\Facades\DB;

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "Conexión exitosa 🎉";
    } catch (\Exception $e) {
        return "Error de conexión: " . $e->getMessage();
    }
});


