<?php 

$fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_STRING);
$fuente = filter_var($_POST['fuente'], FILTER_SANITIZE_STRING);
$programa = filter_var($_POST['programa'], FILTER_SANITIZE_STRING);
$comentarios = filter_var($_POST['comentarios'], FILTER_SANITIZE_STRING);


include '../conn.php';

try {
    $stmt = $conn->prepare("INSERT INTO programas (fecha, nombre, tipo, fuente, programa, comentarios) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssss', $fecha, $nombre, $tipo, $fuente, $programa, $comentarios);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        $respuesta = array(
            'respuesta' => 'correcto'
            );
    } else {
        $respuesta = array(
            'respuesta' => 'error'
        );

    }
    $stmt->close();
    $conn->close();     
} catch (Exception $e) {
    $respuesta = array(
        'error' => $e->getMessage()
    );
}



echo json_encode($respuesta);