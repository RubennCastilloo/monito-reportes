<?php 
include 'includes/sesiones.php';
include 'layout/header.php';


// echo "<pre>";
//   var_dump($_SESSION['nombre']);
// echo "</pre>";

?>

<h2 class="text-center pt-5">Bienvenido <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?> </h2>





<?php 
include 'layout/footer.php';
?>