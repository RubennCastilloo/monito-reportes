<?php 
include 'includes/sesiones.php';
include 'layout/header.php';
include 'includes/funciones.php';
?>


<h2 class="text-center pt-3 text-success">Propuestas</h2>


<div class="p-5 text-center text-success">
  <p>Porcentaje propuestas revisadas</p>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" id="porcentaje" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> <div class="texto-porcentaje">100%</div></div>
  </div>
</div>
<div class="p-5 text-center">
<table class="table table-sm listado-propuestas">
  <thead>
    <tr>
      <th scope="col">Tipo Propuesta</th>
      <th scope="col">Fecha</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php $propuestas = obtenerPropuestas();
    if ($propuestas->num_rows) {
      foreach($propuestas as $propuesta) { ?>
    <tr>
      <td><?php echo $propuesta['dato']; ?></td>
      <td><?php echo $propuesta['fecha']; ?></td>
      <td><?php echo $propuesta['nombre']; ?></td>
      <td>
          <button type="button" class="btn btn-outline-info " title="Ver Reporte"><i class="fas fa-glasses"></i></button>
          <button type="button" class="btn check btn-outline-success" title="Marcar como resuleto" ><i class="fas fa-check <?php echo($propuesta['estado'] === '0' ? 'noCompletado' : '') ?>" id="<?php echo $propuesta['id']; ?>"></i></button>
          <button type="button" class="btn btn-outline-danger" title="Borrar Reporte"><i class="fas fa-trash"></i></button>
    </td>
    </tr>
    <?php
  }
}
?>
<?php $propuestas = obtenerProgramas();
    if ($propuestas->num_rows) {
      foreach($propuestas as $propuesta) { ?>
    <tr>
      <td><?php echo $propuesta['dato']; ?></td>
      <td><?php echo $propuesta['fecha']; ?></td>
      <td><?php echo $propuesta['nombre']; ?></td>
      <td>
          <button type="button" class="btn btn-outline-info" title="Ver Reporte"><i class="fas fa-glasses"></i></button>
          <button type="button" class="btn check btn-outline-success" title="Marcar como resuleto"><i class="fas fa-check"></i></button>
          <button type="button" class="btn btn-outline-danger" title="Borrar Reporte"><i class="fas fa-trash"></i></button>
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