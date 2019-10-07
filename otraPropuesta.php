<?php 
include 'includes/sesiones.php';
include 'layout/header.php';
?>
<h2 class="text-center pt-3">Propuesta</h2>

<form class="needs-validation formulario-usuario p-4" novalidate>
  <div class="form-row">
  
    <div class="col-md-4 mb-3">
      <label for="usuarioNombre text-center">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="usuarioNombre" placeholder="Nombre"  required disabled>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="usuarioApellido">Apellido</label>
      <input type="text" class="form-control ingresarApellido" id="usuarioApellido" placeholder="Apellido"  required>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="usuarioTipo">Area</label>
        <select class="custom-select ingresarEmpresa" id="usuarioTipo">
          <option  value="">Seleccionar</option>
          <option value="administrativo">Administrativo</option>
          <option value="monitoreo">Monitoreo</option>
          <option value="sistemas">Sistemas</option>
        </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="usuarioTelefono">Teléfono</label>
      <input type="tel" class="form-control ingresarTelefono" id="usuarioTelefono" placeholder="Teléfono"  required onKeyPress="return soloNumeros(event)">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="usuarioUser">Usuario</label>
      <div class="input-group">
        <input type="text" class="form-control ingresarUsuario" id="usuarioUser" placeholder="Usuario" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Porfavor elija un nombre de usuario.
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="usuarioPassword">Password</label>
      <input type="password" class="form-control ingresarApellido" id="usuarioPassword" placeholder="Password"  required>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="usuarioPassword">Comprobar Password</label>
      <input type="password" class="form-control ingresarApellido" id="usuarioPassword" placeholder="Comprobar Password"  required>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    
  
  
  
  
  </div>
  <button class="btn btn-outline-danger" type="submit" id="registrarUsuario">Registrar Usuario</button>
</form>



<?php 
include 'layout/footer.php';
?>