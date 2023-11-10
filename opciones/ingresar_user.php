<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_trabajador = $_POST["codigo_trabajador"];
    $user = $_POST["user"];
    $correo = $_POST["correo"];
    $contra = $_POST["contra"];

    // Conectarse a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "tempo";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para insertar los datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (codigo_trabajador, user, correo, contra) VALUES ('$codigo_trabajador', '$user', '$correo', '$contra')";

    if ($conn->query($sql) === TRUE) {
        header("Location: datos_correctos.html");
        exit();
    } else {
        header("Location: datos_incorrectos.html");
        exit();
    }

    $conn->close();
}
?>


