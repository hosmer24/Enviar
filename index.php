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

$sql = "SELECT id, id_dispositivo, fecha FROM registros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registros de Dispositivos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Registros de Dispositivos</h1>

<table>
    <tr>
        <th>ID</th>
        <th>ID del Dispositivo</th>
        <th>Fecha y Hora</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["id_dispositivo"]. "</td><td>" . $row["fecha"]. "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No hay registros</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
