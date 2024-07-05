<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    

    Route::get('/directorio/crear', [DirectorioController::class,
                'create'])->name('directorio.create');

    Route::post('/directorio', [DirectorioController::class,
                'store'])->name('directorio.store');
    
    Route::get('/directorio/buscar', function() {
                return view('buscar');
                })->name('directorio.buscar');

    Route::get('/directorio/resultados', [DirectorioController::class, 'buscar'])->name('directorio.buscar');

    Route::get('/entradas/{id}/eliminar', [EntryController::class, 'showDeleteEntry'])->name('entradas.eliminar');


     Route::delete('/entradas/{id}', [EntryController::class, 'deleteEntry'])->name('entradas.delete');


    
      Route::get('/directorio/buscar', [DirectorioController::class, 'buscarForm'])
                                        ->name('directorio.buscarForm');


       Route::post('/directorio/buscar', [DirectorioController::class, 'buscar'])
                                         ->name('directorio.buscar');
});
