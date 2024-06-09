@extends('layouts.principal')
@section('titulo', 'usuaris')

@section('contenido')
    <h1 class="mt-5">Lista de Usuarios</h1>

    <!-- Botón para crear usuario -->
    <a href="{{ route('usuaris.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre de Usuario</th>
                <th>Correo Electrónico</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Estado</th>
                <th>Tipo usuario</th>
                <th>Acciones</th> <!-- Columna para acciones: editar y eliminar -->
            </tr>
        </thead>
        <tbody>
            @foreach($usuaris as $usuari)
            <tr>
                <td>{{ $usuari->id }}</td>
                <td>{{ $usuari->nom_usuari }}</td>
                <td>{{ $usuari->correu }}</td>
              
                <td>{{ $usuari->nom }}</td>
                <td>{{ $usuari->cognom }}</td>
                <td>{{ $usuari->actiu ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    @if($usuari->tipus_usuaris_id == 1)
                        Administrador
                    @elseif($usuari->tipus_usuaris_id == 2)
                        Profesor
                    @elseif($usuari->tipus_usuaris_id == 3)
                        Alumno
                    @endif
                </td>
                <td>
                     <!-- Botón para editar usuario -->
                     <a href="{{ route('usuaris.edit', $usuari->id) }}" class="btn btn-secondary">Editar</a>

                     <!-- Formulario para eliminar usuario -->
                     <form action="{{ route('usuaris.destroy', $usuari->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario? ');">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger">Eliminar</button>
                     </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
