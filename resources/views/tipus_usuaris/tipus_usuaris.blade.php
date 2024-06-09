@extends('layouts.principal')
@section('titulo','tipus_usuaris')

@section('contenido')
<h1 class="mt-5">Tipos de Usuario</h1>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tipusUsuaris as $tipusUsuari)
        <tr>
            <td>{{ $tipusUsuari->id }}</td>
            <td>{{ $tipusUsuari->tipus }}</td>
        
            <td>{{ $tipusUsuari->actiu ? 'Activo' : 'Inactivo' }}
        </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection