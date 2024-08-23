<?php
// Arreglo de usuarios y contraseñas
$usuarios = [
    ["usuario" => "admin", "clave" => "admin1234"],
    ["usuario" => "toto", "clave" => "toto1234"],
    ["usuario" => "lucero", "clave" => "12lucero"]
];

// Obtener los datos enviados por el formulario
$usuarioIngresado = $_POST['usuario'];
$claveIngresada = $_POST['clave'];

$loginExitoso = false;

foreach ($usuarios as $user) {
    if ($user['usuario'] === $usuarioIngresado && $user['clave'] === $claveIngresada) {
        $loginExitoso = true;
        break;
    }
}

// Mostrar un mensaje dependiendo si el login fue exitoso o no
if ($loginExitoso) {
    echo "<h3>Bienvenido, $usuarioIngresado!</h3>";
} else {
    echo "<h3>Usuario o contraseña incorrectos. Intente nuevamente.</h3>";
}
?>
