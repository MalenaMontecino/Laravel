<!-- resources/views/criterios/index.blade.php -->

@extends('layouts.principal')
@section('titulo', 'Criterios de Evaluación')

@section('contenido')
    <h1 class="mt-5">Criterios de Evaluación</h1>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Orden</th>
                <th>Descripción</th>
                <th>Activo</th>
                <th>Resultados</th>
                <!-- Agrega más columnas si es necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($criterios as $criterio)
            <tr>
                <td>{{ $criterio->id }}</td>
                <td>{{ $criterio->ordre }}</td>
                <td>{{ $criterio->descripcio }}</td>
                <td>{{ $criterio->actiu ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $criterio->resultats_aprenentatge_id }}</td>
                <!-- Agrega más columnas si es necesario -->
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
