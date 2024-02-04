<?php
include 'menu.php';
include '../config/config.php';

// Initialize the success message variable
$successMessage = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];

    // Insert data into the 'trabajos' table
    $sql = "INSERT INTO trabajos (titulo, subtitulo) VALUES ('$titulo', '$subtitulo')";

    if ($conn->query($sql) === TRUE) {
        $successMessage = '<div class="mensaje-exito">Datos guardados correctamente</div>';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agregar trabajo</title>

    <!-- Logo -->
    <link rel="shortcut icon" type="image/x-icon" href="../logo/ico.png">

    <!-- Enlaces a los archivos CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <!-- Icono de la página -->
    <link rel="icon" href="../logo/ico.png" type="image/jpeg">

    <!-- Enlaces a los archivos JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>

    <!-- Estilos personalizados -->
    <style>
        .formulario-box {
            background-color: #ffffff;
            border: 1px solid #d2d6de;
            padding: 20px;
            border-radius: 5px;
        }
        .mensaje-exito {
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <br>
            <section class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="box box-primary formulario-box">
                            <div class="box-body">
                                <h1 align="center">Agregar Bolsa de trabajo</h1>
                                <?php echo $successMessage; ?> <!-- Display success message here -->
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="titulo">Título:</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitulo">Subtítulo:</label>
                                        <input type="text" class="form-control" id="subtitulo" name="subtitulo" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
        </div>
    </div>
</body>
</html>
