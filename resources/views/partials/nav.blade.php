<script src="{{ mix('js/app.js') }}"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Listado</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Acciones
        </a>
        <div class="dropdown-menu">

          <a class="dropdown-item" href="{{route('createStudentIntf')}}">Registrar estudiante</a>
          <a class="dropdown-item" href="{{route('delStudentIntf')}}">Baja estudiate</a>
          <a href="{{route('updateStudentIntf')}}" class="dropdown-item">Actualizar Estudiante</a>
          
          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="{{route('createGroupIntf')}}">Crear Grupo</a>
          <a href="{{route('delGroupIntf')}}" class="dropdown-item" >Eliminar Grupo</a>
          <a href="{{route('updateGroupIntf')}}" class="dropdown-item">Actualizar Grupo</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Cerrar sesión</a>
      </li>
    </ul>
  </div>
</nav>