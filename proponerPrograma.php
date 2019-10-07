<?php 
include 'includes/sesiones.php';
include 'layout/header.php';
?>
<h2 class="text-center pt-3">Proponer Programa</h2>

<form class="needs-validation formulario-programa p-4" novalidate>
    <div class="form-row">
    <div class="col-md-4 mb-3">
              <label for="fechaActual">Fecha</label>
                <div class="col-14">
                    <input class="form-control" type="date" value="" id="fechaActual" disabled>
                </div>
    </div>
  
    <div class="col-md-4 mb-3">
      <label for="nombre text-center">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="nombre" placeholder="Nombre"  disabled value="<?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="tipo">Tipo</label>
      <input type="text" class="custom-select " list="tipo" value="" id="resultadoTipo"> 
        <datalist class="tipo" id="tipo">
          <option  value="">Seleccionar</option>
          <option value="Radio"> Radio</option>
          <option value="Television"> Television</option>
          <option value="Digitales"> Digitales</option>
          <option value="Impresos"> Impresos</option>
          <option value="Portadas Impresos Estatales"> Portadas Impresos Estatales</option>
          <option value="Columnas Políticas Estatales"> Columnas Políticas Estatales</option>
          <option value="Redes Sociales"> Redes Sociales</option>
          <option value="Periódico completo"> Periódico completo</option>
          <option value="Columnas Nacionales"> Columnas Nacionales</option>
          <option value="Convocatorias"> Convocatorias</option>
          <option value="Resumen Nacional"> Resumen Nacional</option>
          <option value="Portadas Nacionales"> Portadas Nacionales</option>
          <option value="Editorial"> Editorial</option>
</datalist>
    </div>
    <div class="col-md-4 mb-3">
      <label for="fuente">Fuente</label>
      <input type="text" class="form-control ingresarNombre" id="fuente" placeholder="Fuente">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="programa">Programa</label>
      <input type="text" class="form-control ingresarNombre" id="programa" placeholder="Programa">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Comentarios</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="comentarios"></textarea>
</div>
    
    
  
  
  
  
  </div>
  <button class="btn btn-outline-danger" type="submit" id="proponer"><i class="fas fa-check"></i> Enviar Propuesta</button>
</form>



<?php 
include 'layout/footer.php';
?>