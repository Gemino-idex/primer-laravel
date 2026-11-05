<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes =Cliente::get();
        return view('clientes.index',compact('clientes'));
    }
    public function create()
    {
        return view('clientes.create');
    }
    public function store(Request $request)
    {
        try{
        $cliente = new cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return redirect()->route('clientes')->with('correcto','cliente guardado correctamente');
        }catch(\Exception $e){
            //return $e->getMessage();
            return redirect()->route('clientes')->with('error','Error al guardar al cliente:');
        }
    }
}