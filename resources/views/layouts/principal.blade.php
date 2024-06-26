<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="shortcut icon" href="../public/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> --}}
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="../public/img/logoPolitecnics.png" alt="Politecnics" width="160px" height="50px">
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dades mestres
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{url('/tipus-usuaris')}}">Tipus usuaris</a></li>
                      <li><a class="dropdown-item" href="{{url('/usuaris')}}">Usuaris</a></li>
                      <li><a class="dropdown-item" href="{{url('/cicles')}}">Cicles</a></li>
                      <li><a class="dropdown-item" href="{{url('/moduls')}}">Mòduls</a></li>
                      <li><a class="dropdown-item" href="{{url('/')}}">Asignar Professors</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{url('/')}}">Assignar alumnes</a></li>
                      <li><a class="dropdown-item" href="{{url('/resultats-aprenentatge')}}">Resultats aprenentage</a></li>
                      <li><a class="dropdown-item" href="{{url('/criterios')}}">Criteris avaluació</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Professors
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{url('/')}}">Assignar alumnes</a></li>
                      <li><a class="dropdown-item" href="{{url('/resultats-aprenentatge')}}">Resultats aprenentatge</a></li>
                      <li><a class="dropdown-item" href="{{url('/criterios')}}">Criteris avaluació</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{url('/')}}">Autoavaluació alumnes</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Alumnes
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{url('/')}}">Autoavaluació</a></li>
                                        
                    </ul>
                  </li>
                </ul>
                
              </div>
              <p style="color: white;display: flex ; justify-content: center ; margin-bottom:0;">Malena Montecino</p>
            </div>
          {{-- </nav> --}}
      </nav>
    <div class="container">
        @yield('contenido')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>