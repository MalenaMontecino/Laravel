@extends('layouts.principal')
@section('titulo','Cicles')

@section('contenido')
<h1 class="mt-5">Ciclos</h1>

<table  class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Siglas</th>
            <th>Descripción</th>
            <th>Activo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cicles as $cicle)
        <tr>
            <td>{{ $cicle->id }}</td>
            <td>{{ $cicle->sigles }}</td>
            <td>{{ $cicle->descripcio }}</td>
            <td>{{ $cicle->actiu ? 'Activo' : 'Inactivo' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection