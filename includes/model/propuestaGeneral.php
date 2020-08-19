<?php

$fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$propuesta = filter_var($_POST['propuesta'], FILTER_SANITIZE_STRING);
$dato = filter_var($_POST['dato'], FILTER_SANITIZE_STRING);
$estado = 0;

include '../conn.php';

try {
    $stmt = $conn->prepare("INSERT INTO general (fecha, nombre, propuesta, dato, estado) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('sssss', $fecha, $nombre, $propuesta, $dato, $estado);
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
