<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola tus muertos</h1>
    <form action="{{action([App\Http\Controllers\PuasController::class, 'formulario'], ['hueles a pedo']) }}" method="post">
        @csrf
        <label for="nombre">Nombre: </label><br>
        <input  type="text" id="nombre" name="nombre" value={{old ('nombre')}}><br>
        <label for="edad">Edad: </label><br>
        <input type="number" id="edad" name="edad" value={{old ('edad')}}><br>
        <button type='submit'>Enviar</button>
    </form>
</body>
</html>