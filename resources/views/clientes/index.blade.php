@extends('layouts.main')
@section('subtitulo','clientes')
@section('boton_crear')
<a href="{{ route('clientes.create') }}" class="bg-cyan-700 text-white px-4 py-2 rounded hover:bg-cyan-500">Registrar Cliente</a>
@endsection
@section('contenido')
<h1>Bienvenido a la lista de Clientes</h1>
@if (session('correcto'))
<div class="bg-green-500 text-white px-4 py-2 rounded mb-4">
    {{ session('correcto') }}
</div>
@endif
@if(session('error'))
<div class="bg-red-500 text-white px-4 py-2 rounded mb-4">
    {{ session('error') }}
</div>
@endif
<div class="w-full overflow-auto">
    <table class="min-w-full shadow-2xs bg-white rounded overflow-hidden">
    <thead class="bg-gray-200">
        <th class="py-2 text-left px-2">nombres</th>
        <th class="py-2 text-left px-2">apellidos</th>
        <th class="py-2 text-left px-2">dni</th>
        <th class="py-2 text-left px-2">email</th>
        <th class="py-2 text-left px-2">telefono</th>

    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td class="px-2 border-b border-gray-300 border-r">{{ $cliente->nombre }}</td>
            <td class="px-2 border-b border-gray-300 border-r">{{ $cliente->apellido }}</td>
            <td class="px-2 border-b border-gray-300 border-r">{{ $cliente->dni }}</td>
            <td class="px-2 border-b border-gray-300 border-r">{{ $cliente->email }}</td>
            <td class="px-2 border-b border-gray-300 border-r">{{ $cliente->telefono }}</td>
        </tr>
    </tbody>    
@endforeach
    </table>    
</div>
@endsection
