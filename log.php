<?php
$servername = "localhost";
$username = "id22285202_hosmer24";
$password = "tu_contraseña"; // Reemplaza con la contraseña real de tu base de datos
$dbname = "id22285202_hosmer24";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Chequear conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Obtener fecha y hora actual
    $fecha = date("Y-m-d H:i:s");

    // Preparar y ejecutar la consulta
    $sql = "INSERT INTO registros (id_dispositivo, fecha) VALUES ('$id', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
