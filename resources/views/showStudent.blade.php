<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>listado de alumnos</title>
    <link href="../css/app.css " rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>

</head>
<body>
    @include('partials.nav')
    <table class=" table table-striped">
        <thead>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Grupo</th>
            
        </thead>

        <tbody>
            @foreach ( $Student as $stud )
            <tr>
                <td>{{$stud->matricula}}</td>
                <td>{{$stud->name}}</td>
                <td>{{$stud->lastname}}</td>
                <td>{{$stud->age}}</td>
                <td>{{$stud->cellNum}}</td>
                <td>{{$stud->group_id}}</td>
                <td>
                    <button class="btn btn-primary" onclick="window.location.href='{{route('searchStuBtnUp', $stud->matricula)}}'">Editar</button>
                    <button class="btn btn-primary" onclick="window.location.href='{{route('searchStuBtnDown', $stud->matricula)}}'">Eliminar</button>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    <div class="d-grid">
        <button class="btn btn-primary" onclick="window.location.href='{{route('dashboard')}}'">Regresar</button>
        
    </div>
    
</body>
</html>