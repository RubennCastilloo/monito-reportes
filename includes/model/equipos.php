<?php
$fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$serie = filter_var($_POST['serie'], FILTER_SANITIZE_STRING);
$marca = filter_var($_POST['marca'], FILTER_SANITIZE_STRING);
$modelo = filter_var($_POST['modelo'], FILTER_SANITIZE_STRING);
$procesador = filter_var($_POST['procesador'], FILTER_SANITIZE_STRING);
$disco = filter_var($_POST['disco'], FILTER_SANITIZE_STRING);
$ram = filter_var($_POST['ram'], FILTER_SANITIZE_STRING);
$observaciones = filter_var($_POST['observaciones'], FILTER_SANITIZE_STRING);


include '../conn.php';

try {
    $stmt = $conn->prepare("INSERT INTO equipos (fecha, nombre, serie, marca, modelo, procesador, disco, ram, observaciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssssss', $fecha, $nombre, $serie, $marca, $modelo, $procesador, $disco, $ram, $observaciones);
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

