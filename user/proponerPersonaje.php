<?php 
include 'sesiones.php';
include 'layout/header.php';
?>
<h2 class="text-center pt-3">Proponer Personaje</h2>

<form class="needs-validation formulario-usuario p-4" novalidate>
    <div class="form-row">
    <div class="col-md-4 mb-3">
              <label for="fechaActual">Fecha</label>
                <div class="col-14">
                    <input class="form-control" type="date" value="" id="fechaActual" disabled>
                </div>
    </div>
  
    <div class="col-md-4 mb-3">
      <label for="usuarioNombre text-center">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="usuarioNombre" placeholder="Nombre"  disabled>
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="usuarioTipo">Tipo</label>
      <input type="text" class="custom-select " list="lista" value=""> 
        <datalist class="ingresarEmpresa" id="lista">
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
        
      <label for="usuarioTipo">Categoria</label>
      <input type="text" class="custom-select " list="lista" value=""> 
        <datalist class="ingresarEmpresa" id="lista">
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
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Observaciones</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="prosComentarios"></textarea>
</div>
    
    
  
  
  
  
  </div>
  <button class="btn btn-outline-danger" type="submit" id="registrarUsuario">Enviar Propuesta</button>
</form>



<?php 
include 'layout/footer.php';
?>