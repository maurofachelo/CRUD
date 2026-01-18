<?php
  // Parámetros de conexión
$host = "localhost";
$usuario = "root";
$contrasena = ""; // Por defecto, sin contraseña en XAMPP
$baseDatos = "hondamotos"; // Verificá bien este nombre en phpMyAdmin

//http://localhost/Practicas%20II/CRUD/CRUD%20MOTOS/index.html

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $baseDatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
//echo "La conexion con tu Base de Datos fue exitosa <br><br><br>";

?>