<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>grupos</title>
    <link href="../css/app.css " rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
@include('partials.nav')
<div class="container mt-5">
    <h1>Lista de Grupos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Profesor</th>
                <th>Número de Estudiantes</th>
                <th>Turno</th>
                <th>Grado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{ $group->matricula }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->teacherId }}</td>
                    <td>{{ $group->numStudents }}</td>
                    <td>{{ $group->swift }}</td>
                    <td>{{ $group->grade }}</td>
                    <td>
                        <button class="btn btn-primary" onclick="window.location.href='{{route('searchGrpBtnUp', $group->matricula )}}'" >Editar</button>
                        <button class="btn btn-danger" onclick="window.location.href='{{route('searchGrpBtnDown' , $group->matricula)}}'">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-grid">
        <button class="btn btn-primary" onclick="window.location.href='{{route('dashboard')}}'">regresar</button>
    </div>
</div>
</body>
</html>