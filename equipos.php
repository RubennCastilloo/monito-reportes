<?php 
include 'includes/sesiones.php';
include 'layout/header.php';
?>
<h2 class="text-center pt-3">Agregar Equipo de Computo</h2>

<form class="needs-validation formulario-equipos p-4" novalidate>
  <div class="form-row">
  <div class="col-md-4 mb-3">
    <label for="fechaActual">Fecha</label>
        <div class="col-14">
            <input class="form-control" type="date" value="" id="fechaActual" disabled>
    </div>
  </div>
    <div class="col-md-4 mb-3">
      <label for="nombre">Nombre Equipo</label>
      <input type="text" class="form-control ingresarNombre" id="nombre" placeholder="Nombre Equipo" >
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="serie">No. de Serie</label>
      <input type="text" class="form-control ingresarNombre" id="serie" placeholder="No. de Serie" >
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="marca">Marca</label>
      <input type="text" class="form-control ingresarNombre" id="marca" placeholder="Marca" >
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="modelo">Modelo</label>
      <input type="text" class="form-control ingresarNombre" id="modelo" placeholder="Modelo" >
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="procesador">Procesador</label>
      <input id="procesadorInput" type="text" class="custom-select " list="procesador" value="" placeholder="Procesador">
      <datalist class="ingresarDepartamento" id="procesador">
          <option  value="">Seleccionar</option>
          <option value="Intel Core i5">Intel Core i5</option>
          <option value="Intel Core i3">Intel Core i3</option>
          <option value="Intel Celeron J1">Intel Celeron J1</option>
          <option value="AMD E-350D">AMD E-350D</option>
          <option value="Otro">Otro</option>
        </select>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="disco">Disco</label>
      <input id="discoInput" type="text" class="custom-select " list="disco" value="" placeholder="Disco">
      <datalist class="ingresarArea" id="disco">
          <option  value="">Seleccionar</option>
          <option value="SSD 120GB">SSD 120GB</option>
          <option value="SSD 240GB">SSD 240GB</option>
          <option value="HDD 500GB">HDD 500GB</option>
          <option value="HDD 1TB">HDD 1TB</option>
          <option value="Otro">Otro</option>
        </select>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="ram">RAM</label>
      <input id="ramInput" type="text" class="custom-select " list="ram" value="" placeholder="RAM">
      <datalist class="ingresarArea" id="ram">
          <option  value="">Seleccionar</option>
          <option value="2GB">2GB</option>
          <option value="4GB">4GB</option>
          <option value="6GB">6GB</option>
          <option value="8GB">8GB</option>
          <option value="Otro">Otro</option>
        </select>
    </div>
    
    
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Observaciones</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="observaciones" placeholder="Observaciones"></textarea>
</div>

</div>
  <button class="btn btn-outline-danger" type="submit" id="agregarEquipo"><i class="far fa-plus-square"></i> Agregar Equipo</button>
</form>



<?php 
include 'layout/footer.php';
?>