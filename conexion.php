<?php
  // Parámetros de conexión
$host = "localhost";
$usuario = "root";
$contrasena = ""; // Por defecto, sin contraseña en XAMPP
$baseDatos = "hondamotos"; // Verificá bien este nombre en phpMyAdmin
//http://localhost/Practicas%20II/CRUD/conexion.php

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $baseDatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos";

?>