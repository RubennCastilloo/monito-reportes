<?php 
include 'layout/header.php';
?>
<h2 class="text-center pt-3">Reporte de Servicios</h2>

<form class="needs-validation formulario-reportes p-4" novalidate>
  <div class="form-row">
  
    <div class="col-md-4 mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="nombre" placeholder="Nombre" >
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="area">Ubicacion</label>
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
        
      <label for="area">Servidor</label>
      <input id="areaInput" type="text" class="custom-select " list="area" value="">
      <datalist class="ingresarArea" id="area">
          <option  value="">Seleccionar</option>
          <option value="Servidores">Servidores</option>
          <option value="Computadoras Monitoreo">Computadoras Monitoreo</option>
          <option value="Sistema Monitoreo">Sistema Monitoreo</option>
          <option value="Red de Internet">Red de Internet</option>
          <option value="Otro">Otro</option>
        </select>
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
    <span class="input-group-text">Descripcion del servicio</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="falla"></textarea>
</div>

</div>
  <button class="btn btn-outline-danger" type="submit" id="generarReporte">Reportar Servicio</button>
</form>



<?php 
include 'layout/footer.php';
?>