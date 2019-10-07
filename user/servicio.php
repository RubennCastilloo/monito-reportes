<?php 
include 'sesiones.php';
include 'layout/header.php';
include '../includes/funciones.php';
?>
<h2 class="text-center pt-3">Reporte de Servicios</h2>

<form class="needs-validation formulario-servicios p-4" novalidate>
  <div class="form-row">
  
    <div class="col-md-4 mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="nombre" placeholder="Nombre" value="<?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>" disabled>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="ubicacion">Ubicacion</label>
      <input id="ubicacionInput" type="text" class="custom-select " list="ubicacion" value="">
      <datalist class="input" id="ubicacion">
          <option value="">Seleccionar</option>
          <option value="TecnoParque Chihuahua">TecnoParque Chihuahua</option>
          <option value="Juárez">Juárez</option>
          <option value="Cuauhtémoc">Cuauhtémoc</option>
          <option value="Hidalgo del Parral">Hidalgo del Parral</option>
          <option value="Delicias">Delicias</option>
          <option value="Otro">Otro</option>
        </select>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="equipo">Equipo</label>
      <input id="equipoInputMonitoreo" type="text" class="custom-select " list="equipo" value="">
      <datalist class="ingresarArea" id="equipo">
          <option  value="">Seleccionar</option>
          <?php $equipos = obtenerEquipos();
    if ($equipos->num_rows) {
      foreach($equipos as $equipo) { ?>
          <option  value="<?php echo $equipo['nombre']; ?>"><?php echo $equipo['nombre']; ?></option>
          <?php
  }
}
?>
        </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="serie">Serie</label>
      <input type="text" class="form-control ingresarNombre" id="serie" placeholder="Serie" >
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <label for="fechaActual">Fecha</label>
                <div class="col-14">
                    <input class="form-control" type="date" value="" id="fechaActual">
                </div>
    </div>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Problema</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="problema"></textarea>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Observaciones</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="observaciones"></textarea>
</div>

</div>
  <button class="btn btn-outline-danger" type="submit" id="enviarServicioMonitoreo"><i class="fas fa-check"></i> Enviar Reporte</button>
</form>



<?php 
include 'layout/footer.php';
?>