<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar grupo</title>
    <link href="{{asset('css/app.css')}} " rel="stylesheet">
<body>
    @include('partials.nav')
    <div class="container">
        <form action="{{route('searchGroupUp')}}">
            <div class="form-group">
                <h2>Buscar grupo</h2>
                <label for="matricula">matricula</label>
                <input type="text" class="form-control" name="matricula" id="matriculla" placeholder="matricula">
                <button class="btn btn-primary d-grid" type="submit">Buscar</button>
            </div>
        </form>
        @if(@isset($group))
        <form action="{{route('postUptGroup')}}" method="POST">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$group->name}}" >
            
            <label for="">Matricula profesor</label>
            <input type="text" class="form-control" name="teacherId" value="{{$group->teacherId}}">
            
            <label for="">Numero de alumnos</label>
            <input type="text" class="form-control" name=numStudents value="{{$group->numStudents}}">
            
            <label for="">Turno</label>
            <input type="text" class="form-control" name="swift"  value="{{$group->swift}}">
            
            <label for="">Semestre</label>
            <input type="text" class="form-control" name value="{{$group->grade}}">


            <div class="d-grid flex">
                <button class="btn btn-danger" type="submit">Actualizar</button>
                <button class="btn btn-primary" type="button" onclick="window.location.href='{{route('dashboard')}}'">Regresar</button>
            </div>

        </form>
        @endif

       
    </div>
    
</body>
</html>