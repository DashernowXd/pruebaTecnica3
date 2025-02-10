<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar alumno</title>
    <link href="../css/app.css " rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <form action="{{route('searchStuDown')}}" method="GET">
            <div class="form-group">
                <h2>Buscar Alumno</h2>
                <label for="matricula">matricula</label>
                <input type="text" class="form-control" name="matricula" id="matriculla" placeholder="matricula">
                <button class="btn btn-primary d-grid">Buscar</button>
            </div>
        </form>
        @if(@isset($student))
        <form action="{{route('deleteStudent')}}" method="POST">
            <div class="form-group">
            
                <label for="name">Nombre(s)</label>
                <input type="text" name="name" placeholder="nombre" class="form-control" value="{{$student->name}}">
                
                <label for="lastname">Apellido(s)</label>
                <input type="text" class="form-control" id="lastname" placeholder="Apellido" value="{{$student->lastname}}">
    
    
                <label for="emial" class="email">Correo</label>
                <input type="text" name="email" placeholder="email" class="form-control" value="{{$student->email}}">
    
                <label for="phone" class="phone">Telefono</label>
                <input type="text" name="phone" placeholder="telefono" class="form-control" value="{{$student->cellNum}}">
                
                <label for="age">Edad</label>
                <input type="text" class="form-control" id="age" placeholder="Edad" value="{{$student->age}}"> 
                
                <label for="group" >Grupo</label>
                <input type="text" class="form-control" placeholder="Grupo" value="{{$student->group_id}}">
    
    
                <div class="d-grid flex">
                    <button class="d-grid btn btn-danger" type="submit">Eliminar</button>
                    <button class="d-grid btn btn-primary" type="button" onclick="window.location.href='{{route('dashboard')}}'">Regresar</button>
                </div>
            </div>
    
        </form>
        @endif
    </div>
    
</body>
</html>