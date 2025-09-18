<?php
include 'conexion.php';

$sql = "SELECT modelo, cilindrada, precio, ABS FROM productos";
$result = $conn->query($sql);

if ($result ->num_rows > 0) {

    echo "<table><tr><th>Modelo</th><th>Cilindrada</th><th>Precio</th><th>ABS</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["modelo"] . "</td><td>" . $row["cilindrada"] . "</td><td>" . $row["precio"] . "</td><td>" . $row["ABS"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}
$conn->close();

?>
