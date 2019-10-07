<?php 
include 'includes/sesiones.php';
include 'layout/header.php';
?>


<h2 class="text-center pt-3 text-success">Propuestas</h2>


<div class="p-5 text-center text-success">
  <p>Porcentaje propuestas revisadas</p>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
  </div>
</div>
<div class="p-5 text-center">
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Falla</th>
      <th scope="col">Fecha</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
          <button type="button" class="btn btn-outline-info" title="Ver Reporte"><i class="fas fa-glasses"></i></button>
          <button type="button" class="btn btn-outline-success" title="Marcar como resuleto"><i class="fas fa-check"></i></button>
          <button type="button" class="btn btn-outline-danger" title="Borrar Reporte"><i class="fas fa-trash"></i></button>
    </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
          <button type="button" class="btn btn-outline-info" title="Ver Reporte"><i class="fas fa-glasses"></i></button>
          <button type="button" class="btn btn-outline-success" title="Marcar como resuleto"><i class="fas fa-check"></i></button>
          <button type="button" class="btn btn-outline-danger" title="Borrar Reporte"><i class="fas fa-trash"></i></button>
    </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>  
          <button type="button" class="btn btn-outline-info" title="Ver Reporte"><i class="fas fa-glasses"></i></button>
          <button type="button" class="btn btn-outline-success" title="Marcar como resuleto"><i class="fas fa-check"></i></button>
          <button type="button" class="btn btn-outline-danger" title="Borrar Reporte"><i class="fas fa-trash"></i></button>
    </td>
    </tr>
  </tbody>
</table>
  </div>


<?php 
include 'layout/footer.php';
?>