<?php 
include 'layout/header.php';
include 'includes/funciones.php';
?>


<h2 class="text-center pt-3 text-danger">Alertas</h2>


<div class="p-5 text-center text-danger">
  <p>Porcentaje reportes solucionados</p>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" id="barraAlertas">50%</div>
  </div>
</div>
<div class="p-5 text-center">
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Area</th>
      <th scope="col">Fecha</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php $reportes = obtenerReportes();
    if ($reportes->num_rows) {
      foreach($reportes as $reporte) { ?>
        <tr>
        <th scope="row"><?php echo $reporte['id']; ?></th>
        <td><?php echo $reporte['nombre']; ?></td>
        <td><?php echo $reporte['area']; ?></td>
        <td><?php echo $reporte['fecha']; ?></td>
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