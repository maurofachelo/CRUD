<?php
include 'conexion.php';

$id = $_POST['id_moto'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$cilindrada = $_POST['cilindrada'] ?? '';
$precio = $_POST['precio'] ?? '';
$ABS = $_POST['ABS'] ?? '';

/*echo "<pre>";
print_r ($_POST);
echo "</pre>";*/

$sql = "INSERT INTO productos (modelo, cilindrada, precio, ABS) VALUES ('$modelo', '$cilindrada', '$precio', '$ABS')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva moto agregada exitosamente<br><br>Modelo: " . $modelo . "<br> Cilindrada: " . $cilindrada . "<br> Precio: " . $precio . "<br> ABS: " . $ABS . "<br>";
    echo '<br><br><a href="index.html"><button>Volver</button></a>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo '<br><br><a href="index.html"><button>Volver</button></a>';

}
$conn->close();

?>

