<?php

include '../config/config.php';
// Handle form submission and perform CRUD operations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a database connection
    // Perform validation and sanitation on user input before using it in SQL queries

    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];

    // Handling file upload
    $imagen = ''; // Placeholder for the image file name
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
        $uploadDir = 'banner/'; // Directory where you want to store uploaded images
        $imagen = $uploadDir . basename($_FILES["imagen"]["name"]);
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $imagen);
    }

    // Example: Insert data into a hypothetical 'banners' table
    $sql = "INSERT INTO banners (titulo, subtitulo, imagen) VALUES ('$titulo', '$subtitulo', '$imagen')";
    
    // Assuming you have a database connection object named $conn
    // $conn->query($sql); // Uncomment and adapt this line based on your database connection method

    // For simplicity, just displaying success message here
    echo "<div class='mensaje-exito'>Registro agregado exitosamente!</div>";
}
?>

