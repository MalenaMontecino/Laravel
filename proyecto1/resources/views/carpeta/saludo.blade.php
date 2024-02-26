<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h4>Hola  {{$nombre . ' '. $apellidos }}</h4> <!--Blade-->
      <h5> {!!  !!}</h5>
       @if ($nombre == 'Malena')
       {{'¡Eres la mejor!'}}
        
       @else
       {{'Buen intento'}}
           
       @endif

        {{--  --}}

       @switch($type)
           @case(1)
               
               @break
           @case(2)
               
               @break
           @default
               
       @endswitch

   
   
</body>
</html>