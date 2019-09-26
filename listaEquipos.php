<?php 
include 'layout/header.php';
include 'includes/funciones.php';
?>
<h2 class="text-center pt-3">Lista de Usuarios</h2>

<div class="container"> 
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Serie</th>
        <th scope="col">Procesador</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $equipos = obtenerEquipos();
    if ($equipos->num_rows) {
      foreach($equipos as $equipo) { ?>
        <tr>
        <th scope="row"><?php echo $equipo['id']; ?></th>
        <td><?php echo $equipo['nombre']; ?></td>
        <td><?php echo $equipo['serie']; ?></td>
        <td><?php echo $equipo['procesador']; ?></td>
        <td>
            <a href="editarUsuario.php?id=<?php echo $equipo['id']; ?>" class="btn btn-outline-info" title="Editar Usuario"><i class="fas fa-edit f-2"></i></a>
          <button data-id="<?php echo $equipo['id']; ?>" type="button" class="btn btn-outline-danger" title="Borrar Usuario"><i class="fas fa-trash"></i></button>
         </td>
        </tr>
        <?php
  }
}
?>
    </tbody>
    </table>
</div>



<?php 
include 'layout/footer.php';
?>