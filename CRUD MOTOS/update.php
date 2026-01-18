<?php
include 'conexion.php';

$id = $_POST['id_moto'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$cilindrada = $_POST['cilindrada'] ?? '';
$precio = $_POST['precio'] ?? '';
$ABS = $_POST['ABS'] ?? '';

if (!empty($id)) {
    $sql = "UPDATE productos 
            SET modelo='$modelo', 
                cilindrada='$cilindrada', 
                precio='$precio', 
                ABS='$ABS' 
            WHERE id_moto=$id";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Los datos de la moto -" .$modelo . "- se han actualizado correctamente.<br>";
            echo '<br><br><a href="index.html"><button>Volver</button></a>';

        } else {
            echo "No se encontró ninguna moto con el ID $id o los datos ya son iguales.<br>";
            echo '<br><br><a href="index.html"><button>Volver</button></a>';

        }
    } else {
        echo "Error al actualizar: " . $conn->error;
        echo '<br><br><a href="index.html"><button>Volver</button></a>';

    }
} else {
    echo "El campo ID no puede estar vacio para actualizar.<br>";
    echo '<br><br><a href="index.html"><button>Volver</button></a>';

}

$conn->close();
?>
