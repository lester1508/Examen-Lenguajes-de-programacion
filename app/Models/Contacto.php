<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    public $table = 'contactos';

    public $fillable = [
        'id',
        'codigoEntrada',
        'nombre',
        'apellido',
        'telefono'
    ];
}
class ContactoController extends Controller
{
    
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|string',
            'entrada_id' => 'required|integer',
        ]);

        // Crear un nuevo contacto
        $contacto = new Contacto([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'entrada_id' => $request->entrada_id,
        ]);
        $contacto->save();

        return redirect()->route('directorio.vercontactos', $request->entrada_id);
    }

    
    public function destroy($id)
    {
        $contacto = Contacto::findOrFail($id);
        $entrada_id = $contacto->entrada_id;
        $contacto->delete();

        
        return redirect()->route('directorio.vercontactos', $entrada_id);
    }
}