<?php
include '../config/config.php';
include 'menu.php';

// Verificar si se ha enviado el formulario de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteId"])) {
    $idToDelete = $_POST["deleteId"];

    // Realizar la lógica de eliminación
    $sqlDelete = "DELETE FROM banners WHERE id = $idToDelete";

    if ($conn->query($sqlDelete) === TRUE) {
        $deleteMessage = "Registro eliminado con éxito";
    } else {
        $deleteMessage = "Error al eliminar el registro: " . $conn->error;
    }
}

// Obtener todos los registros de la tabla banners
$sqlSelect = "SELECT * FROM banners";
$resultSelect = $conn->query($sqlSelect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crud Banner</title>

    <!--Logo-->
    <link rel="shortcut icon" type="image/x-icon" href="../log/ico.png">

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
        <!-- Contenido principal -->
        <div class="content-wrapper">
            <br>
            <!-- Formulario de eliminación -->
            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-danger formulario-box">
                            <div class="box-body">
                                <!-- Mostrar mensaje de eliminación (si existe) -->
                                <?php
                                if (isset($deleteMessage)) {
                                    echo '<div class="mensaje-exito">' . $deleteMessage . '</div>';
                                }
                                ?>

                                <!-- Mostrar registros y botones de eliminación -->
                                <?php
                                while ($row = $resultSelect->fetch_assoc()) {
                                    echo '<div>';
                                    echo '<p>Título: ' . $row['titulo'] . '</p>';
                                    echo '<p>Subtítulo: ' . $row['subtitulo'] . '</p>';
                                    echo '<p>Imagen: ' . $row['imagen'] . '</p>';
                                    echo '<form method="post">';
                                    echo '<input type="hidden" name="deleteId" value="' . $row['id'] . '">';
                                    echo '<button type="submit" class="btn btn-danger" name="deleteButton">Eliminar</button>';
                                    echo '</form>';
                                    echo '</div>';
                                    echo '<hr>';
                                }
                                ?>
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
