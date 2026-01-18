<?php
include 'conexion.php';

$id = $_POST['id_moto'] ?? '';

if (!empty($id)) {

    $sql = "DELETE FROM productos WHERE id_moto = $id";

    //echo "Consulta SQL: $sql<br>"; // 

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Moto eliminada exitosamente";
            echo '<br><br><a href="index.html"><button>Volver</button></a>';

        } else {
            echo "No se encontró ninguna moto con el ID $id";
            echo '<br><br><a href="index.html"><button>Volver</button></a>';

        }
    } else {
        echo "Error al eliminar la moto: " . $conn->error;
        echo '<br><br><a href="index.html"><button>Volver</button></a>';

    }

} else {
    echo "ID no proporcionado.";
    echo '<br><br><a href="index.html"><button>Volver</button></a>';

}