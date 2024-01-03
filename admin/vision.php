<?php
include '../config/config.php';
include 'menu.php';

// CREATE
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["descripcion"])) {
        $descripcion = $_POST["descripcion"];
        $sql = "INSERT INTO visiones (descripcion) VALUES ('$descripcion')";

        if ($conn->query($sql) === TRUE) {
            echo "Visión agregada con éxito.";
        } else {
            echo "Error al agregar la visión: " . $conn->error;
        }
    }
}

// DELETE
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    $delete_id = $_POST["delete_id"];
    $delete_sql = "DELETE FROM visiones WHERE id = $delete_id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "Visión eliminada con éxito.";
    } else {
        echo "Error al eliminar la visión: " . $conn->error;
    }
}

// READ
$result = $conn->query("SELECT * FROM visiones");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar Misión</title>
  
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
        <!-- Formulario de registro de producto -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary formulario-box">
                        <div class="box-body">
                            <h1 align="center">Agregar Visión</h1>
                            <form method="post" action="">
                                <div class="form-group">
                                    <label for="descripcion">Visión:</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Agregar Visión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>

        <!-- Mostrar visiones existentes -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary formulario-box">
                        <div class="box-body">
                            <h1 align="center">Visiones existentes</h1>
                            <ul>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo "<li>" . $row["descripcion"] . "
                                        <form method='post' action=''>
                                            <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                                            <button type='submit' class='btn btn-danger btn-sm'>Eliminar</button>
                                        </form>
                                    </li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
</html>