<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../css/app.css " rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <form action="post">
           
            <div class="form-group">
                <label for="matricula">Matricula</label>
                <input type="text" class="form-control" placeholder="matricula">


                <label for="name">Nombre(s)</label>
                <input type="text" name="name" placeholder="nombre" class="form-control">
                
                <label for="lastname">Apellido(s)</label>
                <input type="text" class="form-control" id="lastname" placeholder="Apellido">
   

                <label for="emial" class="email">Correo</label>
                <input type="text" name="email" placeholder="email" class="form-control">
   
                <label for="phone" class="phone">Telefono</label>
                <input type="text" name="phone" placeholder="telefono" class="form-control">
                
                <label for="age">Edad</label>
                <input type="text" class="form-control" id="age" placeholder="Edad"> 
                
                <label for="group" >Grupo</label>
                <input type="text" class="form-control" placeholder="Grupo">
            
            </div>
            
            <div class="d-grid flex">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button class="btn btn-primary" onclick="window.location.href='{{route('')}}'" type="button">Regresar</button>
            </div>
        
    </div>
    
</body>
</html>
<script src=>
    function sendData(){
        //
    }
</script>
