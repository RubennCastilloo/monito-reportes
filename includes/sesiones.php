<?php

function usuario_autenticado() {
    if (!revisar_usuario()) {
        header('Location: login/index.php');
        exit();
    }
}
function revisar_usuario() {
    return isset($_SESSION['nombre']);
}

session_start();
usuario_autenticado();