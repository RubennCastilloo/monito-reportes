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
        <th scope="col">Area</th>
        <th scope="col">Usuario</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $usuarios = obtenerUsuarios();
    if ($usuarios->num_rows) {
      foreach($usuarios as $usuario) { ?>
        <tr>
        <th scope="row"><?php echo $usuario['id']; ?></th>
        <td><?php echo $usuario['nombre']; ?></td>
        <td><?php echo $usuario['area']; ?></td>
        <td><?php echo $usuario['usuario']; ?></td>
        <td>
            <a href="editarUsuario.php?id=<?php echo $usuario['id']; ?>" class="btn btn-outline-info" title="Editar Usuario"><i class="fas fa-glasses"></i></a>
          <button data-id="<?php echo $usuario['id']; ?>" type="button" class="btn btn-outline-danger" title="Borrar Usuario"><i class="fas fa-trash"></i></button>
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