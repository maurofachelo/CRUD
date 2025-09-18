<?php
include 'conexion.php';

$modelo = $_POST['modelo'] ?? '';
$cilindrada = $_POST['cilindrada'] ?? '';
$precio = $_POST['precio'] ?? '';
$ABS = $_POST['ABS'] ?? '';

echo "<pre>";
print_r ($_POST);
echo "</pre>";

$sql = "INSERT INTO productos (modelo, cilindrada, precio, ABS) VALUES ('$modelo', '$cilindrada', '$precio', '$ABS')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva moto agregada exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>

