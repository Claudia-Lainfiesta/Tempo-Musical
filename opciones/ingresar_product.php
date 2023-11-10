<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brick";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$codigo_barras = $_POST["codigo_barras"];
$item = $_POST["item"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

$sql = "INSERT INTO productos (codigo_barras, item, nombre, precio) VALUES ('$codigo_barras', '$item', '$nombre', '$precio')";

if ($conn->query($sql) === true) {
    header("Location: datos_correctos.html");
    exit();
} else {
    echo "Error al ingresar el usuario: " . $conn->error;
}

$conn->close();
?>
