<?php 
include 'layout/header.php';
include 'includes/funciones.php';

$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: listaReportes.php');
        
    }
    $respuesta = obtenerReporte($id);
    $reporte = $respuesta->fetch_assoc();

?>
<h2 class="text-center pt-3">Ver Reporte</h2>

<form class="needs-validation formulario-reportes p-4" novalidate>
  <div class="form-row">
  
    <div class="col-md-4 mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control ingresarNombre" id="nombre" placeholder="Nombre" value="<?php echo ($reporte['nombre']) ? $reporte['nombre'] : ''; ?>">
      <div class="valid-feedback">
        Correcto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="area">Departamento</label>
      <input id="departamentoInput" type="text" class="custom-select " list="departamento" value="<?php echo ($reporte['departamento']) ? $reporte['departamento'] : ''; ?>">
      <datalist class="ingresarDepartamento" id="departamento">
          <option  value="">Seleccionar</option>
          <option value="Monitoreo">Monitoreo</option>
          <option value="Sistemas">Sistemas</option>
          <option value="Administrativo">Administrativo</option>
          <option value="Otro">Otro</option>
        </select>
    </div>
    <div class="col-md-4 mb-3">
        
      <label for="area">Area de Reporte</label>
      <input id="areaInput" type="text" class="custom-select " list="area" value="<?php echo ($reporte['area']) ? $reporte['area'] : ''; ?>">
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
                    <input class="form-control" type="date" value="<?php echo ($reporte['fecha']) ? $reporte['fecha'] : ''; ?>" id="fecha" disabled>
                </div>
    </div>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Descripcion de falla</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" id="falla"><?php echo ($reporte['falla']) ? $reporte['falla'] : ''; ?></textarea>
</div>

</div>
  <button class="btn btn-outline-success" type="submit" id="generarReporte"><i class="fas fa-check"></i> Solucionado</button>
</form>



<?php 
include 'layout/footer.php';
?>