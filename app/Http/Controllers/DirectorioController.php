<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectorioController extends Controller
{
    public function create()
    {
        return view('crearEntrada');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigoEntrada' => 'required|unique:directorios,codigoEntrada',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required|email|unique:directorios,correo',
        ]);

        Directorio::create($request->all());

        return redirect()->route('directorio.create')->with('success', 'Entrada creada exitosamente.');
    }

    public function buscar(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
        ]);

        $directorio = Directorio::where('correo', $request->correo)->first();

        if ($directorio) {
            return view('resultadoBusqueda', compact('directorio'));
        } else {
            return redirect()->route('directorio.buscar');
        }
    }

    
}

     
    {
        
        $directorios = Directorio::all();
        return view('directorio.index', compact('directorios'));
    }

    
   
    {
        return view('directorio.buscar');
    }

    
    
    {
        
        $request->validate([
            'correo' => 'required|email',
        ]);

        
        $correo = $request->correo;
        $entrada = Directorio::where('correo', $correo)->first();

        if ($entrada) {
            
            return view('directorio.vercontactos', compact('entrada'));
        } else {
            
            return redirect()->back()->with('error', 'No se encontró ninguna entrada con el correo proporcionado');
        }
    }