<?php
function obtenerReportes() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, nombre, departamento, area, fecha, falla FROM reportes");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
} 

function obtenerReporte($id) {
    include 'conn.php';
    try {
         return $conn->query("SELECT id, nombre, departamento, area, fecha, falla FROM reportes WHERE id = $id");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}

function obtenerUsuarios() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, nombre, apellido, area, usuario FROM usuarios");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
} 

function obtenerUsuario($id) {
    include 'conn.php';
    try {
         return $conn->query("SELECT id, nombre, apellido, area, usuario FROM usuarios WHERE id = $id");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}

function obtenerEquipos() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, fecha, nombre, serie, marca, modelo, procesador, disco, ram, observaciones FROM equipos");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
} 

function obtenerPropuestas() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, fecha, nombre, dato, estado FROM personajes");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
} 

function obtenerProgramas() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, fecha, nombre, dato, tipo, estado FROM programas");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
} 