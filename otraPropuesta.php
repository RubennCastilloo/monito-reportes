<?php 
include 'includes/sesiones.php';
include 'layout/header.php';
?>
<h2 class="text-center pt-3">Propuesta</h2>

<form class="needs-validation formulario p-4" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
              <label for="fechaActual">Fecha</label>
                <div class="col-14">
                    <input class="form-control" type="date" value="" id="fechaActual" disabled>
                </div>
    </div>
  
    <div class="col-md-4 mb-3">
      <label for="nombre text-center">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="nombre" placeholder="Nombre" disabled value="<?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    
    <div class="input-group mb-3 col-md-13">
  <div class="input-group-prepend">
    <span class="input-group-text">Propuesta</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="propuesta"></textarea>
</div>
  
  
  
  
  </div>
  <button class="btn btn-outline-danger" type="submit" id="enviarPropuesta"><i class="fas fa-check"></i> Enviar Propuesta</button>
</form>



<?php 
include 'layout/footer.php';
?>