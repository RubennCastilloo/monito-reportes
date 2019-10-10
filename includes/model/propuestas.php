<?php 
$estado = 1;
$id_tarea = (int) $_POST['id']; 

include '../conn.php';
try {
    // Realizar la consulta a la base de datos
    $stmt = $conn->prepare("UPDATE personajes SET estado = ? WHERE id = ?");
    $stmt->bind_param('ii', $estado, $id_tarea);
    $stmt->execute();
    if($stmt->affected_rows > 0) {
        $respuesta = array(
            'respuesta' => 'correcto'
        );
    }  else {
        $respuesta = array(
            'respuesta' => 'error'
        );
    }
    $stmt->close();
    $conn->close();
} catch(Exception $e) {
    // En caso de un error, tomar la exepcion
    $respuesta = array(
        'error' => $e->getMessage()
    );
}

echo json_encode($respuesta);