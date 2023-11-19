<?php
// Establecer la conexión a la base de datos (asegúrate de cambiar los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tempo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$codigo_trabajador = $_POST['codigo_trabajador'];
$user = $_POST['user'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];
$fecha_nacimiento = $_POST['edad'];

// Calcular la edad
$fechaNac = new DateTime($fecha_nacimiento);
$hoy = new DateTime();
$edad = $hoy->diff($fechaNac)->y;

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (codigo_trabajador, user, correo, contra, fecha_nacimiento, edad) 
        VALUES ('$codigo_trabajador', '$user', '$correo', '$contra', '$fecha_nacimiento', '$edad')";

if ($conn->query($sql) === TRUE) {
    // Redireccionar a la página de datos_correctos.html
    header("Location: datos_correctos.html");
    exit();
} else {
    // Redireccionar a la página de datos_incorrectos.html
    header("Location: datos_incorrectos.html");
    exit();
}

// Cerrar la conexión
$conn->close();
?>



