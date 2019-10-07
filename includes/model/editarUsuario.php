<?php

$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
$area = filter_var($_POST['area'], FILTER_SANITIZE_STRING);
$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);

include '../conn.php';

            try {
                $opciones = array(
                    'cost' => 12
                );
                
                $hash_pass = password_hash($password, PASSWORD_BCRYPT, $opciones);

                $stmt = $conn->prepare("UPDATE usuarios SET nombre = ?, apellido = ? , area = ?, usuario = ?, password = ? WHERE id = ?");
                $stmt->bind_param('sssssi', $nombre, $apellido, $area, $usuario, $hash_pass, $id);
                $stmt->execute();
                if ($stmt->affected_rows == 1) {
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