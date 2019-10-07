<?php 
include 'includes/sesiones.php';
include 'layout/header.php';
?>
<h2 class="text-center pt-3">Proponer Personaje o Institucion</h2>

<form class="needs-validation formulario p-4" novalidate>
    <div class="form-row">
    <div class="col-md-4 mb-3">
              <label for="fechaActual">Fecha</label>
                <div class="col-14">
                    <input class="form-control" type="date" value="" id="fechaActual" disabled>
                </div>
    </div>
  
    <div class="col-md-4 mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="nombre" placeholder="Nombre"  disabled value="<?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="tipo">Tipo</label>
      <input type="text" class="custom-select " list="tipo" value="" id="tipoValor"> 
        <datalist class="tipo" id="tipo">
              <option >CÁMARAS DE COMERCIO</option>
              <option >Congreso del estado de Chihuahua</option>
              <option >CONVOCATORIAS</option>
              <option >Cruz Roja</option>
              <option >Elecciones</option>
              <option >Elecciones Federales</option>
              <option >Especiales</option>
              <option >FECHAC</option>
              <option >GASODUCTO</option>
              <option >Gobierno del Estado de Chihuahua</option>
              <option >Gobierno Federal</option>
              <option >Gobierno Municipal de Camargo</option>
              <option >Gobierno Municipal de Chihuahua</option>
              <option >Gobierno Municipal de Cuauhtemoc</option>
              <option >Gobierno Municipal de Delicias</option>
              <option >Gobierno Municipal de Juárez</option>
              <option >Gobierno Municipal de Nuevo Casas Grandes</option>
              <option >Gobierno municipal de Ojinaga </option>
              <option >Gobierno Municipal de Parral</option>
              <option >IEE</option>
              <option >ONGS</option>
              <option >ONMPRI</option>
              <option >Partidos Políticos</option>
              <option >Personajes políticos</option>
              <option >Poder Judicial</option>
              <option >SNTE</option>
              <option >UACH</option>
</datalist>
    </div>
    <div class="col-md-4 mb-3">
      <label for="categoria">Categoría</label>
      <input type="text" class="form-control ingresarNombre" id="categoria" placeholder="Categoría">
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
  <button class="btn btn-outline-danger" type="submit" id="proponerPersonaje"><i class="fas fa-check"></i> Enviar Propuesta</button>
</form>



<?php 
include 'layout/footer.php';
?>