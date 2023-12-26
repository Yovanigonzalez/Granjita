<?php
// Incluir la conexión a la base de datos o la lógica de autenticación de usuarios

include 'config/config.php'; 

// Suponiendo que has obtenido los detalles del usuario de la base de datos
$id = 1; // Reemplaza con el ID de usuario real
$usuario = $_POST['username']; // Suponiendo que sanitizas esta entrada
$contraseña = $_POST['password']; // Suponiendo que sanitizas esta entrada
$rol = 'admin'; // Suponiendo que obtienes el rol del usuario desde la base de datos

// Verificar el rol del usuario y redirigir según sea necesario
if ($rol === 'admin') {
    header("Location: admin/inicio.php");
    exit();
} else {
    // Redirigir a una página diferente para usuarios no administradores si es necesario
    header("Location: error.php");
    exit();
}
?>

