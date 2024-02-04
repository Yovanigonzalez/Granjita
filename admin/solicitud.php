<?php
// Include the configuration file and database connection
include '../config/config.php';
include 'menu.php';

// Check if the form is submitted for deletion
if (isset($_POST['delete_id'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    // Perform deletion query
    $delete_query = "DELETE FROM solicitudes_empleo WHERE id = '$delete_id'";
    $delete_result = mysqli_query($conn, $delete_query);

}

// Perform the query to fetch data
$query = "SELECT id, vacante, nombre, direccion, telefono, correo, experiencia, educacion, habilidades, referencias, fecha_creacion FROM solicitudes_empleo";
$result = mysqli_query($conn, $query);

// Count the total number of records
$totalSolicitudes = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eliminar Bolsa de trabajo</title>

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
                                <?php
                                // Mostrar los datos y el botón de eliminar para cada registro
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<div class="mensaje-exito">';
                                    echo '<p>ID: ' . $row['id'] . '</p>';
                                    echo '<p>Vacante: ' . $row['vacante'] . '</p>';
                                    echo '<p>Nombre: ' . $row['nombre'] . '</p>';
                                    echo '<p>Direccion: ' . $row['direccion'] . '</p>';
                                    echo '<p>Telefono: ' . $row['telefono'] . '</p>';
                                    echo '<p>Correo: ' . $row['correo'] . '</p>';
                                    echo '<p>Experiencia: ' . $row['experiencia'] . '</p>';
                                    echo '<p>Educacion: ' . $row['educacion'] . '</p>';
                                    echo '<p>Habilidades: ' . $row['habilidades'] . '</p>';
                                    echo '<p>Referencias: ' . $row['referencias'] . '</p>';

                                    // ... (mostrar otras columnas)
                                        echo '<p>Fecha de Creación: ' . $row['fecha_creacion'] . '</p>';
                                    // Deletion form
                                    echo '<form method="post" action="">';
                                    echo '<input type="hidden" name="delete_id" value="' . $row['id'] . '">';
                                    echo '<button type="submit">Eliminar</button>';
                                    echo '</form>';
                                    echo '</div>';
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
