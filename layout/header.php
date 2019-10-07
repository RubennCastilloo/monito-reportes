<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Sistema de Reportes</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/monito-reportes/"><img src="images/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administracion
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="usuarios.php">Crear Usuario</a>
          <a class="dropdown-item" href="listaUsuarios.php">Lista de Usuarios</a>
        </div>
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Sistemas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="equipos.php">Equipos</a>
          <a class="dropdown-item" href="listaEquipos.php">Lista de Equipos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="reportes.php">Reporte de Fallas</a>
          <a class="dropdown-item" href="listaReportes.php">Lista de Reportes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="servicio.php">Reporte de Servicio</a>
          <a class="dropdown-item" href="listaServicios.php">Historico Servicios</a>
          

          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Monitoreo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="radiostream.php" target="_blank"><i class="fas fa-broadcast-tower"></i> Radio Streaming</a>
          <a class="dropdown-item" href="radiochih.php" target="_blank"><i class="fas fa-broadcast-tower"></i> Radio Chihuahua</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="tvchih.php" target="_blank"><i class="fas fa-tv"></i> TV Chihuahua</a>
          <a class="dropdown-item" href="tvjuarez.php" target="_blank"> <i class="fas fa-tv"></i> TV Juárez</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="proponerPrograma.php">Programa</a>
          <a class="dropdown-item" href="proponerPersonaje.php">Personaje o Institucion</a>
          <a class="dropdown-item" href="otraPropuesta.php">Otra Propuesta</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="alertas.php">Alertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success" href="propuestas.php">Propuestas</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
     <a class="btn btn-outline-danger my-2 my-sm-0" href="login/index.php?cerrar_sesion=true">Cerrar Sesion</a>
    </form>
  </div>
</nav>

   