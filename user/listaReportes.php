<?php 
include 'layout/header.php';
include 'includes/funciones.php';
?>
<h2 class="text-center pt-3">Lista de Reportes</h2>

<div class="container"> 
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Fecha</th>
        <th scope="col">Area</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $reportes = obtenerReportes();
    if ($reportes->num_rows) {
      foreach($reportes as $reporte) { ?>
        <tr>
        <th scope="row"><?php echo $reporte['id']; ?></th>
        <td><?php echo $reporte['fecha']; ?></td>
        <td><?php echo $reporte['area']; ?></td>
        <td>
            <a href="verReporte.php?id=<?php echo $reporte['id']; ?>" class="btn btn-outline-info" title="Ver Reporte"><i class="fas fa-glasses"></i></a>
          <button type="button" class="btn btn-outline-success" title="Marcar como resuleto"><i class="fas fa-check"></i></button>
          <button data-id="<?php echo $reporte['id']; ?>" type="button" class="btn btn-outline-danger" title="Borrar Reporte"><i class="fas fa-trash"></i></button>
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