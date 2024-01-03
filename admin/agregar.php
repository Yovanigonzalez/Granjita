<?php
session_start();
// Resto del código de login.php

if (empty($_SERVER['HTTP_REFERER'])) {
    // El acceso se está realizando directamente desde la URL
    header('Location: error.php');
    exit();
}
?>

<?php
require('../config/conections.php');

include 'menu.php';

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Variable para almacenar el mensaje de éxito
$mensajeExitoso = "";

// Procesar el formulario al enviarlo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $precio60ml = isset($_POST['contenido']) && in_array('60ml', $_POST['contenido']) ? 350: 0;
    $precio100ml = isset($_POST['contenido']) && in_array('100ml', $_POST['contenido']) ? 500 : 0;
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $ponderacion = $_POST['ponderacion'];

    // Manejar la carga de la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $tempFile = $_FILES['imagen']['tmp_name'];
        $targetDir = '../perfumes/';
        $targetFile = $targetDir . basename($_FILES['imagen']['name']);

        // Mover la imagen cargada al directorio de destino
        if (move_uploaded_file($tempFile, $targetFile)) {
            // La imagen se ha cargado correctamente
        } else {
            $mensajeExitoso = "Error al cargar la imagen.";
        }
    } else {
        $mensajeExitoso = "Error al cargar la imagen.";
    }

    // Preparar la consulta SQL con un prepared statement para insertar los datos en la base de datos
    $sql = "INSERT INTO productos2 (titulo, subtitulo, precio60ml, precio100ml, categoria, descripcion, ponderacion, imagen) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Usar un prepared statement para prevenir inyección de SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssddssis", $titulo, $subtitulo, $precio60ml, $precio100ml, $categoria, $descripcion, $ponderacion, $targetFile);

    // Ejecutar el statement y verificar si se realizó correctamente
    if ($stmt->execute()) {
        $mensajeExitoso = "Producto agregado exitosamente.";
    } else {
        $mensajeExitoso = "Error al agregar el producto: " . $stmt->error;
    }

    // Cerrar el statement
    $stmt->close();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar productos</title>
  
    <!--Logo-->
  <link rel="shortcut icon" type="image/x-icon" href="../log/log.png">

  <!-- Enlaces a los archivos CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
  <!-- Icono de la página -->
  <link rel="icon" href="../logo/log.png" type="image/jpeg">

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



        <style>
    .nav-icon {
        margin-right: 20px; /* Puedes ajustar el valor según tus preferencias */
    }
</style>

        
      </ul>
    </nav>


<!-- Contenido principal -->
<div class="content-wrapper">
    <br>
    <!-- Formulario de registro de producto -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- Agregar la clase "formulario-box" para aplicar el estilo de cuadro blanco -->
                <div class="box box-primary formulario-box">
                    <div class="box-body">
                        <h1 align="center">Agregar Productos</h1>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($mensajeExitoso)) {
                            echo '<div class="mensaje-exito">' . $mensajeExitoso . '</div>';
                        }
                        ?>
                        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                            
                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="Inspirado en:" required>
                        </div>


                            <div class="form-group">
                                <label for="subtitulo">Subtítulo:</label>
                                <input type="text" class="form-control" id="subtitulo" name="subtitulo" required>
                            </div>

                            <div class="form-group">
                        <label>Contenido:</label>
                        <div>
                            <label>
                                <input type="checkbox" name="contenido[]" value="60ml"> 50 ml
                            </label>
                            <label>
                                <input type="checkbox" name="contenido[]" value="100ml"> 100 ml
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="precio60ml">Precio (50 ml):</label>
                        <input type="text" class="form-control" id="precio60ml" name="precio60ml" readonly>
                    </div>

                    <div class="form-group">
                        <label for="precio100ml">Precio (100 ml):</label>
                        <input type="text" class="form-control" id="precio100ml" name="precio100ml" readonly>
                    </div>

                    <script>
                        // Add JavaScript to dynamically update the prices based on the selected content
                        document.addEventListener('DOMContentLoaded', function () {
                            var contenidoCheckboxes = document.querySelectorAll('input[name="contenido[]"]');
                            var precio60mlInput = document.getElementById('precio60ml');
                            var precio100mlInput = document.getElementById('precio100ml');

                            contenidoCheckboxes.forEach(function (checkbox) {
                                checkbox.addEventListener('change', function () {
                                    updatePrecios();
                                });
                            });

                            function updatePrecios() {
                                var precio60ml = 0;
                                var precio100ml = 0;

                                contenidoCheckboxes.forEach(function (checkbox) {
                                    if (checkbox.checked) {
                                        if (checkbox.value === '60ml') { //50 ml
                                            precio60ml = 350;
                                        } else if (checkbox.value === '100ml') {
                                            precio100ml = 500;
                                        }
                                    }
                                });

                                precio60mlInput.value = precio60ml;
                                precio100mlInput.value = precio100ml;
                            }
                        });
                    </script>



                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                            </div>

                            <div class="form-group">
                                <label for="categoria">Categoría:</label>
                                <select class="form-control" id="categoria" name="categoria" required>
                                    <option value="">Seleccionar categoría</option>
                                    <option value="Mujer"><i class="fas fa-female"></i> Mujer</option>
                                    <option value="Hombre"><i class="fas fa-male"></i> Hombre</option>
                                    <option value="Unisex">Unisex</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="ponderacion">Ponderación:</label>
                                <div>
                                    <input type="radio" name="ponderacion" value="1" required> 1
                                    <input type="radio" name="ponderacion" value="2"> 2
                                    <input type="radio" name="ponderacion" value="3"> 3
                                    <input type="radio" name="ponderacion" value="4"> 4
                                    <input type="radio" name="ponderacion" value="5"> 5
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Agregar Producto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <br>
</div>


    </body>
</html>
