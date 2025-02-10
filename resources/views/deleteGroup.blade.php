<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/app.css')}} " rel="stylesheet">
<body>
    @include('partials.nav')
    <div class="container">
        <form action="">
            <div class="form-group">
                <h2>Buscar grupo</h2>
                <label for="matricula">matricula</label>
                <input type="text" class="form-control" name="matricula" id="matriculla" placeholder="matricula">
                <button class="btn btn-primary d-grid">Buscar</button>
            </div>
        </form>
        
        <form action="">
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


            <div class="d-grid flex">
                <button class="btn btn-danger" type="submit">Eliminar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='dashboard'">Regresar</button>
            </div>

        </form>

       
    </div>
    
</body>
</html>