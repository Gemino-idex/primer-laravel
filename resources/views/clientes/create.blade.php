@extends('layouts.main')
@section('subtitulo','nuevo cliente')
@section('boton_crear')
<a href="{{ route('libros') }}" class="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-500">
    <i class="fa-solid fa-arrow-left"></i>Regresar
</a>
@endsection
@section('contenido')
<form action="{{ route('clientes.store') }}" method="post" class="grid grid-cols-2 gap-4">
    @csrf
    <div class="flex flex-col">
        <label>nombre</label>
        <input type="text" name="nombre" class="border border-gray-300 rounded px-2 py-1" />
    </div>
    <div class="flex flex-col">
        <label>apellido</label>
        <input type="text" name="apellido" class="border border-gray-300 rounded px-2 py-1" />
    </div>
    <div class="flex flex-col">
        <label for="">dni</label>
        <input type="text" name="dni" class="border border-gray-300 rounded px-2 py-1" />
    </div>
    <div class="flex flex-col">
        <label for="">email</label>
        <input type="text" name="email" class="border border-gray-300 rounded px-2 py-1">
    </div>
    <div class="flex flex-col">
        <label for="">telefono</label>
        <input type="text" name="telefono" class="border border-gray-300 rounded px-2 py-1">
    </div>
    <div>
        <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-500">
            Guardar
        </button>
    </div>
</form>
@endsection