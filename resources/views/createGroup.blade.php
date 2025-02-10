<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style href="{{asset('css/app.css')}} " rel="stylesheet"></style>
    <title>Crear Grupo</title>
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">matricula</label>
                <input type="text" class="form-control">
    
                <label for="">Nombre</label>
                <input type="text" class="form-control">
                
                <label for="">Matricula profesor</label>
                <input type="text" class="form-control">
                
                <label for="">Numero de alumnos</label>
                <input type="text" class="form-control">
                
                <label for="">Turno</label>
                <input type="text" class="form-control">
                
                <label for="">Semestre</label>
                <input type="text" class="form-control">
    
                <button class="btn btn-primary" type="submit">registrar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='dashboard'">Regresar</button>
            </div>
        </form>
    </div>
    
</body>
</html>