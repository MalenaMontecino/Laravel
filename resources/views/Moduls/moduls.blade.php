@extends('layouts.principal')
@section('titulo','Moduls')

@section('contenido')

    <h1 class="mt-5">Módulos</h1>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Siglas</th>
                <th>Nombre</th>
                <th>Activo</th>
                <th>Ciclo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($moduls as $modul)
            <tr>
                <td>{{ $modul->id }}</td>
                <td>{{ $modul->codi }}</td>
                <td>{{ $modul->sigles }}</td>
                <td>{{ $modul->nom }}</td>
                <td>{{ $modul->actiu ? 'Activo' : 'Inactivo' }}</td>
                <td>  @if($modul->cicles_id == 1)
                    DAW
                @elseif($modul->cicles_id == 2)
                    DAM
                @elseif($modul->cicles_id == 3)
                    SMIX
                @else
                    Otro
                @endif</td> 
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection