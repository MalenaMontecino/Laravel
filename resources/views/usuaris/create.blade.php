<!-- resources/views/usuaris/create.blade.php -->

@extends('layouts.principal')
@section('titulo', 'Crear Usuario')

@section('contenido')
    <h1 class="mt-5">Crear Usuario</h1>

    <form action="{{ route('usuaris.store') }}" method="POST">
        @csrf
        <!-- Campos del formulario para crear el usuario -->
        <div class="form-group">
            <label for="nom_usuari">Nombre de Usuario</label>
            <input type="text" class="form-control" id="nom_usuari" name="nom_usuari">
        </div>
        <div class="form-group">
            <label for="correu">Correo Electrónico</label>
            <input type="email" class="form-control" id="correu" name="correu">
        </div>
        <div class="form-group">
            <label for="contrasenya">Contraseña</label>
            <input type="password" class="form-control" id="contrasenya" name="contrasenya">
        </div>
        <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="cognom">Apellido</label>
            <input type="text" class="form-control" id="cognom" name="cognom">
        </div>
        <div class="form-group">
            <label for="actiu">Estado</label>
            <select class="form-control" id="actiu" name="actiu">
                <option value="1" selected>Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipus_usuaris_id">Tipo Usuario</label>
            <select class="form-control" id="tipus_usuaris_id" name="tipus_usuaris_id">
                <option value="1">Administrador</option>
                <option value="2">Profesor</option>
                <option value="3">Alumno</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>
@endsection
