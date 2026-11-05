<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = libro::get();
        return view('libros.index',compact('libros'));
    }
    public function create()
    {
        return view('libros.create');
    }
    public function store(Request $request)
    {
        try{
        $libro = new libro();
        $libro->titulo = $request->titulo;
        $libro->precio = $request->precio;
        $libro->codigo_sbn = $request->codigo_sbn;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->save();
        return redirect()->route('libros')->with('correcto','libro creado correctamente');
        }catch(\Exception $e){
            //return $e->getMessage();
            return redirect()->route('libros')->with('error','Error al crear el libro:');
        }
    }
}
