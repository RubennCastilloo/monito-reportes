<?php
$valor = ($_POST[valor]);


include '../conn.php';

try {
    $stmt = $conn->prepare("SELECT id, nombre, serie FROM equipos WHERE nombre = ? ");
    $stmt->bind_param('s', $valor);
    $stmt->execute();
    $stmt->bind_result($id_admin, $nombre, $serie);
    $stmt->fetch();
    if ($nombre) {
        $respuesta = array(
            'respuesta' => 'existe',
            'id' => $id_admin,
            'nombre' => $nombre,
            'serie' => $serie
        );
    } else {
        $respuesta = array(
            'respuesta' => 'noexiste'
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