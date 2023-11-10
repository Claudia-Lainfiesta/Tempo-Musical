<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'programador1' && $password === '321') {
        header("Location: inicio.html");
    } else {
        header("Location: error_sesion.html");
    }
} else {
    echo "Por favor, ingresa tus credenciales.";
}
?>
