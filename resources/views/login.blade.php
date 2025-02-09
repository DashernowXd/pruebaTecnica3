<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

<main class="form-signin w-100 m-auto">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>

        

        <div class="form-floating">
            <input type="text" class="form-control" id="username" name="username"  required>
            <label for="username">Usuario</label>
        </div>

        <div class="form-floating mt-2">
            <input type="password" class="form-control" id="password" name="password" required>
            <label for="password">Contraseña</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Mantener iniciado
            </label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Iniciar sesión</button>
    </form>
</main>

</body>
</html>