<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Students</h2>
    <table>
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>Grupo</th>
            </tr>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->matricula }}</td>
                        <td>{{ $student->nombre }}</td>
                        <td>{{ $student->apellido }}</td>
                        <td>{{ $student->edad }}</td>
                        <td>{{ $student->carrera }}</td>
                        <td>{{ $student->semestre }}</td>
                        <td>{{ $student->grupo }}</td>
                    </tr>
                @endforeach

            </tbody>
        </thead>
        
    </table>
    
</body>
</html>