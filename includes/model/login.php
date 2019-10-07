<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

include '../conn.php';

try {
    $sql = $conn->prepare("SELECT nombre, apellido, area, usuario, password FROM usuarios WHERE usuario = ?");
    $sql->bind_param('s', $usuario);
    $sql->execute();
    $sql->bind_result($nombre_usr, $apellido_usr, $area_usr, $usuario_usr, $password_usr);
    $sql->fetch();
    if ($usuario_usr) {
        if (password_verify($password, $password_usr)) {
            session_start();
            $_SESSION['nombre'] = $nombre_usr;
            $_SESSION['login'] = true;
            $_SESSION['apellido'] = $apellido_usr;
            $_SESSION['area'] = $area_usr;

            $respuesta = array(
                'respuesta' => 'correcto',
                'tipo' => $area_usr
            );
        } else {
            $respuesta = array(
                'respuesta' => 'incorrecto'
            );
        }
    } else {
        $respuesta = array(
            'respuesta' => 'noexiste'
        );
    }
    $sql->close();
    $conn->close();
} catch (Exception $e) {
    $respuesta = array(
        'error' => $e->getMessage()
    );
}


echo json_encode($respuesta);