<!-- resources/views/usuaris/edit.blade.php -->

@extends('layouts.principal')
@section('titulo', 'Editar Usuario')

@section('contenido')
    <h1 class="mt-5">Editar Usuario</h1>

    <form action="{{ route('usuaris.update', $usuari->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Campos del formulario para editar el usuario -->
        <div class="form-group">
            <label for="nom_usuari">Nombre de Usuario</label>
            <input type="text" class="form-control" id="nom_usuari" name="nom_usuari" value="{{ $usuari->nom_usuari }}">
        </div>
        <div class="form-group">
            <label for="correu">Correo Electrónico</label>
            <input type="email" class="form-control" id="correu" name="correu" value="{{ $usuari->correu }}">
        </div>
        <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $usuari->nom }}">
        </div>
        <div class="form-group">
            <label for="cognom">Apellido</label>
            <input type="text" class="form-control" id="cognom" name="cognom" value="{{ $usuari->cognom }}">
        </div>
        <div class="form-group">
            <label for="actiu">Estado</label>
            <select class="form-control" id="actiu" name="actiu">
                <option value="1" {{ $usuari->actiu ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $usuari->actiu ? '' : 'selected' }}>Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipus_usuaris_id">Tipo Usuario</label>
            <select class="form-control" id="tipus_usuaris_id" name="tipus_usuaris_id">
                <option value="1" {{ $usuari->tipus_usuaris_id == 1 ? 'selected' : '' }}>Administrador</option>
                <option value="2" {{ $usuari->tipus_usuaris_id == 2 ? 'selected' : '' }}>Profesor</option>
                <option value="3" {{ $usuari->tipus_usuaris_id == 3 ? 'selected' : '' }}>Alumno</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
