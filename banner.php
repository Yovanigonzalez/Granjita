<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Granjita</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <link rel="stylesheet" href="css/banner.css">

  <style>
    /* Estilos actualizados para el banner */
    .banner {
      align-items: center;
      justify-content: center;
      background-color: #F89A0C;
      color: #FFF;
      margin-top: -100px;
    }

    svg {
margin-top: -90px; /* Updated margin-top for smaller screens */
}

    /* Estilos actualizados para el banner */
    .banner img {
      max-width: 28%; /* Ajusta el ancho de la imagen según tus necesidades */
      max-height: 100%;
      border-radius: 50%;
      background-color: #fff;
      padding: 10px;
      object-fit: contain;
    }


    .banner-text {
      max-width: 80%;
      margin-top: 20px; /* Añadido espacio superior */
    }

    .banner-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center; /* Centra el contenido verticalmente */
      text-align: center;
    }

    .banner-content {
      display: flex;
      align-items: center;
      justify-content: center; /* Centra el contenido horizontalmente */
      width: 85%;
      height: 285px;
      padding: 20px;
    }

    .banner {
      flex-direction: row;
      text-align: left;
    }

    .banner img {
      margin-bottom: 0;
    }

    @media (max-width: 600px) {
  .contenedor {
    flex-direction: column;
  }

  .banner {
    position: relative;
    width: 100%;
    background-color: #F89A0C;
    color: #FFF;
    text-align: center;
    margin-top: -37px;
    height: 443px;

  }

  .banner img {
    max-width: 75%; /* Ajusta el ancho de la imagen según tus necesidades */
    max-height: 100%;
    border-radius: 50%;
    background-color: #fff;
    padding: 10px;
    object-fit: contain;
  }

  .banner-content {
    display: flex;
    align-items: center;
    justify-content: center; /* Centra el contenido horizontalmente */
    width: 85%;
    height: 400px;
    padding: 20px;
    flex-direction:column;
  }

  
  .imagen,
  .texto {
    max-width: 100%;
    margin-left: 0;
    margin-right: 0;
  }

  svg {
margin-top: 3px; /* Updated margin-top for smaller screens */
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
      <button class="button" onclick="irAConocer()">Conocer más</button>
      <script>
    function irAConocer() {
        window.location.href = 'acerca.php';
    }
</script>
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
          <div class='banner-content'>
            <div class='banner-text'>
              <h2><?php echo $titulo; ?></h2>
              <p><?php echo $subtitulo; ?></p>
            </div>
            <img src='<?php echo $imagen; ?>' alt='Imagen de La Granjita'>
          </div>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



<!-- Agrega este código después de incluir jQuery y Slick Carousel -->
<script>
  $(document).ready(function(){
    // Inicializar el carrusel con tu SVG personalizado
    $('#banner').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      arrows: false,
      customPaging: function(slider, i) {
        // Devuelve tu código SVG personalizado con el identificador
      }
    });
  });
</script>




</body>
</html>
