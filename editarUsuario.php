<?php 
include 'layout/header.php';
include 'includes/funciones.php';

$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: listaUsuarios.php');
        
    }
    $respuesta = obtenerUsuario($id);
    $usuario = $respuesta->fetch_assoc();
?>
<h2 class="text-center pt-3">Editar Usuario</h2>

<form class="needs-validation formulario-usuario p-4" novalidate>
  <div class="form-row">
  
    <div class="col-md-4 mb-3">
      <label for="usuarioNombre text-center">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="usuarioNombre" placeholder="Nombre"  value="<?php echo ($usuario['nombre']) ? $usuario['nombre'] : ''; ?>">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="usuarioApellido">Apellido</label>
      <input type="text" class="form-control ingresarApellido" id="usuarioApellido" placeholder="Apellido"  value="<?php echo ($usuario['apellido']) ? $usuario['apellido'] : ''; ?>">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="usuarioTipo">Area</label>
        <select class="custom-select ingresarEmpresa" id="usuarioArea">
          <option  value="">Seleccionar</option>
          <option value="administrativo">Administrativo</option>
          <option value="monitoreo">Monitoreo</option>
          <option value="sistemas">Sistemas</option>
        </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="usuarioUser">Usuario</label>
      <div class="input-group">
        <input type="text" class="form-control ingresarUsuario" id="usuarioUser" placeholder="Usuario" value="<?php echo ($usuario['usuario']) ? $usuario['usuario'] : ''; ?>">
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
      <input type="password" class="form-control ingresarApellido" id="comprobacionPassword" placeholder="Comprobar Password"  required>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    
  
  
  
  
  </div>
  <button class="btn btn-outline-danger" type="submit" id="editarUsuario">Editar Usuario</button>
</form>



<?php 
include 'layout/footer.php';
?>