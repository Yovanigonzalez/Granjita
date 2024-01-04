<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Granjita</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" href="css/banner.css">

  <style>
  /* Existing styles for the banner */
  .banner {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #F89A0C;
    position: relative;
    flex-direction: column;
    text-align: center;
    height: 300px; /* Set a fixed height for the banner container */
  }

  .banner img {
    max-width: 100%; /* Make sure the image doesn't exceed the container width */
    height: 100%; /* Set the image height to fill the container */
    object-fit: cover; /* Maintain aspect ratio while covering the container */
  }

  .banner-text {
    max-width: 80%;
  }

  .banner-item img {
    max-width: 100%; /* Ajusta el tamaño máximo de la imagen al ancho del contenedor */
    height: auto; /* Mantiene la proporción del aspecto original de la imagen */
  }

  @media (min-width: 768px) {
    /* Additional styles for larger screens if needed */
    .banner {
      flex-direction: row;
      text-align: left;
    }

    .banner img {
      margin-bottom: 0;
    }
  }
</style>



</head>
<body>

  <div class="contenedor">
    <!-- Tu contenido actual -->
    <img class="imagen" src="log/ico.png" alt="Logo de Distribuidora">
    <div class="texto">
      <h1>ABASTECEDORA<br> LA 'GRANJITA' </h1>
      <br>
    
      <h4>La Granjita es una abastecedora de pollo comprometida con brindar productos avícolas frescos y de primera calidad. Ubicados en el corazón de Tehuacán, Puebla, nos esforzamos por ofrecer a nuestros clientes opciones saludables y deliciosas de pollo y productos avícolas.</h4>
      <button>Conocer más</button>
    </div>
  </div>

    <svg xmlns="http://www.w3.org/2000/svg" width="900" height="130" viewBox="0 0 900 130" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L75 9.28571C150 18.5714 300 37.1429 450 37.1429C600 37.1429 750 18.5714 825 9.28571L900 0V130H825C750 130 600 130 450 130C300 130 150 130 75 130H0V0Z" fill="#F89A0C"/>
    </svg>

<!-- Nuevo banner con imagen y texto -->
<div class="banner" id="banner">
  <?php
  include 'config/config.php';

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }

  // Consulta SQL para obtener datos de la tabla 'banner'
  $sql = "SELECT id, titulo, subtitulo, imagen FROM banners";
  $result = $conn->query($sql);

  // Verificar si se obtuvieron resultados
  if ($result->num_rows > 0) {
    // Mientras haya filas en el resultado, mostrar los banners
    while ($row = $result->fetch_assoc()) {
      // Aquí puedes usar los datos obtenidos de la base de datos
      $id = $row['id'];
      $titulo = $row['titulo'];
      $subtitulo = $row['subtitulo'];
      $imagen = "banner/" . $row['imagen'];  // Ajusta la ruta de la imagen
      ?>

      <!-- Elemento del Banner -->
      <div class='banner-item'>
        <div class='banner-text'>
          <h2><?php echo $titulo; ?></h2>
          <p><?php echo $subtitulo; ?></p>
        </div>
        <img src='<?php echo $imagen; ?>' alt='Imagen de La Granjita'>
      </div>

      <?php
    }
  } else {
    echo "No hay banners disponibles en la base de datos.";
  }

  // Cerrar la conexión a la base de datos
  $conn->close();
  ?>
</div>

  </div>

</body>
</html>









