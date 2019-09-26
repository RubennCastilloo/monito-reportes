<?php

$usuario = ($_POST['usuario']);
$password = ($_POST['password']);


include 'conn.php';

try {
    $stmt = $conn->prepare("SELECT id, nombre, apellido, area, usuario, password FROM usuarios WHERE usuario = ? ");
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $stmt->bind_result($id, $nombres_usr, $apellido_usr, $area, $usuario_usr, $password_usr);
    $stmt->fetch();
    if ($usuario_usr) {
        if (password_verify($password, $password_usr)) {

            $respuesta = array(
                'respuesta' => 'correcto',
                'mensaje' => 'Password Correcto',
                'nombres' => $nombres_usr,
                'id_admin' => $id_usr,
                'area' => $area
            );
        } else {
            $respuesta = array(
                'respuesta' => 'incorrecto',
                'mensaje' => 'password incorrecto'
            );
        }
    } else {
        $respuesta = array(
            'respuesta' => 'noexiste',
            'mensaje' => 'Usuario no existe'
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