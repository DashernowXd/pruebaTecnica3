
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/app.css " rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <div class="row justify-content-center">
        

            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='{{route('createStudentIntf')}}'">Registrar Alumno</button>
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='{{route('delStudentIntf')}}'">Baja de alumno</button>
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='{{route('updateStudentIntf')}}'">Actualizar Alumno</button>
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='{{route('tableStudentIntf')}}'">Mostrar Alumnos</button>
                
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='{{route('createGroupIntf')}}'">Crear grupo</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='{{route('delGroupIntf')}}'">Eliminar grupo</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='{{route('updateGroupIntf')}}'">Actualizar grupo</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='{{route('tableGroupsIntf')}}'">Mostrar Grupo</button>

            </div>
            <div class="row">
                <button class="btn btn-danger" onclick= "window.location.href='{{route('auth.logout')}}'">cerrar sesión</button>
            </div>
           
        </div>
    </div>
</body>
</html>

