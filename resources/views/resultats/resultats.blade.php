<!-- resources/views/resultats/index.blade.php -->

@extends('layouts.principal')
@section('titulo', 'Resultats d\'Aprenentatge')

@section('contenido')
    <h1 class="mt-5">Resultats d'Aprenentatge</h1>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Orden</th>
                <th>Descripción</th>
                <th>Activo</th>
                <th>Módulo</th>
                <!-- Agrega más columnas si es necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($resultats as $resultat)
            <tr>
                <td>{{ $resultat->id }}</td>
                <td>{{ $resultat->ordre }}</td>
                <td>{{ $resultat->descripcio }}</td>
                <td>{{ $resultat->actiu ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $resultat->moduls_id }}</td>
                <!-- Agrega más columnas si es necesario -->
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
