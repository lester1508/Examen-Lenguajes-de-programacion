<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function deleteContacto($id)
    {
       
        $contacto = Contacto::findOrFail($id);

       
        $contacto->delete();

        return redirect()->route('contactos.index')->with('success', 'Contacto eliminado correctamente');
    }
}
