<?php

$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$ubicacion = filter_var($_POST['ubicacion'], FILTER_SANITIZE_STRING);
$equipo = filter_var($_POST['equipo'], FILTER_SANITIZE_STRING);
$serie = filter_var($_POST['serie'], FILTER_SANITIZE_STRING);
$fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
$problema = filter_var($_POST['problema'], FILTER_SANITIZE_STRING);
$observaciones = filter_var($_POST['observaciones'], FILTER_SANITIZE_STRING);


include '../conn.php';

try {
    $stmt = $conn->prepare("INSERT INTO servicios (nombre, ubicacion, equipo, serie, fecha, problema, observaciones) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssss', $nombre, $ubicacion, $equipo, $serie, $fecha, $problema, $observaciones);
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

