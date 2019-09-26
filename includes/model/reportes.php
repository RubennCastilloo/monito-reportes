<?php

$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$departamento = filter_var($_POST['departamento'], FILTER_SANITIZE_STRING);
$area = filter_var($_POST['area'], FILTER_SANITIZE_STRING);
$fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
$falla = filter_var($_POST['falla'], FILTER_SANITIZE_STRING);
$completado = 0;

include '../conn.php';

try {
    $stmt = $conn->prepare("INSERT INTO reportes (nombre, departamento, area, fecha, falla, completado) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssi', $nombre, $departamento, $area, $fecha, $falla, $completado);
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