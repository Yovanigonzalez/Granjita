<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];

    $uploadDir = '../banner/';
    $imagen = '';

    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
        // Generar un nombre único para la imagen
        $imagen = $uploadDir . uniqid() . '_' . basename($_FILES["imagen"]["name"]);

        // Mover la imagen a la carpeta 'banner'
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $imagen);
    }

    // Insertar la ruta de la imagen en la base de datos
    $sql = "INSERT INTO banners (titulo, subtitulo, imagen) VALUES ('$titulo', '$subtitulo', '$imagen')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='mensaje-exito'>Registro agregado exitosamente.</div>";
    } else {
        echo "Error al agregar el registro: " . $conn->error;
    }
}

$conn->close();
?>
