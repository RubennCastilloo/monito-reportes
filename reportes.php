<?php 
include 'layout/header.php';
?>
<h2 class="text-center pt-3">Generar Reporte</h2>

<form class="needs-validation formulario-prospectos p-4" novalidate>
  <div class="form-row">
  
    <div class="col-md-4 mb-3">
      <label for="prosEmpresa">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="prosEmpresa" placeholder="Usuario"  disabled>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="prosContacto">Departamento</label>
      <input type="text" class="form-control ingresarApellido" id="prosContacto" placeholder="Departamento"  disabled>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="prosCatalogo">Area de Reporte</label>
        <select class="custom-select ingresarEmpresa" id="prosCatalogo">
          <option  value="">Seleccionar</option>
          <option value="1">Servidores</option>
          <option value="2">Computadoras Monitoreo</option>
          <option value="2">Redes</option>
          <option value="2">Otro</option>
        </select>
    </div>
    
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <label for="fechaActual">Fecha</label>
                <div class="col-14">
                    <input class="form-control" type="date" value="" id="fechaActual" disabled>
                </div>
    </div>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Descripcion de falla</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="prosComentarios"></textarea>
</div>

</div>
  <button class="btn btn-outline-danger" type="submit" id="registrarUsuario">Generar Reporte</button>
</form>



<?php 
include 'layout/footer.php';
?>