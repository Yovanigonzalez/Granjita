<?php
// Establecer la conexión a la base de datos (reemplaza estos valores con tus propias credenciales)
include 'config/config.php';
include 'nav/menu.php';

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Realizar la consulta a la base de datos
$sql = "SELECT id, titulo, subtitulo, imagen FROM tienda";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita | Tienda</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg, rgba(248, 154, 12, 0.00) 0%, #F89A0C 46.46%);
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #000;
        }

        .white-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin:20px;
            height: 100vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .chicken-item {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin: 10px;
            width: 200px; /* Puedes ajustar el ancho según tus necesidades */
            text-align: center;
            height: 300px;
        }

        .chicken-item img {
            width: 100%; /* Establecer el ancho al 100% del contenedor */
            height: auto; /* Mantener la proporción original de la imagen */
        }
    </style>
</head>
<body>
    
    <div class="white-box">
        <?php
        // Iterar sobre los resultados de la consulta y mostrar los datos
        while ($row = $result->fetch_assoc()) {
            echo '<div class="chicken-item">';
            echo '<h3>' . $row['titulo'] . '</h3>';
            echo '<p>' . $row['subtitulo'] . '</p>';
            // Ruta de la imagen: ajustar según la estructura de tus carpetas
            echo '<img src="tienda/' . $row['imagen'] . '" alt="Imagen del producto">';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>
