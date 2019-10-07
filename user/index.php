<?php 
include 'sesiones.php';
include 'layout/header.php';
?>


<h2 class="text-center pt-5">Bienvenid@ <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?> </h2>



<?php 
include 'layout/footer.php';
?>