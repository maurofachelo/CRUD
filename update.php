<?php
include 'conexion.php';

$sql = "UPDATE productos SET modelo='$modelo', cilindrada='$cilindrada', precio='$precio', ABS='$ABS' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Moto actualizada exitosamente";
} else {
    echo "Error al actualizar la moto: " . $conn->error;
}
$conn->close();
?>

