<?php
include 'conexion.php';

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result ->num_rows > 0) {

    echo "<table><tr><th>__ID__</th><th>Modelo</th><th>Cilindrada</th><th>Precio</th><th>ABS</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_moto"] . "</td><td>" . $row["modelo"] . "</td><td>" . $row["cilindrada"] . "</td><td>" . $row["precio"] . "</td><td>" . $row["ABS"] . "</td></tr>";
    }
    echo "</table>";
    echo '<br><br><a href="index.html"><button>Volver</button></a>';

} else {
    echo "No se encontraron resultados.";
    echo '<br><br><a href="index.html"><button>Volver</button></a>';

}
$conn->close();

?>
