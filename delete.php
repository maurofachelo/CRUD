<?php
include 'conexion.php';

$sql = "DELETE FROM productos WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Moto eliminada exitosamente";
} else {
    echo "Error al eliminar la moto: " . $conn->error;
}
$conn->close();

?>
